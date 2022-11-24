<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_mantenimiento;
class TipoMantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tmantenimientos=Tipo_mantenimiento::all();
        //dd($persona);
        return view('tipo_mantenimiento/index')->with('tmantenimientos', $tmantenimientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_mantenimiento/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['nombre'=> 'required',]
        );
        $tmantenimientos = Tipo_mantenimiento::create($request->all());
        return redirect()->route('tipo_mantenimiento', $tmantenimientos)->with('registro','La persona ha sido registrada exitosamente');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tmantenimiento=Tipo_mantenimiento::find($id);
        return view('tipo_mantenimiento.edit', compact('tmantenimiento'));
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
        $tmantenimiento=Tipo_mantenimiento::findOrFail($id);
        $request->validate(
            ['nombre'=> 'required',]
        );
        $tmantenimiento->update($request->all());
        return redirect()->route('tipo_mantenimiento', $tmantenimiento)->with('mensaje','La persona ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tmantenimiento=Tipo_mantenimiento::find($id);
        if($tmantenimiento->estado==0){
            $tmantenimiento->estado=1;  
        }elseif($tmantenimiento->estado==1){
            $tmantenimiento->estado=0;
        }
        $tmantenimiento->save();
        return redirect()->route('tipo_mantenimiento');
    }
}