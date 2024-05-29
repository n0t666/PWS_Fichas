<?php

require_once "Controller.php";

class ContaController extends Controller
{
    public function index()
    {
        $contas = Conta::all();
        $this->renderView('conta', 'index', ['contas' => $contas]);
    }

    public function create()
    {
        $this->renderView('conta', 'create');
    }

    public function store()
    {

        $data = $this->getHTTPPost();

        if (empty($data['numconta'])) {
            $data['numconta'] = null;
        }
        if (empty($data['nib'])) {
            $data['nib'] = null;
        }

        $conta = new Conta($data);
        if ($conta->is_valid()) {
            $conta->save();
            $this->redirectToRoute('conta', 'index');
        } else {
            $this->renderView('conta', 'create', ['conta' => $conta]);
        }
    }

    public function delete($id)
    {
        try {
            $conta = Conta::find($id);
            $conta->delete();
            $this->redirectToRoute('conta', 'index');
        } catch (ActiveRecord\RecordNotFound $e) {
            $this->renderView('errors', 'notFound');
            die();
        }
    }
}
