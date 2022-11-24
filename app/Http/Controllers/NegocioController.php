<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negocio;
class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $negocios=Negocio::all();
        //dd($persona);
        return view('negocio/index')->with('negocios', $negocios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('negocio/index');
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
        $negocios = Negocio::create($request->all());
        return redirect()->route('negocio', $negocios)->with('registro','La persona ha sido registrada exitosamente');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $negocio=Negocio::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Negocio $negocio)
    {
        $negocio=Negocio::find($id);
        return view('negocio.edit', compact('negocio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Negocio $negocio)
    {
        $negocio=Negocio::findOrFail($id);
        $request->validate(
            ['nombre'=> 'required',]
        );
        $negocio->update($request->all());
        return redirect()->route('negocio', $negocio)->with('mensaje','La persona ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $negocio=Negocio::find($id);
        if($negocio->estado==0){
            $negocio->estado=1;  
        }elseif($negocio->estado==1){
            $negocio->estado=0;
        }
        $negocio->save();
        return redirect()->route('negocio');
    }
}
