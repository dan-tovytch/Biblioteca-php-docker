<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class BookController extends Controller
{
    public function list()
    {
        $books = [
            ['title' => 'Livro 1', 'author' => 'Autor 1'],
            ['title' => 'Livro 2', 'author' => 'Autor 2'],
        ];
        View::render('book/list', ['books' => $books]);
    }

    public function detail()
    {
        $book = ['title' => 'Livro 1', 'author' => 'Autor 1', 'description' => 'Descrição do Livro 1'];
        View::render('book/detail', ['book' => $book]);
    }
}
