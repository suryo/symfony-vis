<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\AdminLTEBundle\Event\ShowUserEvent;
use KevinPapst\AdminLTEBundle\Event\SidebarMenuEvent;
use KevinPapst\AdminLTEBundle\Event\SidebarUserEvent;
use Symfony\Component\HttpFoundation\Request;


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
        $userFirstName = 'Sistem Informasi Desa';
        $userNotifications = ['...', '...'];
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/DesaController.php',
        // ]);

        // the template path is the relative file path from `templates/`
        return $this->render('desa/base.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);

    }
}
