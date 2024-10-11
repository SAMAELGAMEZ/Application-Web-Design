<?php

namespace App\Http\Controllers;
use App\Models\Grades;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $grades = Grades::all(); // Obtener todos los registros de calificaciones

        return view('grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('grades.create');
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
            'subject' => 'required|string|max:100', // El campo subject es obligatorio
            'activity_type' => 'required|max:50',
            'grade' => 'nullable|integer|min:0|max:100',
            'date' => 'required|date',
        ]);

        Grades::create($validatedData);

        return redirect('/grades')->with('success', 'Grade is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $grade = Grades::findOrFail($id); // Busca la calificación o lanza un error si no lo encuentra
        return view('grades.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $grade = Grades::findOrFail($id); // Encuentra la calificación por su ID
        return view('grades.edit', compact('grade'));
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
            'subject' => 'required|string|max:100',
            'activity_type' => 'required|max:50',
            'grade' => 'nullable|integer|min:0|max:100', // Calificación opcional
            'date' => 'required|date',
        ]);

        $grade = Grades::findOrFail($id);
        $grade->update($validatedData);

        return redirect('/grades')->with('success', 'Grade is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grades::findOrFail($id); // Busca la calificación por su ID
        $grade->delete(); // Elimina la calificación

        return redirect('/grades')->with('success', 'Grade data is successfully deleted');
    }
}