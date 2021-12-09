<?php

namespace App\Http\Controllers\Auth;

use App\Models\Passengers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Passengers as Authenticatable;



class RegisterPassengerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.registerpassenger');
    }

    public function Store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address'=> 'required|max:255',
            'password'=> 'required',

        ]);
        Passengers::create([
            'name' => $request ->name,
            'phone' => $request -> phone,
            'email' => $request -> email,
            'address'=> $request -> address,
            'password'=> Hash::make($request -> password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('homepassenger');
        
    }
}
