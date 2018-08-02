<?php

namespace App\Controller;

use App\Entity\Cheval;
use App\Form\ChevalType;
use App\Entity\Hippodrome;
use App\Form\HippodromeType;
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
        $repo = $this->getDoctrine()->getRepository(Cheval::class);

        $chevaux = $repo->findBy([], ['nom' => 'ASC']);
        
        return $this->render('site/chevaux.html.twig', ['controller_name' => 'SiteController', 'chevaux' => $chevaux]);
    }

    /**
     * @Route("/credits", name="credits")
     */
    public function credits()
    {
        return $this->render('site/credits.html.twig');
    }

    /**
     * @Route("/hippodromes", name="hippodromes")
     */
    public function hippodromes() {
        $repo = $this->getDoctrine()->getRepository(Hippodrome::class);

        $hippodromes = $repo->findBy([], ['nom' => 'ASC']);
     
        return $this->render('site/hippodromes.html.twig', ['controller_name' => 'SiteController', 'hippodromes' => $hippodromes]);
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

     /**
     * @Route("/newHippodrome", name="newHippodrome")
     */
    public function createHippodrome(Request $request, ObjectManager $manager) {
        $hippodrome = new Hippodrome();

        $formHippodrome = $this->createForm(HippodromeType::class, $hippodrome);
        
        $formHippodrome->handleRequest($request);

        if($formHippodrome->isSubmitted() && $formHippodrome->isValid()) {
            $hippodrome->setCreatedAt(new \DateTime("now"));

            $manager->persist($hippodrome);
            $manager->flush();

            return $this->redirectToRoute('newHippodrome');
        }

        return $this->render('site/newHippodrome.html.twig', ['formHippodrome' => $formHippodrome->createView()]);
    }

    /**
     * @Route("/site/hippodrome/{id}", name="hippodrome_detail")
     */
    public function hippodrome_detail($id) {
        $repo = $this->getDoctrine()->getRepository(Hippodrome::class);

        $hippodrome = $repo->find($id);

        return $this->render('site/detail.html.twig', ['hippodrome' => $hippodrome]);
    }

    
}
