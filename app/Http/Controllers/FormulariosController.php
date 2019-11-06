<?php namespace App\Http\Controllers;

use App\product;
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

	public function comidasCosumidor()
	{
		$comidas= product::paginate(25);
        // dd($comida);
        return view('formularios.listaComidasConsumidor')->with("comidas", $comidas );
	}

	public function productos_consumidor()
	{
		return view('formularios.form_productos_consumidor');
	}

}