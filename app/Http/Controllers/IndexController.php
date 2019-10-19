<?php

namespace TheLansersCoding\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('pages.index');
    }
}
