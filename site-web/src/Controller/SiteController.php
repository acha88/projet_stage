<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index(): Response {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('site/home.html.twig', [
            'title' => "Help Info"
        ]);
    }
    /**
    * @Route("/site/mooc", name="mooc")
    */
    public function mooc() {
        return $this->render('site/mooc.html.twig');
    }
    /**
    * @Route("/site/demo", name="demo") 
    */
    public function demo() {
        return $this->render('site/demo.html.twig');
    }
}
