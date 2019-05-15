<?php

namespace ASISTEC\Http\Controllers;

use Illuminate\Http\Request;
use ASISTEC\Alumno;
use ASISTEC\Carga;
class AsistecController extends Controller
{
    public function login(Request $request)
    {
        $usuario=$request->input('user');
        $pass=$request->input('password');

        $consulta=Alumno::where('carnet',$usuario)
        ->where('password',$pass)
        ->exists();

        $consulta1=Carga::where('emailDocente',$usuario)
        ->where('password',$pass)
        ->exists();

       

        $alumno=Alumno::select('alumnos.*')
        ->where('carnet',$usuario)
        ->where('password',$pass)
        ->get();

        $carga=Carga::select('cargas.*')
        ->where('emailDocente',$usuario)
        ->where('password',$pass)
        ->get();

        if ($consulta==true) {
            echo "ud es un alumno";
        }
        elseif ($consulta1==true) {
            echo "ud es un docente";
        }
        else
        {
            echo "sus datos son incorrectos";
        }
    }
}
