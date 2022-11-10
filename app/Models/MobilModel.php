<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MobilModel extends Model
{
    use HasFactory;

    public function sewamobil() {
        return DB::table('tbl_rental')
        ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_rental.kategori')
        ->get();
    }


    public function kategori() {
        return DB::table('tbl_kategori')
        ->where('tipe', 'Rental')
        ->get();
    }

    public function subkategori1() {
        return DB::table('subkategori')
        ->where('sub', 'sub-kategori1')
        ->where('tipe', 'Rental')
        ->get();
    }

    public function subkategori2() {
        return DB::table('subkategori')
        ->where('sub', 'sub-kategori2')
        ->where('tipe', 'Rental')
        ->get();
    }
}

