<?php

require_once 'Controller.php';
require_once 'models/Book.php';
require_once 'models/Genre.php';

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $this->renderView('book', 'index', ['books' => $books]);
    }

    public function edit($id)
    {
        $genres = Genre::all();
        try {
            $book = Book::find($id);
            $this->renderView('book', 'edit', ['book' => $book, 'genres' => $genres]);
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
            die();
        }
    }

    public function show($id)
    {
        $book = Book::find($id);
        $this->renderView('book', 'show', ['book' => $book]);
    }

    public function create()
    {
        $genres = Genre::all();

        $this->renderView('book', 'create', ['genres' => $genres]);
    }

    public function store()
    {
        $book = new Book($this->getHTTPPost());

        if ($book->is_valid()) {
            $book->save();
            $this->redirectToRoute('book', 'index');
        } else {
            $genres = Genre::all();
            $this->renderView('book', 'create', ['book' => $book, 'genres' => $genres]);
        }
    }

    public function delete($id)
    {
        try {
            $book = Book::find($id);
            $book->delete();
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
        }
        $this->redirectToRoute('book', 'index');
    }

    public function update($id)
    {
        try {
            $book = Book::find($id);
            $book->update_attributes($this->getHTTPPost());
            $book->save();
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
            die();
        } finally {
            $this->redirectToRoute('book', 'index');
        }
    }
}
