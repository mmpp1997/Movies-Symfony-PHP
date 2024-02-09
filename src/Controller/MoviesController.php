<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em=$em;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        //findAll,find,count,findBy, findByOne

        $repostitory = $this->em->getRepository(Movie::class);
        $movies = $repostitory->findAll();
        return $this->render('index.html.twig');

        /* return $this->json([
            'message' => 'You selected the movie ' . $name,
            'path' => 'src/Controller/MoviesController.php',
        ]); */
    }
}
