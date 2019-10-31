<?php

namespace App\Http\Controllers\Auth;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
// Use Alert;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */



    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
      
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   


//login

       protected function getLogin()
    {
        return view("Login");
    }


       

    public function postLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);



        $credentials = $request->only('email', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            return view("home");
        }else{
            Alert::error('Verifique sus datos', 'error!');
        }

    
    return view("Login");

    }


//login

 //registro   


    protected function getRegister(){
        return view("registro");
    }

    protected function postRegister(Request $request){

        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $data = $request;


        $user=new User;
        $user->nombre=$data['nombre'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);

        
        if($user->save()){
           Alert::success('Registro exitoso');
             // alert()->success('Bienvenido','Registro exitoso');
            return redirect('Login');
                
        }
    
    }

//registro

    protected function getLogout(){
        $this->auth->logout();

        Session::flush();

        return redirect('Login');
    }

}
