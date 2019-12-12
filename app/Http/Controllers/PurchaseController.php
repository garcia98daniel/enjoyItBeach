<?php

namespace App\Http\Controllers;

use App\purchase;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
class PurchaseController extends Controller
{    public function __construct()
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
         $fechaReserva = DB::table('reservations')
                        ->where('idUser', '=', Auth::user()->id)
                        ->orderBy('fecha', 'desc')
                        ->first();

                        // dd($fechaReserva);

         $fechaPedidoHoy = now()->format('d-m-Y');

           // dd(date('d-m-Y', strtotime($fechaReserva->fecha))."  ".$fechaPedidoHoy);
        //reutilizando variables
        if($fechaReserva != ""){
            $fechaReserva = date('d-m-Y', strtotime($fechaReserva->fecha));
        }
            $compra = new purchase();
            $compra->idProducto = $request->get('id');
            $compra->idUser = auth()->user()->id;
            $compra->cantidad = $request->get('cantidad');
            $compra->fecha = now()->format('d-m-Y');
            $compra->precio =  $compra->cantidad * $request->get('precio');
            $compra->confirmado = 0;

           $resul = false;
            if($fechaReserva == $fechaPedidoHoy){
                $resul=$compra->save();
            }

            if($resul){
                return view("mensajes.msj_correcto")->with("msj","Pedido realizado");   
            }else{ 
                 return view("mensajes.msj_rechazado")->with("msj","Ups! Debe hacer una reserva de carpa o esperar el dia de la reserva para poder hacer el pedido");   
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(purchase $purchase)
    {
        //
    }
}
