<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class counterUserController extends Controller
{
    public function index() {
        return view('counter.events');
    }
    public function scan() {
        return view('counter.scan');
    }
}
