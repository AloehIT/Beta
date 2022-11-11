<?php

namespace App\Http\Controllers\Userscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keranjang;
use Illuminate\Support\Facades\DB;
class KernajangController extends Controller
{
    
    public function index()
    {
        $paket=keranjang::select('tbl_keranjang.*',\DB::raw("'paket' as types"),\DB::raw('tbl_paket.img1 as image'), \DB::raw('tbl_paket.nama_paket as name'))->join('tbl_paket', 'tbl_paket.kode_paket','=','tbl_keranjang.id_produk')->where('session', session('id_cart'))->where('type','paket');
        $rent = keranjang::select('tbl_keranjang.*',\DB::raw("'rental' as types"),\DB::raw('tbl_rental.img1 as image'), \DB::raw('tbl_rental.nama_brand as name'))->join('tbl_rental', 'tbl_rental.kode_produk', '=', 'tbl_keranjang.id_produk')->where('session', session('id_cart'))->where('type', 'rental');
        $carts=DB::table('tbl_keranjang')->select('tbl_keranjang.*',\DB::raw("'produk' as types"),\DB::raw('tbl_produk.img1 as image'), \DB::raw('tbl_produk.nama_brand as name'))->join('tbl_produk', 'tbl_produk.kode_produk', '=', 'tbl_keranjang.id_produk')->where('session',session('id_cart'))->whereIn('type',['bus','pesawat','hotel','kereta'])
        ->union($rent)
        ->union($paket)
        ->get();
       
        return view('keranjang.keranjang',compact('carts'));
    }
}
