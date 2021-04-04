<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of DesaController
 *
 * @author SURYO ATMOJO
 */

class DesaController extends AbstractController
{
    /**
     * @Route("/desa", name="desa")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DesaController.php',
        ]);
    }
}
