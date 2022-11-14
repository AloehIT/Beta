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
            Alert::success(trans('notif.berhasil'), trans('notif.label_berhasil'));
            return redirect()->route('keranjang');
        } else {
            Alert::error(trans('notif.gagal'), trans('notif.label_gagal1'));
            return redirect()->back();
        }
    }
    public function delete_cart(request $request){
        $keranjang = keranjang::where('id',$request->id)->delete();
        if ($keranjang) {
            Alert::warning(trans('notif.opps') , trans('notif.label_oops'));
            return redirect()->back();
        } else {
            Alert::error(trans('notif.gagal'), trans('notif.label_gagal'));
            return redirect()->back();
        }
    }
}
