<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurseController extends Controller
{
    public function index(){
        return view('curses.index');
    }

    public function create(){
        return view('curses.create');
    }

    public function show($curso){
        return view('curses.show', compact('curso'));
    }
}
