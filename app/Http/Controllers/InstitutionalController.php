<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutionalController extends Controller
{
    public function institutional() {
       return view('site.institutional');
    }
}
