<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContentModel extends Model
{
    use HasFactory;
    
    //about start
    public function keterangan() {
        return DB::table('tbl_tentangkami')->where('level', 'keterangan')->get();

    }

    public function salam() {
        return DB::table('tbl_tentangkami')->where('level', 'salam')->get();

    }

    public function license() {
        return DB::table('tbl_tentangkami')->where('level', 'license')->get();
    }
    //about end


    //testimoni start
    public function keterangan1()
    {
       return DB::table('tbl_testimoni')->where('level', 'keterangan')->get();
    }

    public function ulasan1()
    {
        return DB::table('tbl_testimoni')->where('level', 'ulasan1')->get();
    }

    public function ulasan2()
    {
        return DB::table('tbl_testimoni')->where('level', 'ulasan2')->get();
    }
    //testimoni end
}
