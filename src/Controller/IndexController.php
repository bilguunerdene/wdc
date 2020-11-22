<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function index()
    {
        $number = random_int(1, 10);

        return $this->render('index.html.twig', [
            'number' => $number,
        ]);
    }
}