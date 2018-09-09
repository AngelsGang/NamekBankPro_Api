<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreditcardsController extends AbstractController
{
    /**
     * @Route("/creditcards", name="creditcards")
     */
    public function index()
    {
        return $this->render('creditcards/index.html.twig', [
            'controller_name' => 'CreditcardsController',
        ]);
    }
}
