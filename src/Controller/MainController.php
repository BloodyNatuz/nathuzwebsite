<?php

namespace App\Controller;

use App\Entity\Real;
use App\Entity\Service;
use App\Repository\RealRepository;
use App\Repository\ServiceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_main")
     */
    public function index(ServiceRepository $serviceRepo, RealRepository $realRepo): Response
    {
        return $this->render('main/index.html.twig', [
            'page_title' => 'Nathuz Website - Accueil',
            'services' => $serviceRepo->findAll(),
            'reals' => $realRepo->findOnlyThree(),
        ]);
    }
}
