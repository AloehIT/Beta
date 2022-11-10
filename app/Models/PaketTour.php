<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaketTour extends Model
{
    use HasFactory;
    protected $table = 'tbl_paket';

    public function paket() {
        return DB::table('tbl_paket')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_paket.kategori')
        ->orderBy('tbl_paket.created_at', 'DESC')
        ->orderBy(DB::raw('RAND()'))
        ->get();
    }


    public function detail($kode_paket) 
    {
        return DB::table('tbl_paket')
        ->where('kode_paket', $kode_paket)
        ->first();
    }

    public function rental() 
    {
        return DB::table('tbl_rental')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_rental.kategori')
        ->get();
    }

    public function produk() 
    {
        return DB::table('tbl_produk')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
        ->get();
    }

}
