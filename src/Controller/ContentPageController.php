<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContentPageController extends AbstractController
{
    #[Route('/content-page')]
    public function index(): Response
    {
        return $this->render('content_page/index.html.twig');
    }
}
