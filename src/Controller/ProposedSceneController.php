<?php

namespace App\Controller;

use App\Entity\ProposedScene;
use App\Entity\Scene;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProposedSceneController extends AbstractController
{
    #[Route('/scenes/{id}/view-proposed-scene', name: 'ns_web_proposed_scenes_view')]
    public function viewAction($id, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em = $doctrine->getManager();
        $scene = $em->getRepository(ProposedScene::class)->find($id);

        return $this->render('proposedScene/view.html.twig', [
            'proposed' => $scene
        ]);
    }

    #[Route('/scenes/validate/{id}', name: 'ns_web_validate_scenes')]
    public function validateAction($id, Request $request, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();

        $proposed = $proposed = $em->getRepository(ProposedScene::class)->find($id);

        $scene = new Scene();

        $scene->setContent($proposed->getContent());
        $scene->setTitle($proposed->getTitle());
        $scene->setCreatedAt(new \datetime);
        $scene->setUpdatedAt(new \datetime);
        $scene->setCount($proposed->getScene()->getCount()+1);
        $scene->setStoryline($proposed->getScene()->getStoryline());
        $scene->setIsEnabled(true);


        $em->persist($scene);
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

        return $this->redirect($this->generateUrl('ns_web_scenes_view', ['id' => $proposed->getScene()->getStoryline()->getId()]));


    }



}