<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_soporte;
class TipoSoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tsoportes=Tipo_soporte::all();
        return view('tipo_soporte/index')->with('tsoportes', $tsoportes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_soporte/index');
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
        $tsoportes = Tipo_soporte::create($request->all());
        return redirect()->route('tipo_soporte', $tsoportes)->with('registro','La persona ha sido registrada exitosamente');;
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
        $tsoporte=Tipo_soporte::find($id);
        return view('tipo_soporte.edit', compact('tsoporte'));
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
        $tsoporte=Tipo_soporte::findOrFail($id);
        $request->validate(
            ['nombre'=> 'required',]
        );
        $tsoporte->update($request->all());
        return redirect()->route('tipo_soporte', $tsoporte)->with('mensaje','La persona ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tsoporte=Tipo_soporte::find($id);
        if($tsoporte->estado==0){
            $tsoporte->estado=1;  
        }elseif($tsoporte->estado==1){
            $tsoporte->estado=0;
        }
        $tsoporte->save();
        return redirect()->route('tipo_soporte');
    }
}
