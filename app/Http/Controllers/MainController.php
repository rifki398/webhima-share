<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function store() {
        return view('store');
    }

    public function events() {
        return view('events');
    }

    public function publications() {
        return view('publications');
    }
}
