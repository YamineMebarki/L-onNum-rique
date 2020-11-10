<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{

    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration (Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form =$this->createForm( RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $user->setRole('user');

            $mail = htmlspecialchars($user->getEmail());
            $name = htmlspecialchars($user->getUsername());
            $str =  '' .$user->getUsername().' Bienvenue sur L@nNumérique Forum de partages de savoir-faire sur le Web , servez vous de vos compétences afin de créer un article qui sera disponible à toute la communautée.';
            $msg = htmlspecialchars($str);
            $headers = "MIME-Version: 1.0\r\n";
            $headers = "From: L@nNumérique" . PHP_EOL;
            $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
            mail($mail, $name, $msg, $headers);

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/login", name="security_login")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login()
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {

    }

    /**
     * @Route("/RGPD", name="rgpd")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function rgpd()
    {
        return  $this->render('security/confidential.html.twig');
    }

    /**
     * @Route("/mentions", name="mention_legal")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mentions()
    {
        return $this->render('security/mention_legal.html.twig');
    }

    /**
     * @Route("/404", name="404")
     */
    public function notFound()
    {
        return $this->render('security/site.html.twig');
    }
}
