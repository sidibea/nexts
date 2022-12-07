<?php

namespace App\Controller;

use App\Entity\Forum;
use App\Entity\Podcast;
use App\Form\PodcastType;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PodcastController extends AbstractController
{
    #[Route('/podcasts', name: 'app_podcasts')]
    public function index( ManagerRegistry $doctrine, PaginatorInterface $paginator, Request $request): Response
    {
        $em = $doctrine->getManager();

        $dql   = "SELECT pc FROM App:Podcast pc  where pc.isEnabled = :true Order BY pc.createdAt, pc.id ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'true' => true,
        ]);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1),
            100
        );

        return $this->render('podcast/index.html.twig', [
            'podcasts' => $pagination
        ]);
    }

    #[Route('/podcasts/new', name: 'app_podcast_new')]
    public function add(ManagerRegistry $doctrine, Request $request, PaginatorInterface $paginator)
    {
        $em = $doctrine->getManager();
        $podcast = new Podcast();

        $form = $this->createForm(PodcastType::class, $podcast);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {
            $podcast->setCreatedAt(new \datetime);
            $podcast->setUpdatedAt(new \datetime);

            $em->persist($podcast);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The podcast has been successfully created.');

            return $this->redirect($this->generateUrl('app_podcasts'));

        }

        return $this->render('podcast/new.html.twig', [
            'form' => $form->createView()
        ]);

    }
}