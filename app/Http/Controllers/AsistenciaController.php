<?php

namespace ASISTEC\Http\Controllers;

use ASISTEC\Asistencia;
use Illuminate\Http\Request;
use ASISTEC\Carga;
use ASISTEC\Horario;
use ASISTEC\Alumno;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \ASISTEC\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ASISTEC\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ASISTEC\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ASISTEC\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }

    public function marcarAsistencia(Request $request, $id)
    {
        $hora=$request->input('horaMarcacion');
        $consulta=Carga::leftJoin('alumnos','cargas.id','=','alumnos.carga_id')
        ->where('alumnos.id',$id)->leftJoin('horarios','cargas.id','=','horarios.carga_id')
        ->select('alumnos.nombreAlumno','alumnos.carnet','horarios.horaInicio','horarios.horaFin',
        'cargas.seccion','cargas.aula','cargas.id')->first();
 
        $existente=$consulta->exists;
        $horaInicio=$consulta->horaInicio;
        $horaFin=$consulta->horaFin;
        $alumno=$id;
        $carga=$consulta->id;

        if ($existente==true) {
            if ($hora>=$horaInicio and $hora<=$horaFin) {
                $asistencia=new Asistencia;
                $asistencia->alumno_id=$id;
                $asistencia->carga_id=$carga;
                $asistencia->save();
                return response()->json('asistencia confirmda correctamente y guardada correctamente');
            }
            elseif ($hora<$horaInicio) {
                return response()->json('aun no es hora para marcar asistencia');
            }
            elseif ($hora>$horaFin) {
                return response()->json('la clase ya termino. se tomara como inasistencia');
            }
        }
        else{
            return response()->json('ud no pertenece a esta clase');
        }


        

        
       /*  return response()->json($consulta); */
    }
}
