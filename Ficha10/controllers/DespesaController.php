<?php

require_once "Controller.php";

class DespesaController extends Controller
{
    public function index($id)
    {
        try {
            $conta = Conta::find($id);
            $this->renderView('despesa', 'index', ['conta' => $conta]);
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
            die();
        }
    }
}
