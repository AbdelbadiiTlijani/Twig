<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/author/{name}', name: 'app_author', requirements: ['name' => '[a-zA-Z]+'])]
    public function showAuthor(String $name): Response
    {
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/authors', name: 'authors')]
    public function listAuthor(): Response
    {
        $authors =  [
            ['id' => 1, 'picture' => '/images/vh.png', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],

            ['id' => 2, 'picture' => '/images/ws.png', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],

            ['id' => 3, 'picture' => '/images/th.png', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],

        ];
        return $this->render('author/list.html.twig', [
            'authors' => $authors,
        ]);
    }
    #[Route('/author/{id}', name: 'author.details')]
    public function authorDetails(int $id): Response
    {
        $authors = [
            1 => ['username' => 'Victor Hugo', 'picture' => '/images/vh.png', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
            2 => ['username' => 'William Shakespeare', 'picture' => '/images/ws.png', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
            3 => ['username' => 'Taha Hussein', 'picture' => '/images/th.png', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
        ];
        return $this->render('author/showAuthor.html.twig', [
            'author' => $authors[$id],
        ]);
    }





}
