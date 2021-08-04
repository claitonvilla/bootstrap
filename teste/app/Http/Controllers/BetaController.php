<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BetaController extends Controller
{
   public function index (){
       $endereco = 'Travessa Italia';
       $ListaCompra = 'Produtos para o mês';
       $nome = 'Claiton Villarinho de Morais';
       $idade = 35;
       $produtos = [
            ['valor' => 19.80, 'quantidade' => 8, 'nome' => 'papel'],
            ['valor' => 20.80, 'quantidade' => 5, 'nome' => 'massa'],
            ['valor' => 1.80, 'quantidade' => 1, 'nome' => 'detergente'],
            ['valor' => 30.80, 'quantidade' => 18, 'nome' => 'desodorante'],
       ];
       return view('beta.index', compact('endereco','ListaCompra','nome','idade','produtos'));
   }
}
