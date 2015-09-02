<?php
class AuthController extends Controller
{
    public function getLogin(){
        return View::make('auth.login');
    }
    public function postLogin(){
        $rules = array('username' => 'required', 'password' => 'required');
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()){
            return Redirect::route('user-login')->withErrors($validator);
        }
        $auth = Auth::attempt(array(
            'username' => Input::get('username'),
            'password' => Input::get('password'),
        ), false);

        if(! $auth){
            return Redirect::route('user-login')->withErrors(array(
                'Ошибка авторизации'
            ));
        }

        return Redirect::intended('home');
    }
}