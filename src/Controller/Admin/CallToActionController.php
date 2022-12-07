<?php

namespace App\Controller\Admin;

use App\Entity\Call;
use App\Form\CallType;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CallToActionController extends AbstractController
{
    #[Route('/admin/call-to-action', name: 'ns_admin_to_action')]
    public function index(Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em    = $doctrine->getManager();
        $dql   = "SELECT f FROM App:Call f";
        $query = $em->createQuery($dql);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );

        return $this->render('Admin/call/list.html.twig', [
            'pagination' => $pagination
        ]);

    }
    #[Route('/admin/call-to-action/new', name: 'ns_admin_to_action_new')]
    public function add(Request $request, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $call = new Call();
        $form = $this->createForm(CallType::class, $call);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($call);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Le forum a bien été enregistrée.');

            return $this->redirect($this->generateUrl('ns_admin_to_action'));

        }

        return $this->render('Admin/call/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

}