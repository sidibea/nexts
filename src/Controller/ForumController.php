<?php

namespace App\Controller;

use App\Entity\Forum;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends AbstractController
{
    #[Route('/forum/{id}', name: 'app_forum_show')]
    public function index($id, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $forum = $em->getRepository(Forum::class)->find($id);

        return $this->render('forum/index.html.twig', [
            'forum' => $forum,
        ]);
    }

    #[Route('/forums', name: 'ns_web_forums_display')]
    public function list(ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $forums = $em->getRepository(Forum::class)->findBy(['isEnabled' => true]);

        return $this->render('forum/list.html.twig', [
            'forums' => $forums
        ]);


    }

    public function vertical(ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $forums = $em->getRepository(Forum::class)->findBy([
            'isEnabled' => true
        ]);
        return $this->render("home/Category/vertical.html.twig", [
            'forums' => $forums
        ]);


    }

}
