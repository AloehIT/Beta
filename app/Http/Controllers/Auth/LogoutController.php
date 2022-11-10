<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LogoutController extends Controller
{
    public function store()
    {
        auth()->logout();

        Alert::warning('Logout', 'Anda telah logout');
        return redirect()->route('login');
    }
}
