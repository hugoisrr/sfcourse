<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return new Response('<h1>Welcome Hugo</h1>');
    }

    /**
     * @Route("/custom{name}", name="custom")
     */
    public function custom()
    {
        return new Response('<h1>Custom page<h1>');
    }
}
