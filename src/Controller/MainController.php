<?php

namespace App\Controller;

use App\Api\ForumManager;
use App\Entity\Forum;
use App\Entity\User;
use App\Form\ProfileType;
use App\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Nucleos\UserBundle\EventListener\AuthenticationListener;
use Nucleos\UserBundle\Util\TokenGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/register', name: 'app_registration')]
    public function register(ManagerRegistry $doctrine, Request $request, MailerInterface $mailer, TokenGenerator $tokenGenerator)
    {
        $em = $doctrine->getManager();
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setConfirmationToken($tokenGenerator->generateToken());
            $url = 'http://mynextscenes.com:8002'. $this->generateUrl("app_registration_confirm", ['token' => $user->getConfirmationToken()]);

            $email = (new Email())
                ->from('_mainaccount@salysugu.com')
                ->to($user->getEmail())
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Welcome to nextscenes !')
                ->text('Sending emails is fun again!')
                ->html('<p>Bonjour '.$user->getUsername().' ! </p> <p>Pour valider votre compte utilisateur, merci de vous rendre sur <a href="'.$url.'">'.$url.'</a> <br>Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.</p>');

            $mailer->send($email);

            $em->persist($user);
            $em->flush();

        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);

    }
    #[Route('/registration/confirm/{token}', name: 'app_registration_confirm')]
    public function confirmation($token, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        /** @var User $user */
        $user = $em->getRepository(User::class)->findOneBy([
            'confirmationToken' => $token
        ]);
        if ($user != null){
            $this->addFlash('registration-success', 'Congrats '.$user->getUsername().', your account is now activated.');
            $user->setEnabled(true);
            $em->flush();
            return $this->redirectToRoute('nucleos_user_security_login');
            //return $guard->authenticate($user,$request,$login,'main');
        }
        else
            $this->addFlash('registration-danger', 'Votre token est incorrect !');
        //dd($user);

        return $this->render('user/confirm.html.twig', [
            'user' => $user
        ]);

    }

    #[Route('/menu/forum', name: 'app_forum_menu')]
    public function forumMenu(ManagerRegistry $doctrine, Request $request)
    {
        $em = $doctrine->getManager();
        $forums = $em->getRepository(Forum::class)->findAll();


        return $this->render('includes/menu/forum.html.twig', [
            'forums' => $forums
        ]);

    }

    #[Route('/slider/forum', name: 'app_forum_slider')]
    public function forumSlider(ManagerRegistry $doctrine, Request $request)
    {
        $em = $doctrine->getManager();
        $forums = $em->getRepository(Forum::class)->findAll();

        return $this->render('includes/forum-slider.html.twig', [
            'forums' => $forums
        ]);

    }
    #[Route('/how-it-works', name: 'ns_web_how_it_works')]
    public function how()
    {
        return $this->render('howTo.html.twig');
    }
    #[Route('/contact-us', name: 'ns_web_contact')]

    public function contact()
    {
        return $this->render('contact.html.twig');
    }
    #[Route('/terms-of-use', name: 'ns_web_terms_of_use')]
    public function term()
    {
        return $this->render('howTo.html.twig');
    }

    #[Route('/user/edit-profile', name: 'app_edit_profile')]
    public function editProfile(ManagerRegistry $doctrine, Request $request)
    {
        $em = $doctrine->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->generateUrl('app_edit_profile');
        }


        return $this->render('user/edit_profile.html.twig', [
            'form' => $form->createView()
        ]);

    }

}
