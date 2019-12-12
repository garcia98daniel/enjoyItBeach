<?php

namespace App\Http\Controllers;

use App\sale;
use App\purchase;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class SaleController extends Controller
{    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        
    }

    public function confirmarPedido(){
       
    }
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
         // dd('hola');
            $venta = new sale();
            $venta->idProducto = $request->get('idProducto');
            $venta->idComprador = $request->get('idComprador');
            $venta->cantidad = $request->get('cantidad');
            $venta->precio =  $request->get('precio');
            // dd($request->get('compra'));
            $compra = purchase::find($request->get('compra'));
            $compra->confirmado = 1;

            $compra->save();
            $resul=$venta->save();

            if($resul){
            
              return view("mensajes.msj_correcto")->with("msj","Pedido aprobado, recargue para ver los cambios");   
            }else{
                 
              return view("mensajes.msj_rechazado")->with("msj","Ups!, hubo un error");  

            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(sale $sale)
    {
        //
    }
}
