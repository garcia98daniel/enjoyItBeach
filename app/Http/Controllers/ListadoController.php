<?php namespace App\Http\Controllers;

use App\product;


class ListadoController extends Controller {

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
		public function listado_comidas()
   {
        $comida= product::paginate(25);
        
        return view('formulario.listaComidasConsumidor')->with("comida", $comida );
	}


}