<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutionalController extends Controller
{
    public function institutional() {
        $title = ["title" => "About"];
       return view('site.institutional', $title);
    }
}
