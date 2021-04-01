<?php

namespace App\Controller;

use App\Entity\SuratKeluar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuratKeluarController extends AbstractController
{
    /**
     * @Route("/surat/keluar", name="surat_keluar")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/SuratKeluarController.php',
        ]);
    }
}
