<?php

namespace App\Http\Controllers;

use App\Models\Curse;
use Illuminate\Http\Request;

class CurseController extends Controller
{
    public function index()
    {
        $curses = Curse::OrderBy('id', 'desc')->paginate();

        return view('curses.index', compact('curses'));
    }

    public function create()
    {
        return view('curses.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'  
        ]);

        $curse = new Curse();

        $curse->name = $request->name;
        $curse->description = $request->description;
        $curse->category = $request->category;

        $curse->save(); 

        return redirect()->route('cursos.show', $curse);

    }

    public function show(Curse $curse)
    {
        return view('curses.show', compact('curse'));
    }

    public function edit(Curse $curse)
    {
        return view('curses.edit', compact('curse'));
    }

    public function update(Request $request, Curse $curse)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'  
        ]);

        $curse->name = $request->name;
        $curse->description = $request->description;
        $curse->category = $request->category;

        $curse->save();
        return redirect()->route('cursos.show', $curse);

    }

}
