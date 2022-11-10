<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class PatnerModel extends Model
{
    use HasFactory;

    protected $table = "tbl_patner";

    protected $fillable = [
        'img_slider',
        'judul_slider',
        'deskripsi_slider',
        'level_slide',
    ];


    //view patner in page home content::START
    public function patner() {
        return DB::table('tbl_patner')
        ->get();
    }

    public function patneradmin() {
        return DB::table('tbl_patner')
        ->paginate(6);
    }
    //view patner in page home content::END
}
