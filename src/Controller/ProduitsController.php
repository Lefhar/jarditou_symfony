<?php

namespace App\Controller;

use App\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ProduitsController extends AbstractController
{
    /**
     * @Route("/produits", name="produits")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Produits::class);
        $produits = $repo->findAll();
        return $this->render('produits/index.html.twig', [
            'controller_name' => 'ProduitsController',
            'produits'=> $produits
        ]);
    }
}
