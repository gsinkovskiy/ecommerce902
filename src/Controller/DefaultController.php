<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="default")
     */
    public function index(ProductRepository $productRepository)
    {
    	$products = $productRepository->findAll();

    	return $this->render('default/index.html.twig', [
            'products' => $products,
        ]);
    }

}
