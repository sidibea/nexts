<?php
namespace App\Controller;
ini_set('memory_limit', '51256454245456456');

use App\Entity\ProposedScene;
use App\Entity\Scene;
use App\Entity\Storyline;
use App\Form\ProposedSceneType;
use App\Form\SceneType;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SceneController extends AbstractController
{
    #[Route('/scenes/view/{id}', name: 'ns_web_scenes_view')]
    public function view(Request $request, $id, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em = $doctrine->getManager();

        //dump($id); exit;
        $story = $em->getRepository(Storyline::class)->find($id);
        //$pagination = $em->getRepository(Scene::class)->getScenes($story, true);

        $dql   = "SELECT s FROM App:Scene s WHERE s.storyline = :story and s.isEnabled = :true Order BY s.createdAt, s.count DESC ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'story' => $story,
            'true' => true
        ]);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        $lastScene = $em->getRepository(Scene::class)->LastScene($id);
        if($lastScene != null)
            $count = $em->getRepository(ProposedScene::class)->LastProposed($lastScene[0]->getId());
        else
            $count = null;


        //dump($lastScene); exit;

        $proposed = new ProposedScene();
        $form = $this->createForm(ProposedSceneType::class, $proposed);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
           // dump($form->get('title')->getData()); exit;
            $proposed->setTitle('Scene '.($lastScene[0]->getCount()+1) ." /".$count." - ".$form->get('title')->getData());
            //dd($proposed->getTitle());
            $proposed->setIsEnabled(false);
            $proposed->setPublishedBy($this->getUser());
            $proposed->setScene($lastScene[0]);
            $proposed->setCount($count);

            $proposed->setCreatedAt(new \datetime);
            $proposed->setUpdatedAt(new \datetime);

            $em->persist($proposed);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_scenes_view', ['id' => $id]));
        }
        $newScene = new Scene();




        $sceneForm = $this->createForm(SceneType::class, $newScene);
        $sceneForm->handleRequest($request);
        $count = $em->getRepository(Scene::class)->SceneCount($id);

        if($sceneForm->isSubmitted() && $sceneForm->isValid())
        {
            $newScene->setTitle("Scene ".$count." (".$newScene->getTitle().")");
            $newScene->setCreatedAt(new \datetime);
            $newScene->setUpdatedAt(new \datetime);
            $newScene->setStoryline($story);
            $newScene->setIsEnabled(true);
            $newScene->setCount($count);

          //  dd($newScene);

            $em->persist($newScene);
            $em->flush();
            $del = $em->getRepository(ProposedScene::class)->findBy([
                'scene' => $proposed->getScene()
            ]);

            if($del != null)
            {
                foreach ($del as $key=>$val)
                {
                    $em->remove($val);
                    $em->flush();
                }
            }
            $em->remove($proposed);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_scenes_view', ['id' => $story->getId()]));

        }

        return $this->render('scenes/view.html.twig', [
            'pagination' => $pagination,
            'story' => $story,
            'form' => $form->createView(),
            'sceneForm' => $sceneForm->createView(),
            'scene' =>  ($lastScene != null)?$lastScene[0]:null
        ]);
    }

    #[Route('/scenes/edit/{id}', name: 'ns_web_scenes_edit')]
    public function edit(Request $request, $id, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em = $doctrine->getManager();

        //dump($id); exit;
        $proposed = $em->getRepository(ProposedScene::class)->find($id);
        //$pagination = $em->getRepository(Scene::class)->getScenes($story, true);



        //dump($lastScene); exit;

        $form = $this->createForm(ProposedSceneType::class, $proposed);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // dump($form->get('title')->getData()); exit;
            $proposed->setTitle('Scene '.($proposed->getScene()->getCount()+1) ." /".$proposed->getCount()." - ".$form->get('title')->getData());
            //dd($proposed->getTitle());
            $proposed->setScene($proposed->getScene());

            $proposed->setUpdatedAt(new \datetime);

            $em->persist($proposed);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_scenes_view', ['id' => $proposed->getScene()->getStoryline()->getId()]));
        }



        return $this->render('proposedScene/edit.html.twig', [
            'form' => $form->createView(),
            'proposed' => $proposed
        ]);
    }

    public function proposedScene($story, Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em = $doctrine->getManager();

        $dql   = "SELECT s,sc,st FROM App:ProposedScene s JOIN s.scene sc LEFT JOIN sc.storyline st  WHERE st.id = :story and  s.isEnabled = :false Order BY s.createdAt, s.id DESC ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'false' => false,
            'story' => $story
        ]);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1),
            100
        );

        return $this->render('scenes/ProposedScene.html.twig', [
            'pagination' => $pagination
        ]);

    }

    #[Route('/scenes/add/{id}', name: 'ns_web_scenes_add')]
    public function add($id,Request $request, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $story = $em->getRepository(Storyline::class)->find($id);
        $scene = new Scene();
        $count = $em->getRepository(Scene::class)->SceneCount($id);

        $form = $this->createForm(SceneType::class, $scene);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $scene->setTitle("Scene ".$count." (".$scene->getTitle().")");
            $scene->setCreatedAt(new \datetime);
            $scene->setUpdatedAt(new \datetime);
            $scene->setStoryline($story);
            $scene->setIsEnabled(true);
            $scene->setCount($count);

            $em->persist($scene);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_scenes_read', ['id' => $scene->getId()]));

        }

        return $this->render('scenes/add.html.twig', [
            'form' => $form->createView()
        ]);


    }
    #[Route('/scenes/{id}/read', name: 'ns_web_scenes_read')]
    public function readAction($id, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();


        $scene = $em->getRepository(Scene::class)->find($id);
        return $this->render('scenes/read.html.twig', [
            'scene' => $scene,
        ]);
    }


}
