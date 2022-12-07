<?php

namespace App\Controller;

use App\Entity\Call;
use App\Entity\Forum;
use App\Entity\ProposedScene;
use App\Entity\Scene;
use App\Entity\Storyline;
use App\Entity\TopAuthor;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ManagerRegistry $doctrine, Request $request, PaginatorInterface $paginator): Response
    {
        $em = $doctrine->getManager();
        $call = $em->getRepository(Call::class)->findAll();
        $authors = $em->getRepository(TopAuthor::class)->findAll();
        $forum = $em->getRepository(Forum::class)->findBy([
            'isEnabled' => true
        ]);
        $dql   = "SELECT s FROM App\Entity\Article s WHERE  s.enabled = :true Order BY s.createdAt ASC ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'true' => true
        ]);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            4/*limit per page*/
        );
        return $this->render('home/index.html.twig', [
            'forums' => $forum,
            'articles' => $pagination,
            'call' => $call,
            'authors' => $authors
        ]);
    }
    #[Route('/forum/menu', name: 'app_forum_menu')]
    public function menu(ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $forums = $em->getRepository(Forum::class)->findBy([
            'isEnabled' => true
        ]);
        return $this->render("home/Category/category.html.twig", [
            'forums' => $forums
        ]);
    }

    public function counter(ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();

        $author = $em->getRepository(User::class)->NumberOfAuthors();
        $storyline = $em->getRepository(Storyline::class)->NumberOfStorylines();
        $scenes = $em->getRepository(Scene::class)->NumberOfScenes();
        $proposed = $em->getRepository(ProposedScene::class)->NumberOfProposedScenes();



        return $this->render('includes/counter.html.twig', [
            'authors' => $author,
            'storyline' => $storyline,
            'scenes' => $scenes,
            'proposed' => $proposed
        ]);
    }

}
