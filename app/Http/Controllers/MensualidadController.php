<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensualidad;
use App\Alumno;
use App\Plan;

class MensualidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensualidades= Mensualidad::orderBy('id','DESC')->paginate();
	return view('Mensualidad.index',compact('mensualidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumno::all();
        $planes = Plan::all();
        return view('Mensualidad.create', compact('alumnos'), compact('planes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['usuario'=>'required','nomplan'=>'required', 'fechapago'=>'required']);
        Mensualidad::create();
        return redirect()->route('mensualidad.index')->with('sucess','plan registrada');
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
        $alumnos = Alumno::all();
        $planes = Plan::all();
        $mensualidad=  Mensualidad::find($id);
        return view('Mensualidad.edit',  compact('mensualidad'), compact('planes'), compact('alumnos'));
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
        Mensualidad::find($id)->update();
        return redirect()->route('mensualidad.index')->with('success','Plan actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mensualidad::find($id)->delete();
        return redirect()->route('mensualidad.index')->with('success','Plan eliminado');
    }
}
