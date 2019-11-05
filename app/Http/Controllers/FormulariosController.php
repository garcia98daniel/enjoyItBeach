<?php namespace App\Http\Controllers;

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

	public function comidas()
	{
		return view('formularios.form_comidas');
	}

	public function productos()
	{
		return view('formularios.form_productos');
	}

}