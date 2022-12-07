<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\ProposedScene;
use App\Entity\Scene;
use App\Entity\Storyline;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;

    }
    
    #[Route('/admin', name: 'ns_admin_homepage')]
    public function index(): Response
    {
       // $this->em = $doctrine->getManager();
        $users = $this->em->getRepository(User::class)->NumberOfUsers();
        $storyline = $this->em->getRepository(Storyline::class)->NumberOfStorylines();
        $scenes = $this->em->getRepository(Scene::class)->NumberOfScenes();
        $proposed = $this->em->getRepository(ProposedScene::class)->NumberOfProposedScenes();
        $articles = $this->em->getRepository(Article::class)->NumberOfArticles();

        $storyChart = $this->em->getRepository(Storyline::class)->getStoryChart();
        $sceneChart = $this->em->getRepository(Scene::class)->getScenesChart();

        return $this->render('Admin/dashboard.html.twig', [
            'users' => $users,
            'storyline' => $storyline,
            'scenes' => $scenes,
            'proposed' => $proposed,
            'articles' => $articles,
            'storyChart' => $storyChart,
            'sceneChart' => $sceneChart
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Nextscenes');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
