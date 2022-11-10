<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = "tbl_kategori";



    public function kategori() {
        return DB::table('tbl_kategori')
        ->orderBy('id', 'DESC')
        ->paginate(10);
    }

    public function subkategori() {
        return DB::table('subkategori')->get();
    }

    public function subkategori1() {
        return DB::table('subkategori')->where('sub', 'sub-kategori1')->get();
    }

    public function subkategori2() {
        return DB::table('subkategori')->where('sub', 'sub-kategori2')->get();
    }


    public function prov() {
        return DB::table('master_prov')->get();
    }

    public function kab() {
        return DB::table('master_kab')->get();
    }

    public function kec() {
        return DB::table('master_kec')->get();
    }
}
