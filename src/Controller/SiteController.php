<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    /**
     * @Route("/site", name="site")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {
        return $this->render('site/accueil.html.twig');
    }

    /**
     * @Route("/chevaux", name="chevaux")
     */
    public function chevaux()
    {
        return $this->render('site/chevaux.html.twig');
    }

    /**
     * @Route("/hippodromes", name="hippodromes")
     */
    public function hippodromes()
    {
        return $this->render('site/hippodromes.html.twig');
    }

    /**
     * @Route("/historique", name="historique")
     */
    public function historique()
    {
        return $this->render('site/historique.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('security/login.html.twig');
    }

    
}
