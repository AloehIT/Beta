<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {

        return view('auth.login');
    }

    public function store(Request $request)
    {
        // $username = DB::table('users')->select('username')->where('username', $request->username)->first();
        $levels = DB::table('users')
        ->select('users.role')
        ->orderBy('users.id','DESC')

        ->where('username', $request->username)->first();

        $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
        ]);
        


        if (!auth()->attempt($request->only('username', 'password'), $request->remember)){
            Alert::error ( 'Failed' , 'The username or password you entered may be incorrect' );
            return redirect()->route('login');
        }

        if($levels->role == 'admin') {
            Alert::success ( 'Success' , 'You have successfully logged in' );
            return redirect()->route('dashboard');
        } 
    }
}
