<?php

require_once 'Controller.php';
require_once 'models/Book.php';

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $this->renderView('book', 'index', ['books' => $books]);
    }

    public function edit()
    {
        $id = $_GET['id'];
        $book = Book::find($id);
        $this->renderView('book', 'edit', ['book' => $book]);
    }

    public function show()
    {
        $id = $_GET['id'];
        $book = Book::find($id);
        $this->renderView('book', 'show', ['book' => $book]);
    }

    public function create()
    {
        $this->renderView('book', 'create');
    }

    public function store()
    {
        $book = new Book($this->getHTTPPost());
        if ($book->is_valid()) {
            $book->save();
            $this->renderView('book', 'index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('book', 'create', ['book' => $book]);
        }
    }
}
