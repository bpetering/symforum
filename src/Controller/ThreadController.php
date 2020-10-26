<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Thread;

class ThreadController extends AbstractController
{
    /**
     * @Route("/thread/{id}", name="thread")
     */
    public function index(Thread $thread): Response
    {
        return $this->render('thread/index.html.twig', [
            'controller_name' => 'ThreadController',
            'thread' => $thread
        ]);
    }
}
