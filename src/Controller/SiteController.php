<?php

namespace App\Controller;

use App\Entity\Cheval;
use App\Form\ChevalType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
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

    /**
     * @Route("/newCheval", name="newCheval")
     */
    public function createCheval(Request $request, ObjectManager $manager) {
        $cheval = new Cheval();

        $formCheval = $this->createFormBuilder($cheval)
                           ->add('nom')
                           ->add('commentaire')
                           ->add('discipline')
                           ->getForm();

        $formCheval->handleRequest($request);

        if($formCheval->isSubmitted() && $formCheval->isValid()) {
            $cheval->setCreatedAt(new \DateTime("now"));

            $manager->persist($cheval);
            $manager->flush();

            return $this->redirectToRoute('newCheval');
        }

        return $this->render('site/newCheval.html.twig', ['formCheval' => $formCheval->createView()]);
    }

    
}
