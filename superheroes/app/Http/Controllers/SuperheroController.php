<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use Illuminate\Http\RedirectResponse;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $superheroes = Superhero::all();

        // Pasar los superhéroes a la vista index
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'real_name' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable|string',
        ]);

        Superhero::create([
            'real_name' => $request->real_name,
            'hero_name' => $request->hero_name,
            'photo_url' => $request->photo_url,
            'additional_info' => $request->additional_info,
        ]);

        return redirect()->route('superheroes.index')->with('success', 'Superhero created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        // Obtener el superhéroe por su ID
        $superhero = Superhero::findOrFail($id);

        // Pasar los datos a la vista show
        return view('superheroes.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): \Illuminate\Contracts\View\View
    {
        // Obtener el superhéroe por su ID
        $superhero = Superhero::findOrFail($id);

        // Pasar los datos del superhéroe a la vista de edición
        return view('superheroes.edit', compact('superhero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'real_name' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable|string',
        ]);

        // Obtener el superhéroe por su ID y actualizar los datos
        $superhero = Superhero::findOrFail($id);
        $superhero->update([
            'real_name' => $request->real_name,
            'hero_name' => $request->hero_name,
            'photo_url' => $request->photo_url,
            'additional_info' => $request->additional_info,
        ]);

        // Redirigir al listado con un mensaje de éxito
        return redirect()->route('superheroes.index')->with('success', 'Superhero updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Obtener el superhéroe por su ID y eliminarlo
        $superhero = Superhero::findOrFail($id);
        $superhero->delete();

        // Redirigir al listado de superhéroes con un mensaje de éxito
        return redirect()->route('superheroes.index')->with('success', 'Superhero deleted successfully.');
    }
}
