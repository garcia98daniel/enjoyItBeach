<?php namespace App\Http\Controllers;

use App\product;
use App\User;
use App\DB;
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
								->where('idVendedor', '=', $id);
        
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
								->where('idVendedor', '=', $id);
        
        return view('formularios.listaComidasConsumidor')->with("productos", $productos );
	}

	public function showProductosVendedor(){
		$misProductos = product::where('idVendedor', '=', Auth::user()->id)
								 ->get();

		return view('formularios.misProductos')->with("misProductos", $misProductos);
	}

}