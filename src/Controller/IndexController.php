<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SubforumRepository;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SubforumRepository $subforumRepository): Response
    {
        $subforums = $subforumRepository->findAll();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'subforums' => $subforums
        ]);
    }
}
