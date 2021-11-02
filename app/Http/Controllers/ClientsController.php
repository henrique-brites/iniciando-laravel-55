<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function listar(){
        $clients = Client::all();
        return view('admin.cliente.list', compact('clients'));
    }

    public function cadastrar(){
        $nome = 'Henrique Brites';
        $variavel1 = 'valor1';
        /*return view('cadastrar', [
            'nome' => $nome,
            'variavel1' => '$variavel1
        ]);*/
        //return view('cadastrar', compact('nome', 'variavel1'));
        return view('admin.cliente.cadastrar')
            ->with('nome', $nome)
            ->with('variavel1', $variavel1);
    }

    public function excluir(){

    }

    public function editar(){

    }
}
