<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsatuController extends Controller
{
    public function index()
    {
       return view('ui.test1.index');
    }
}
