<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdukModel extends Model
{
    use HasFactory;

    protected $table = "tbl_produk";



    //view data produk populer:START
    public function populer() 
    {
        return DB::table('tbl_produk')
        ->where('ranting', '5')
        ->orderBy(DB::raw('RAND()'))
        ->limit(4)
        ->get();
    }


    public function paket() 
    {
        return DB::table('tbl_paket')
        ->orderBy(DB::raw('RAND()'))
        ->limit(4)
        ->get();
    }
    //view data produk populer::END





    //view data produk populer:START
    public function produk(){
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
        ->orderBy('tbl_produk.created_at', 'DESC')
        ->orderBy(DB::raw('RAND()'))
        ->get();
    }
    
    public function hotel(){
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
        ->orderBy('tbl_produk.created_at', 'DESC')
        ->orderBy(DB::raw('RAND()'))
        ->where('tipe_produk', 'hotel')
        ->get();
    }

    public function pesawat(){
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
        ->orderBy('tbl_produk.created_at', 'DESC')
        ->orderBy(DB::raw('RAND()'))
        ->where('tipe_produk', 'pesawat')
        ->get();
    }

    public function kereta(){
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
        ->orderBy('tbl_produk.created_at', 'DESC')
        ->orderBy(DB::raw('RAND()'))
        ->where('tipe_produk', 'kereta')
        ->get();
    }

    public function bus(){
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
        ->orderBy('tbl_produk.created_at', 'DESC')
        ->orderBy(DB::raw('RAND()'))
        ->where('tipe_produk', 'bus')
        ->get();
    }

    public function rental() {
        return DB::table('tbl_rental')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_rental.kategori')
        ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_rental.sub_kategori1',)
        ->orderBy('tbl_rental.created_at', 'DESC')
        ->orderBy(DB::raw('RAND()'))
        ->get();
    }
    //view data produk populer::END


    
    //view data produk:START
    public function detail($kode_produk) 
    {
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->where('kode_produk', $kode_produk)
        ->first();
    }

    public function detail1($kode_produk) 
    {
        return DB::table('tbl_rental')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_rental.kategori')
        ->where('kode_produk', $kode_produk)
        ->first();
    }
    //view data produk::END












    
    //view produk in page admin content::START
    public function dashboard() 
    {
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->orderBy('tbl_produk.created_at', 'DESC')
        ->orderBy(DB::raw('RAND()'))
        ->limit(3)
        ->get();
    }


    public function produkadmin() {
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
        ->orderBy('tbl_produk.created_at', 'DESC')
        ->get();
    }
    //view produk in page admin content::END
}
