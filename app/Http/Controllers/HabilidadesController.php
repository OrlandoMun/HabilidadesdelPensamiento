<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maestros;

class MaestrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros=Maestros::all();
        return view('maestros.index')->with('maestros',$maestros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maestros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maestros=new Maestros();
        $maestros->Nombre= $request->get('Nombre');
        $maestros->Especialidad= $request->get('Especialidad');
        $maestros->email= $request->get('email');

        $maestros->save();

        return redirect('/maestros');
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
        $maestro=Maestros::find($id);
        return view('maestros.edit')->with('maestro',$maestro);
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
        $maestro=Maestros::find($id);
      

        $maestro->Nombre= $request->get('Nombre');
        $maestro->Especialidad= $request->get('Especialidad');
        $maestro->email= $request->get('email');

        $maestro->save();

        return redirect('/maestros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maestro=Maestros::find($id);
        $maestro->delete();
        return redirect('/maestros');

    }
}
