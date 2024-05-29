<?php

require_once 'Controller.php';
require_once 'models/Book.php';

class ChapterController extends Controller
{
    public function index($id)
    {
        try {
            $book = Book::find($id);
            $this->renderView('chapter', 'index', ['book' =>
            $book]);
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
        }
    }

    public function create($id)
    {
        $book = Book::find($id);
        $this->renderView('chapter', 'create', ['id' =>
        $book->id]);
    }

    public function store()
    {
        $chapter = new Chapter($this->getHTTPPost());
        if ($chapter->is_valid()) {
            $chapter->save();
            $this->redirectToRoute('chapter', 'index', ['id' => $chapter->book_id]);
        } else {
            $this->renderView('chapter', 'create', ['chapter' => $chapter]);
        }
    }

    public function delete($id)
    {
        try {
            $chapter = Chapter::find($id);
            $book_id = $chapter->book_id;
            $chapter->delete();
            $this->redirectToRoute('chapter', 'index', ['id' => $book_id]);
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
        }
    }

    public function show($id)
    {
        try {
            $chapter = Chapter::find($id);
            $this->renderView('chapter', 'show', ['chapter' =>
            $chapter]);
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
        }
    }

    public function edit($id)
    {
        try {
            $chapter = Chapter::find($id);
            $this->renderView('chapter', 'edit', ['chapter' =>
            $chapter]);
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
        }
    }

    public function update($id)
    {
        try {
            $chapter = Chapter::find($id);
            $book_id = $chapter->book_id;
            $chapter->update_attributes($this->getHTTPPost());
            $chapter->save();
            $this->redirectToRoute('chapter', 'index', ['id' => $chapter->book_id]);
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
            die();
        }
    }
}
