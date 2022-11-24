<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subarea;
class SubareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subareas=Subarea::all();
        //dd($persona);
        return view('subarea/index')->with('subareas', $subareas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subarea/index');
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
        $subareas = Subarea::create($request->all());
        return redirect()->route('subarea', $subareas)->with('registro','La persona ha sido registrada exitosamente');
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
    public function edit($id, Subarea $subarea)
    {
        $subarea=Subarea::find($id);
        return view('subarea.edit', compact('subarea'));
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
        $subarea=Subarea::findOrFail($id);
        $request->validate(
            ['nombre'=> 'required',]
        );
        $subarea->update($request->all());
        return redirect()->route('subarea', $subarea)->with('mensaje','La persona ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subarea=Subarea::find($id);
        if($subarea->estado==0){
            $subarea->estado=1;  
        }elseif($subarea->estado==1){
            $subarea->estado=0;
        }
        $subarea->save();
        return redirect()->route('subarea');
    }
    }

