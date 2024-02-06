<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies/{name}', name: 'app_movies', defaults:['name'=>null],methods:['GET','HEAD'])]
    public function index($name): JsonResponse
    {
        return $this->json([
            'message' => 'You selected the movie ' . $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
