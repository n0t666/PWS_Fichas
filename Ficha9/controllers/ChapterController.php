<?php

require_once 'Controller.php';
require_once 'models/Book.php';

class ChapterController extends Controller
{
    public function index($id)
    {
        $book = Book::find($id);
        $this->renderView('chapter', 'index', ['book' =>
        $book]);
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
        $chapter = Chapter::find($id);
        $book_id = $chapter->book_id;
        $chapter->delete();
        $this->redirectToRoute('chapter', 'index', ['id' => $book_id]);
    }
}
