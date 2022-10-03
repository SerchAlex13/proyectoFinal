<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torneos = Torneo::all();
        return view('torneos/torneoIndex', compact('torneos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('torneos/torneoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validación
        $request->validate([
            'nombre' => 'required|max:255',
            'sede' => 'required|max:255',
            'organizador' => 'required|max:255',
            'fundacion' => 'date',
            'numero_ediciones' => 'integer|min:0',
            'formato' => 'required|max:255',
            'numero_equipos' => 'integer|min:0'
        ]);

        Torneo::create($request->all());

        return redirect('/torneo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function show(Torneo $torneo)
    {
        return view('torneos/torneoShow', compact('torneo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function edit(Torneo $torneo)
    {
        return view('torneos/torneoEdit', compact('torneo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Torneo $torneo)
    {
        //Validar
        $request->validate([
            'nombre' => 'required|max:255',
            'sede' => 'required|max:255',
            'organizador' => 'required|max:255',
            'fundacion' => 'date',
            'numero_ediciones' => 'integer|min:0',
            'formato' => 'required|max:255',
            'numero_equipos' => 'integer|min:0'
        ]);

        //Actualizar

        // $torneo->nombre = $request->nombre;
        // $torneo->sede = $request->sede;
        // $torneo->organizador = $request->organizador;
        // $torneo->fundacion = $request->fundacion;
        // $torneo->numero_ediciones = $request->numero_ediciones;
        // $torneo->formato = $request->formato;
        // $torneo->numero_equipos = $request->numero_equipos;
        // $torneo->save();

        //Torneo::where('id', $torneo->id)->update($request->all());

        //Torneo::where('id', '!=', $torneo->id)->update($request->except('_token', '_method'));

        Torneo::where('id', $torneo->id)->update($request->except('_token', '_method'));

        return redirect('/torneo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Torneo  $torneo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Torneo $torneo)
    {
        $torneo->delete();

        return redirect('/torneo');
    }
}
