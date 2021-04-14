<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LembagaDesaController extends AbstractController
{
    /**
     * @Route("/lembaga/desa", name="lembaga_desa")
     */
    public function index(): Response
    {
        return $this->render('lembaga_desa/index.html.twig', [
            'controller_name' => 'LembagaDesaController',
        ]);
    }
}
