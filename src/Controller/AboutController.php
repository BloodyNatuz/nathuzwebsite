<?php

namespace App\Controller;

use App\Repository\ExpRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="app_about")
     */
    public function index(ExpRepository $expRepo): Response
    {
        return $this->render('about/index.html.twig', [
            'page_title' => 'Nathuz - A propos',
            'exps' => $expRepo->findAll(),
        ]);
    }
}
