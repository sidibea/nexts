<?php

namespace App\Controller\Admin;

use App\Entity\Call;
use App\Entity\TopAuthor;
use App\Form\AuthorsType;
use App\Form\CallType;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TopAuthorsController  extends AbstractController
{
    #[Route('/admin/top-authors', name: 'ns_admin_top_authors')]
    public function index(Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em    = $doctrine->getManager();
        $dql   = "SELECT f FROM App:TopAuthor f";
        $query = $em->createQuery($dql);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );

        return $this->render('Admin/topAuthors/list.html.twig', [
            'pagination' => $pagination
        ]);

    }
    #[Route('/admin/top-authors/new', name: 'ns_admin_top_authors_new')]
    public function add(Request $request, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $author = new TopAuthor();
        $form = $this->createForm(AuthorsType::class, $author);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($author);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'The author has been successfully added');

            return $this->redirect($this->generateUrl('ns_admin_top_authors'));

        }

        return $this->render('Admin/topAuthors/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

}