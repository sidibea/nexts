<?php

namespace App\Controller\Admin;


use App\Entity\Forum;
use App\Form\ForumType;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends  AbstractController
{
    #[Route('/admin/forums', name: 'ns_admin_forun')]
    public function listAction(Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em    = $doctrine->getManager();
        $dql   = "SELECT f FROM App:Forum f";
        $query = $em->createQuery($dql);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );

        return $this->render('Admin/Forum/list.html.twig', [
            'pagination' => $pagination
        ]);
    }
    #[Route('/admin/forums/new', name: 'ns_admin_forun_add_new')]
    public function addAction(Request $request, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $forum->setCreatedAt(new \datetime);
            $forum->setUpdatedAt(new \datetime);

            $em->persist($forum);
            $em->flush();


            $request->getSession()->getFlashBag()->add('success', 'Le forum a bien été enregistrée.');

            return $this->redirect($this->generateUrl('ns_admin_forun_edit', ['id' => $forum->getId()]));

        }

        return $this->render('Admin/Forum/add.html.twig', [
            'form' => $form->createView()
        ]);

    }

    #[Route('/admin/forums/{id}/edit', name: 'ns_admin_forun_edit')]
    public function editAction($id, Request $request,  ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $forum = $em->getRepository(Forum::class)->find($id);
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $forum->setUpdatedAt(new \datetime);

            $em->flush();


            $request->getSession()->getFlashBag()->add('success', 'L\'axe a bien été enregistrée.');

            return $this->redirect($this->generateUrl('ns_admin_forun_edit', ['id' => $forum->getId()]));

        }

        return $this->render('Admin/Forum/add.html.twig', [
            'form' => $form->createView()
        ]);

    }

}