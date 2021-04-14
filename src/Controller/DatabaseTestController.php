<?php

namespace App\Controller;

use Doctrine\ORM\Mapping\Entity;

use Doctrine\DBAL\Connection as DBALConnection;
use Doctrine\DBAL\Driver\Mysqli\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatabaseTestController extends AbstractController
{
    /**
     * @Route("/database/test", name="database_test")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DatabaseTestController.php',
        ]);
    }
}
