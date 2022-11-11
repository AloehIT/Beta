<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keranjang;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
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
      
        $keranjang = keranjang::insert([
            'session'=>$session,
            'id_produk'=>$request->id,
            'harga'=> $request->harga,
            'oldharga'=> $request->oldharga,
            'qty'=>1,
            'type'=>$request->type
        ]);

        if ($keranjang) {
            Alert::success('Berhasil', 'Produk berhasil ditambahkan ke keranjang');
            return redirect()->route('keranjang');
        } else {
            Alert::error('Gagal', 'Produk gagal ditambahkan ke keranjang');
            return redirect()->back();
        }
    }
    public function delete_cart(request $request){
        $keranjang = keranjang::where('id',$request->id)->delete();
        if ($keranjang) {
            Alert::warning('Opps', 'Produk telah dihapus di keranjang anda');
            return redirect()->back();
        } else {
            Alert::error('Gagal', 'Produk gagal dihapus di keranjang anda');
            return redirect()->back();
        }
    }
}
