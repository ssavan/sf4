<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/index", name="homepage")
     */
    public function number()
    {
        return $this->render('pages/home.html.twig');
    }
}