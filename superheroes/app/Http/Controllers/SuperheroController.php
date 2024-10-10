<?php

namespace App\Http\Controllers;
use App\Models\Superhero;

use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $superheroes = Superhero::all(); // Obtener todos los registros de superhéroes

        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|max:75',
            'hero_name' => 'required|max:75',
            'photo_url' => 'required|url',
            'additional_info' => 'required',
        ]);

        Superhero::create($validatedData);

        return redirect('/superheroes')->with('success', 'Superhero is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $superhero = Superhero::findOrFail($id); // Busca el superhéroe o lanza un error si no lo encuentra
        return view('superheroes.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id); // Encuentra el superhéroe por su ID
        return view('superheroes.edit', compact('superhero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|max:75',
            'hero_name' => 'required|max:75',
            'photo_url' => 'required|url',
            'additional_info' => 'required',
        ]);

        $superhero = Superhero::findOrFail($id);
        $superhero->update($validatedData);

        return redirect('/superheroes')->with('success', 'Superhero is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $superhero = Superhero::findOrFail($id); // Busca el superhéroe por su ID
        $superhero->delete(); // Elimina el superhéroe

        return redirect('/superheroes')->with('success', 'Superhero data is successfully deleted');
    }
}
