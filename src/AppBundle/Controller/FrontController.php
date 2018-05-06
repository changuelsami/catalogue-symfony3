<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Categorie;
use AppBundle\Entity\Produit;

class FrontController extends Controller
{
    /**
     * @Route("/eshop/", name="eshop_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Categorie::class);
        $categories = $repo->findAll();
        return $this->render('front/index.html.twig', ['categories' => $categories]);
    }

    /**
     * @Route("/eshop/categorie/{id}", name="eshop_categorie")
     */
    public function categorieAction(Categorie $categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Produit::class);
        $produits = $repo->findByCategorie($categorie);
        return $this->render('front/categorie.html.twig', 
            ['produits' => $produits, 'categorie' => $categorie]);
    }    
}
