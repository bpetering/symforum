<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubforumController extends AbstractController
{
    /**
     * @Route("/subforum", name="subforum")
     */
    public function index(): Response
    {
        return $this->render('subforum/index.html.twig', [
            'controller_name' => 'SubforumController',
        ]);
    }
}
