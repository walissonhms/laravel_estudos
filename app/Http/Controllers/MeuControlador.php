<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos(){
        echo "Produtos";
    }
    public function getNome(){
        echo "Walisson Henrique";
    }
    public function getIdade(){
        echo "24";
    }
    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
}
