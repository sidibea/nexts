<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/3/18
 * Time: 12:05 PM
 */

namespace App\Controller\Admin;


use App\Entity\ProposedScene;
use App\Entity\Scene;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SceneController extends AbstractController
{
    #[Route('/admin/scenes', name: 'ns_admin_scenes')]
    public function listAction(Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator)
    {
        $em    = $doctrine->getManager();
        $dql   = "SELECT p FROM App:ProposedScene p WHERE p.isEnabled = :false";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'false' => false
        ]);

        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('Admin/Scenes/list.html.twig', [
            'pagination' => $pagination
        ]);
    }

    #[Route('/admin/scenes/{id}/view-proposed', name: 'ns_admin_view_proposed_scenes')]
    public function viewAction($id, Request $request, ManagerRegistry $doctrine)
    {
        $em    = $doctrine->getManager();

        $proposed = $em->getRepository(ProposedScene::class)->findBy([
            'id' => $id
        ]);

        //dump($proposed); exit;



        return $this->render('Admin/Scenes/view.html.twig', [
            'proposed' => $proposed[0]
        ]);

    }

    #[Route('/admin/scenes/{id}/validate', name: 'ns_admin_activate_scenes')]
    public function validateAction($id, Request $request, ManagerRegistry $doctrine)
    {
        $em    = $doctrine->getManager();


        $proposed  = $em->getRepository(ProposedScene::class)->find($id);

        $scene = new Scene();

        $scene->setContent($proposed->getContent());
        $scene->setTitle($proposed->getTitle());
        $scene->setCreatedAt(new \datetime);
        $scene->setUpdatedAt(new \datetime);
        $scene->setStoryline($proposed->getScene()->getStoryline());
        $scene->setIsEnabled(true);

        $em->remove($proposed);
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

        $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

        return $this->redirect($this->generateUrl('ns_admin_scenes'));

    }





}