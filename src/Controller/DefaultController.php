<?php
// src/Controller/DefaultController.php
namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
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


}