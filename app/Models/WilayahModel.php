<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class WilayahModel extends Model
{
    use HasFactory;



    //view wilayah in page home content::START
    public function nation() {
        return DB::table('location')
        ->paginate(10);
    }

    public function district() {
        return DB::table('district')
        ->join('location', 'location.idnation', '=', 'district.idnation')
        ->get();
    }

    public function subdistrict() {
        return DB::table('subdistrict')
        ->join('location', 'location.idnation', '=', 'subdistrict.idnation')
        ->join('district', 'district.iddistrict', '=', 'subdistrict.iddistrict')
        ->get();
    }
    //view wilayah in page home content::END
}
