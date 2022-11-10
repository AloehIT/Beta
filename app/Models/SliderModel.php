<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SliderModel extends Model
{
    use HasFactory;

    protected $table = "tbl_slider";

    protected $fillable = [
        'img_slider',
        'judul_slider',
        'deskripsi_slider',
        'level_slide',
    ];


    //view slider in page home content::START
    public function sliderhome() {
        return DB::table('tbl_slider')->get();
    }
    //view slider in page home content::END


    //view slider in page admin content::START
    public function prview() {
        return DB::table('tbl_slider')->get();
    }

    public function showupdate($id) {
        return DB::table('tbl_slider')->where('id', $id)->get();
    }
    //view slider in page admin content::END
}
