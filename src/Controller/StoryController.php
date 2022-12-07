<?php

namespace App\Controller;

use App\Entity\Scene;
use App\Entity\Storyline;
use App\Form\SceneType;
use App\Form\StorylineType;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class StoryController extends AbstractController
{
    #[Route('/story', name: 'app_story_create')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $story = new Storyline();


        $form = $this->createForm(StorylineType::class, $story);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {

            $story->setCreatedAt(new \datetime);
            $story->setUpdatedAt(new \datetime);
            $story->setPublishedBy($this->getUser());
            $story->setPublishedBy($this->getUser());

            $em->persist($story);
            $em->flush();

            if($story->getContributors() !== null)
            {
                // dump($story->getContributors()); exit;

                foreach ($story->getContributors() as $key => $contributor)
                {
                    $this->sendEmail($contributor->getEmail(), $contributor->getFirstname(), $contributor->getLastname(),  $this->getUser()->getFirstname()." ".$this->getUser()->getLastname(), $story->getId());

                }

            }

            $request->getSession()->getFlashBag()->add('notice', 'The storyline has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_story_new_scene', ['id' => $story->getId()]));

        }

        return $this->render('story/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/story/{id}/new/first-scene', name: 'ns_web_story_new_scene')]
    public function createScene($id, Request $request, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $scene = new Scene();

        $story = $em->getRepository(Storyline::class)->find($id);
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



            $request->getSession()->getFlashBag()->add('success', 'The scenes has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_story_view', ['id' => $id ]));

        }


        return $this->render('story/firstscene.html.twig', [
            'form' => $form->createView(),

        ]);

    }


    #[Route('/story/{id}/view', name: 'ns_web_story_view')]
    public function view(ManagerRegistry $doctrine, $id)
    {
        $em = $doctrine->getManager();
        $story = $em->getRepository(Storyline::class)->find($id);
        return $this->render('story/view.html.twig', [
            'story' => $story
        ]);
    }

    #[Route('/story/edit/{id}', name: 'ns_web_story_edit')]
    public function edit($id, Request $request, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $story = $em->getRepository(Storyline::class)->find($id);


        $form = $this->createForm(StorylineType::class, $story);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $story->setUpdatedAt(new \datetime);

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The storyline has been successfully updated.');

            return $this->redirect($this->generateUrl('ns_web_story_view', ['id' => $story->getId()]));

        }

        return $this->render('story/edit.html.twig',[
            'form' => $form->createView(),
            'story' => $story
            //'sceneForm' => $sceneForm->createView()
        ]);
    }

    #[Route('/story/read/{id}', name: 'ns_web_read_story')]
    public function read($id, ManagerRegistry $doctrine, Request $request, PaginatorInterface $paginator)
    {
        $em    = $doctrine->getManager();
        $story = $em->getRepository(Storyline::class)->find($id);

        $query = $em->getRepository(Scene::class)->getStoryScene($story);


        /*$dql   = "SELECT s FROM App:Scene s WHERE s.storyline = :story and s.isEnabled = :true   Order BY s.createdAt ";
        $query = $em->createQuery($dql)->setMaxResults(5);
        $query->setParameters([
            'story' => $story,
            'true' => true
        ]);*/
       //dd($query);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            1/*limit per page*/
        );

        // parameters to template
        return $this->render('story/read.html.twig', [
            'pagination' => $pagination,
            'story' => $story
        ]);

    }


    public function sendEmail($email, $firstname, $lastname, $author, $story )
    {
        $mailer = $this->get('mailer');
        $email = (new Email())
            ->from('_mainaccount@salysugu.com')
            ->to('sidibesekouassane@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Nextscenes.com - Invitation')
            ->html(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'includes/invitation.html.twig',[
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'author' => $author,
                        'story' => $story
                    ]
                ));

        $mailer->send($email);



    }

}
