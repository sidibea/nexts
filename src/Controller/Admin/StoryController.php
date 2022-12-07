<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/21/18
 * Time: 10:49 PM
 */

namespace App\Controller\Admin;


use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StoryController extends AbstractController
{
    #[Route('/admin/storylines', name: 'ns_admin_storyline')]
    public function listAction(Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em    = $doctrine->getManager();
        $dql   = "SELECT s FROM App:Storyline s ";
        $query = $em->createQuery($dql);


        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1),
            20
        );

        return $this->render('Admin/Story/list.html.twig', [
            'pagination' => $pagination
        ]);
    }

}