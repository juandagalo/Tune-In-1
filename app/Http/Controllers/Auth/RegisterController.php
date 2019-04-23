<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{


    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'last_name' => $data['last_name'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return redirect('/');
    }

    function registerGoogle(Request $request){
        $data = array(
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => "TuneIN2019TIC2",
            'password_confirmation' => "TuneIN2019TIC2",
        );
        try {
            $this->validator($data)->validate();
            event(new Registered($user = $this->create($data)));
        } catch (Exception $e) {
            return "error";
        }
        
         return  redirect('/');

    }

}
