<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/produit", name="produits")
     */
    public function produitsAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/product.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/listing", name="listing")
     */
    public function  listingAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/listing.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function  loginAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function  contactAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/panier", name="panier")
     */
    public function  panierAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/panier.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

     /**
     * @Route("/error", name="error")
     */
    public function  errorAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/404.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function  faqAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/faq.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/empty", name="empty")
     */
    public function  emptyAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/paniervide.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}
