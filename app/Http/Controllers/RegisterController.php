<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'tittle' => 'Register',
            'active' => 'register'
        ]);
    }
    
    public function store(Request $request){
        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3' , 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns','unique:users' ],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        // $ValidatedData['password'] = bcrypt('password');
        $ValidatedData['password']= Hash::make($ValidatedData['password']);

        User::create($ValidatedData);
        // /** @var ConcreteSession $s */
        // $s = $request->session();
        // $s->flash('success', 'Registration Successfull! Please Login');
        
        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
