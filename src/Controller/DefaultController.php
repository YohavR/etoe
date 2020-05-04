<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\FOSUserBundle;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name = "home")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/test", name = "test")
     */
    public function test()
    {
        return $this->render('test.html.twig');
    }

    /**
     * @Route("/mail/{email}", name="confirm_mail")
     * @param \Swift_Mailer $mailer
     * @param string $email
     */
    public function mail(\Swift_Mailer $mailer, string $email)
    {
        $message = (new \Swift_Message('Test EMAIL'))
            ->setFrom('studentpupil26@gmail.com')
            ->setTo([$email])
            ->setBody("Coucou je fais un test")
        ;
        $mailer->send($message);

        return $this->redirectToRoute('home');
    }


}