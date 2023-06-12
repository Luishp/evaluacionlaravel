<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos =  Proyecto::orderBy('id', 'desc')->get();

        return view('evaluacion.proyecto.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evaluacion.proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //try{
            $proyecto = new Proyecto();
            //Campos que se reciben de la vista
            $proyecto->nombreproyecto = $request->nombreproyecto;
            $proyecto->fuentefondos = $request->fuentefondos;
            $proyecto->montoplanificado = $request->montoplanificado;
            $proyecto->montopatrocinado = $request->montopatrocinado;
            $proyecto->montofondospropios = $request->montofondospropios;

            $proyecto->save();

        /*} catch(\Exception $e)
        {
            abort(404);
        }*/

        return redirect()->route('proyecto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $proyecto = Proyecto::findOrFail($id);

        if($proyecto == null){
            abort(404);
        }

        return view('evaluacion.proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        try{
            $proyecto = Proyecto::findOrFail($id);
            //Campos que se reciben de la vista
            $proyecto->nombreproyecto = $request->nombreproyecto;
            $proyecto->fuentefondos = $request->fuentefondos;
            $proyecto->montoplanificado = $request->montoplanificado;
            $proyecto->montopatrocinado = $request->montopatrocinado;
            $proyecto->montofondospropios = $request->montofondospropios;

            $proyecto->update();

        } catch(\Exception $e)
        {
            abort(404);
        }

        return redirect()->route('proyecto.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $proyecto = Proyecto::findOrFail($id);
            $proyecto->delete();
        }catch(\Exception $e)
        {
            abort(404);
        }
        return redirect()->route('proyecto.index');

    }
}
