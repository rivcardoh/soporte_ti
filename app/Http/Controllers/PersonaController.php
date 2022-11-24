<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{

    public function index()
    {
        $personas=Persona::all();
        //dd($persona);
        return view('persona/index')->with('personas', $personas);
    }


    public function create()
    {
        return view('persona.create');
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
            ['nombre'=> 'required',
            'apellido'=> 'required',
            'ci'=> 'required',
            'celular'=> 'required',]
        );
        $personas = Persona::create($request->all());
        return redirect()->route('persona', $personas)->with('registro','La persona ha sido registrada exitosamente');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona=Persona::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Persona $persona)
    {
        $persona=Persona::find($id);
        return view('persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Persona $persona )
    {
        $persona=Persona::find($id);
        $request->validate(
            ['nombre'=> 'required',
            'apellido'=> 'required',
            'ci'=> 'required',
            'celular'=> 'required',]
        );
        $persona->update($request->all());
        return redirect()->route('persona', $persona)->with('mensaje','La persona ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona=Persona::find($id);
        if($persona->estado==0){
            $persona->estado=1;  
        }elseif($persona->estado==1){
            $persona->estado=0;
        }
        $persona->save();
        return redirect()->route('persona');
    }
}
