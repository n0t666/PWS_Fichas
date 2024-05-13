
<?php

require_once "Controller.php";
require 'models/Book.php';

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('book', 'index', ['book' => $books]);
    }
}
?>