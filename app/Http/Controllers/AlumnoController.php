<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Disciplina;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $alumnos= Alumno::orderBy('appaterno','ASC')->paginate();
	return view('Alumno.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $disciplinas = Disciplina::all();
        return view('Alumno.create', compact('disciplinas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request,['rut'=>'required','nombres'=>'required','appaterno'=>'required','apmaterno'=>'required','direccion'=>'required',
            'fono'=>'required','fecnac'=>'required','alergia'=>'required','enfermedad'=>'required','fonoemergencia'=>'required']);  
        Alumno::create($request->all());
        return redirect()->route('alumno.index')->with('sucess','Alumno registrado');
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
        $disciplinas = Disciplina::all();
        $alumno= Alumno::find($id);
        return view('Alumno.edit',  compact('alumno'), compact('disciplinas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        Alumno::find($id)->update();
        return redirect()->route('alumno.index')->with('success','Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::find($id)->delete();
        return redirect()->route('alumno.index')->with('success','Plan eliminado');
    }
}
