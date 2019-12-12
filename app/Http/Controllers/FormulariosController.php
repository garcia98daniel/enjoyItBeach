<?php namespace App\Http\Controllers;

use App\product;
use App\User;
use App\purchase;
use App\reservation;
use Illuminate\Support\Facades\DB;
use Auth;
// use RealRashid\SweetAlert\Facades\Alert;
// Use Alert;
use Validator;
use Session;

class FormulariosController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}


	//presenta el formulario para nuevo usuario
	public function carpas()
	{
		return view('formularios.form_carpas');
	}

	public function showRestaurants()
	{
		$restaurantes = DB::table('users')
				   ->where('users.rol_idRol', '=', '2')
				   ->select('users.id','users.nombre as nombre')
				   ->join('products','users.id', '=', 'products.idVendedor' )  
				   ->where('products.idCategoria', '=', '1')
				   ->groupBy('users.id')
				   ->get();
        // dd($restaurantes);
        return view('formularios.listaRestaurantes')->with("restaurantes", $restaurantes );
	}


	public function showComidasRestaurante($id)
	{
		$productos= product::where('idCategoria', '=', 1)
								->where('idVendedor', '=', $id)
								->get();

        //dd($productos);
        return view('formularios.listaComidasConsumidor')->with("productos", $productos );
	}

	public function showStores()
	{
		$tiendas = DB::table('users')
				   ->where('users.rol_idRol', '=', '2')
				   ->select('users.id','users.nombre as nombre')
				   ->join('products','users.id', '=', 'products.idVendedor' )  
				   ->where('products.idCategoria', '=', '2')
				   ->groupBy('users.id')
				   ->get();
		// dd($tiendas);
        return view('formularios.listaTiendas')->with("tiendas", $tiendas );
        
	}

	public function showProductosTienda($id)
	{
		$productos= product::where('idCategoria', '=', 2)
								->where('idVendedor', '=', $id)
								->get();
        
        return view('formularios.listaComidasConsumidor')->with("productos", $productos );
	}

	public function misPedidos()
	{

		$pedidos= DB::table('purchases')
				   ->select('purchases.created_at','purchases.cantidad','purchases.confirmado','purchases.precio','products.nombre','reservations.idCarpa')

				   ->join('products','products.id', '=', 'purchases.idProducto' )
				   ->join('reservations','reservations.idUser', '=', 'purchases.idUser')

					->where('purchases.idUser', '=', Auth::user()->id)
				   ->where('purchases.fecha', '=', 'reservations.fecha')

				   ->orderBy('created_at', 'desc')
				   ->get();

		$reservas = reservation::where('idUser', '=', Auth::user()->id)
								 ->get(); 

		// dd($pedidos);		   
        return view('formularios.misPedidos')->with("pedidos", $pedidos )->with("reservas", $reservas );
	}

//funciones del modulo de vendedor
	public function showProductosVendedor(){
		$misProductos = product::where('idVendedor', '=', Auth::user()->id)
								 ->get();

		return view('formularios.misProductos')->with("misProductos", $misProductos);
	}

	public function showPedidosRestaurant(){
		$pedidos = DB::table('purchases')
				   ->select('purchases.created_at','purchases.cantidad','purchases.confirmado','purchases.precio','products.nombre','reservations.idCarpa','users.nombre as username','products.id','purchases.idUser','purchases.id as idCompra')

				   ->join('products','products.id', '=', 'purchases.idProducto' )
				   ->join('reservations','reservations.idUser', '=', 'purchases.idUser')
				   ->join('users','users.id', '=', 'purchases.idUser')

				   ->where('products.idVendedor', '=', Auth::user()->id)
				   ->where('purchases.fecha', '=', 'reservations.fecha')

				   ->orderBy('created_at', 'desc')
				   ->get();

				   // dd($pedidos);

		return view('formularios.pedidos')->with("pedidos", $pedidos);
	}

}