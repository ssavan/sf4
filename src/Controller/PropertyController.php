<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

    /**
     * @Route("/produits", name="property_index")
     */
    public function number()
    {
        return $this->render('property/index.html.twig');
    }
}