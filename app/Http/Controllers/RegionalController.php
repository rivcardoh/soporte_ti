<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regional;
class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionales=Regional::all();
        //dd($persona);
        return view('regional/index')->with('regionales', $regionales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regional/index');
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
        $regionales = Regional::create($request->all());
        return redirect()->route('regional', $regionales)->with('registro','La persona ha sido registrada exitosamente');;
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
    public function edit($id, Regional $regional)
    {
        $regional=Regional::find($id);
        return view('regional.edit', compact('regional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Regional $regional)
    {
        $regional=Regional::findOrFail($id);
        $request->validate(
            ['nombre'=> 'required',]
        );
        $regional->update($request->all());
        return redirect()->route('regional', $regional)->with('mensaje','La persona ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $regional=Regional::find($id);
        if($regional->estado==0){
            $regional->estado=1;  
        }elseif($regional->estado==1){
            $regional->estado=0;
        }
        $regional->save();
        return redirect()->route('regional');
    }
}