<?php namespace App\Http\Controllers;

use App\User;
use Request;
use RealRashid\SweetAlert\Facades\Alert;
class UsuariosController extends Controller {

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
	public function agregar_nuevo_usuario()
	{
	
		$data=Request::all();

		$usuario= new User;
		 // dd($usuario);
		$usuario->nombre  =  $data["nombre"];
		// $usuario->apellido=$data["apellido"];
		$usuario->email=$data["email"];
		// $usuario->pais=$data["pais"];
		// $usuario->ciudad=$data["ciudad"];
		// $usuario->institucion=$data["institucion"];
		// $usuario->ocupacion=$data["ocupacion"];
		$usuario->password=bcrypt($data["password"]);

		$resul= $usuario->save();
 dd($resul);
		if($resul){
             return Alert::success('Registro exitoso'); //view("mensajes.msj_correcto");   
		}
		else
		{
             return view("mensajes.msj_rechazado");

		}


	}

}