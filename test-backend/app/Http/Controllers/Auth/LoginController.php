<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Request\UserRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    //redireciona para a tela de login
     public function index(){
        return view('login');
    }
    //recebe um obj da classe de validação UserRequest
    public function authenticate(UserRequest $request){
        //recupera senha validada e encripta a senha
        //$senha = bcrypt($request->input('password'));
        $senha = $request->input('password');
        
        //recupera o nome validado
        $name = $request->input('name');

        if (Auth::attempt(['name' => $name, 'password' =>$senha]))
        {
            // Authentication passed...
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    public function logout(){
       // Session::flush(); //clears out all the exisiting sessions
        Auth::logout();
       return redirect('/');
    }


}
