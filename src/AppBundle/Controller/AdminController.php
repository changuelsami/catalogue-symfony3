<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/eshop/admin/", name="eshop_admin")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository(Produit::class)->findAll();
        $categories = $em->getRepository(Categorie::class)->findAll();

        return $this->render('admin-dashboard.html.twig', []);
    }
}
