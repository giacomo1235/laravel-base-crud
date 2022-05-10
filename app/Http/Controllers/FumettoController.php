<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FumettoController extends Controller
{
    public function index() {
        return view('home');
    }
}
