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

    public function edit($id)
    {
        try {
            $book = Book::find($id);
            $this->renderView('book', 'edit', ['book' => $book]);
        } catch (ActiveRecord\RecordNotFound $e) {
            echo 'Caught exception: ' . $e->getMessage();
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
        $this->renderView('book', 'create');
    }

    public function store()
    {
        $book = new Book($this->getHTTPPost());
        if ($book->is_valid()) {
            $book->save();
            $this->redirectToRoute('book', 'index');
        } else {
            $this->renderView('book', 'create', ['book' => $book]);
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
    }

    public function update($id)
    {
        try {
            $book = Book::find($id);
            $book->update_attributes($this->getHTTPPost());
            $book->save();
        } catch (ActiveRecord\RecordNotFound $e) {
            echo 'Caught exception: ' . $e->getMessage();
            die();
        } finally {
            $this->redirectToRoute('book', 'index');
        }
    }
}
