<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class WilayahModel extends Model
{
    use HasFactory;



    //view wilayah in page home content::START
    public function prov() {
        return DB::table('master_prov')
        ->paginate(10);
    }

    public function kab() {
        return DB::table('master_kab')
        ->join('master_prov', 'master_prov.idprov', '=', 'master_kab.idprov')
        ->get();
    }

    public function kec() {
        return DB::table('master_kec')
        ->join('master_prov', 'master_prov.idprov', '=', 'master_kec.idprov')
        ->join('master_kab', 'master_kab.idkab', '=', 'master_kec.idkab')
        ->get();
    }

    public function location() {
        return DB::table('master_kec')
        ->join('master_prov', 'master_prov.provinsi', '=', 'master_kec.prov')
        // ->join('master_kab', 'master_kab.kab.', '=', 'master_kec.kab')
        ->get();
    }
    //view wilayah in page home content::END
}
