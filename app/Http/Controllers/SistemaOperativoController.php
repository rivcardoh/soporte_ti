<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sistema_operativo;
class SistemaOperativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soperativos=Sistema_operativo::all();
        return view('sistema_operativo/index')->with('soperativos', $soperativos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistema_operativo/index');
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
        $soperativos = Sistema_operativo::create($request->all());
        return redirect()->route('sistema_operativo', $soperativos)->with('registro','La persona ha sido registrada exitosamente');;
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
        $soperativo=Sistema_operativo::find($id);
        return view('sistema_operativo.edit', compact('soperativo'));
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
        $soperativo=Sistema_operativo::findOrFail($id);
        $request->validate(
            ['nombre'=> 'required',]
        );
        $soperativo->update($request->all());
        return redirect()->route('sistema_operativo', $soperativo)->with('mensaje','La persona ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soperativo=Sistema_operativo::find($id);
        if($soperativo->estado==0){
            $soperativo->estado=1;  
        }elseif($soperativo->estado==1){
            $soperativo->estado=0;
        }
        $soperativo->save();
        return redirect()->route('sistema_operativo');
    }
}