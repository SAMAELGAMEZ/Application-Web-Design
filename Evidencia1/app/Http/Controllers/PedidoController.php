<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Illuminate\Contracts\View\View;

class PedidoController extends Controller
{
    /**
     * Display a listing of the pedidos.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $pedidos = Pedido::all();
        return view('pedido.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pedido.create');
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
            'cliente' => 'required|max:75',
            'producto' => 'required|max:75',
            'precio' => 'required',
            'tracking' => 'required|max:255',
        ]);
        Pedido::create($validatedData);

        return redirect('/pedido')->with('success', 'Pedido is successfully saved');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);

        return view('pedido.show', compact('pedido'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);

        return view('pedido.edit', compact('pedido'));
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
            'cliente' => 'required|max:75',
            'producto' => 'required|max:75',
            'precio' => 'required',
            'tracking' => 'required|max:255',
        ]);

        Pedido::whereId($id)->update($validatedData);

        return redirect('/pedido')->with('success', 'Pedido data is successfully updated');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect('/pedido')->with('success', 'Pedido data is successfully deleted');
    }

}
