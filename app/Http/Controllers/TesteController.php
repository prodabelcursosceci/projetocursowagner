<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $req)
    {
        $nome = $req->nome ;

        echo "Hello wooorld, $nome";
        return view('welcome');

    }

    public function index2($nome, $email=null)
    {
        echo "Hello wooorld, $nome<br>";
        if ($email) 
        {
            echo "email, $email<br>";
        }
        
        return view('welcome');

    }
}
