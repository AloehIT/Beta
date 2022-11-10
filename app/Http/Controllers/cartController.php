<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keranjang;
use Illuminate\Support\Str;
use \DB;
class cartController extends Controller
{
    public function add_cart(request $request)
    {
      
        $ada = true;
        if (session()->missing('id_cart')) {
            
            $session = Str::random(32);
            while ($ada) {
                $db = keranjang::where('session', $session)->count();
                if ($db == 0) {
                    $ada = false;
                }
            }
            session()->put('id_cart', $session);
        }else{
            $session = session('id_cart');
        }
      
        keranjang::insert([
            'session'=>$session,
            'id_produk'=>$request->id,
            'harga'=> $request->harga,
            'qty'=>1,
            'type'=>$request->type
        ]);
        return redirect()->back();
    }
    public function delete_cart(request $request){
        keranjang::where('id',$request->id)->delete();
        return redirect()->back();
    }
}
