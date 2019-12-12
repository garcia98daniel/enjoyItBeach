<?php

namespace App\Http\Controllers;

use App\reservation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class ReservationController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
       // dd($request);
        $reserva = new reservation();
        // $reserva->idReserva = $request->get('');
        $reserva->fecha = $request->get('fecha');
        $reserva->horaInicio = $request->get('horaInicio');
        $reserva->duracion = $request->get('duracion');
        $reserva->idUser =  auth()->user()->id;
        $reserva->idCarpa = $request->get('bloque')."".$request->get('carpa');

        $resul=$reserva->save();

        // Alert::success('Registro exitoso');
        if($resul){
            
            return view("mensajes.msj_correcto")->with("msj","Reserva realizada");   
        }
        else
        {
             
             return view("mensajes.msj_rechazado")->with("msj","Ups!, hubo un error");  

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
