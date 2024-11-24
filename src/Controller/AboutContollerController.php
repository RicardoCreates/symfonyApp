<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutContollerController extends AbstractController
{
    #[Route('/about')]
    public function index(): Response
    {
        return $this->render('about_page/index.html.twig');
    }
}
