<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index()
    {
        $fornecedores = ["fornecedor 1"];
        return view('app.providers.index', compact("fornecedores"));
    }
}
