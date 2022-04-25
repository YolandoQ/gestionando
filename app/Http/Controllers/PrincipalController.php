<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        var_dump($_POST);
        $title = ["title" => "Principal"];
        return view('site.principal', $title);
    }
}
