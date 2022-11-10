<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\WilayahModel;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->Location = new WilayahModel();  
    }

    public function index()
    {
        $data = [
            'prov' => $this->Location->prov(),
            'kab' => $this->Location->kab(),
            'kec' => $this->Location->kec(),
            'location' => $this->Location->kec(),
        ];

        return view('admin.location', $data);
    }

    ////////////////////////////location Insert/////////////////////////////////
    public function insertprov(Request $request)
    {

        $provensi = DB::table('master_prov')->insert([
            'idprov' => $request->idprov,
            'provinsi' => $request->prov,
        ]);
            
        
        if($provensi){  
            Alert::success('Berhasil', 'Provensi berhasil ditambahkan');      
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Provensi gagal ditambahkan');
            return redirect()->back();
        }
    }

    public function insertkab(Request $request)
    {

        $kabupaten = DB::table('master_kab')->insert([
            'idkab' => $request->idkab,
            'idprov' => $request->idprov,
            'prov' => $request->prov,
            'kab' => $request->kab,
        ]);
            
        
        if($kabupaten){  
            Alert::success('Berhasil', 'Kabupaten berhasil ditambahkan');      
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Kabupaten gagal ditambahkan');
            return redirect()->back();
        }
    }

    public function insertkec(Request $request)
    {

        $kecamatan = DB::table('master_kec')->insert([
            'idprov' => $request->idprov,
            'idkab' => $request->idkab,
            'idkec' => $request->idkec,
            'prov' => $request->prov,
            'kab' => $request->kab,
            'kec' => $request->kec,
        ]);
            
        
        if($kecamatan){  
            Alert::success('Berhasil', 'Kecamatan berhasil ditambahkan');      
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Kecamatan gagal ditambahkan');
            return redirect()->back();
        }
    }
    ////////////////////////////location Insert/////////////////////////////////


    ////////////////////////////location update/////////////////////////////////
    public function upprov(Request $request)
    {
        $provensi = DB::table('master_prov')->where('idprov', $request->idprov)->update([
            'provinsi' => $request->prov,
        ]);

        $provensi = DB::table('master_kab')->where('idprov', $request->idprov)->update([
            'prov' => $request->prov,
        ]);

        $provensi = DB::table('master_kec')->where('idprov', $request->idprov)->update([
            'prov' => $request->prov,
        ]);
            
        
        if($provensi){  
            Alert::success('Berhasil', 'Provinsi berhasil diupdate');      
            return redirect()->back();
        }else{
            Alert::success('Berhasil', 'Provinsi berhasil diupdate');      
            return redirect()->back();
        }
    }


    public function upkab(Request $request)
    {
        $kabupaten = DB::table('master_kab')->where('idkab', $request->idkab)->update([
            'kab' => $request->kab,
        ]);

        $kabupaten = DB::table('master_kec')->where('idkab', $request->idkab)->update([
            'kab' => $request->kab,
        ]);
            
        
        if($kabupaten){  
            Alert::success('Berhasil', 'Kabupaten berhasil diupdate');      
            return redirect()->back();
        }else{
            Alert::success('Berhasil', 'Kabupaten berhasil diupdate');      
            return redirect()->back();
        }
    }

    public function upkec(Request $request)
    {

        $kecamatan = DB::table('master_kec')->where('idkec', $request->idkec)->update([
            'kec' => $request->kec,
        ]);
            
        
        if($kecamatan){  
            Alert::success('Berhasil', 'Kecamatan berhasil diupdate');      
            return redirect()->back();
        }else{
            Alert::success('Berhasil', 'Kecamatan berhasil diupdate');      
            return redirect()->back();
        }
    }
    ////////////////////////////location update/////////////////////////////////



    ////////////////////////////location Deleted/////////////////////////////////
    public function delprov(Request $request)
    {  
        $kab = DB::table('master_kab')->where('idprov',$request->idprov)->first();
        $kec = DB::table('master_kec')->where('idprov',$request->idprov)->first();

        if(!$kab && !$kec)
        {
            DB::table('master_prov')->where('idprov', $request->idprov)->delete();   
            Alert::success('Berhasil', 'Provinsi berhasil dihapus'); 
            return back();
        }else{ 
            Alert::warning('Oops', 'Provinsi memiliki data kabupaten dan kecamatan');
            return back();
        }
    }    


    public function delkab(Request $request)
    {  
        $kec = DB::table('master_kec')->where('idkab',$request->idkab)->first();

        if(!$kec)
        {
            DB::table('master_kab')->where('idkab', $request->idkab)->delete();   
            Alert::success('Berhasil', 'Kabupaten berhasil dihapus'); 
            return back();
        }else{ 
            Alert::warning('Oops', 'Kabupaten memiliki data kecamatan');
            return back();
        }
    }    


    public function delkec(Request $request)
    {  
        $kec = DB::table('master_kec')->where('idkec', $request->idkec)->delete(); 

        if($kec)
        {
            Alert::success('Berhasil', 'Kabupaten berhasil dihapus'); 
            return back();
        }else{ 
            Alert::warning('Oops', 'Kabupaten memiliki data kecamatan');
            return back();
        }
    }    
    ////////////////////////////location Deleted/////////////////////////////////



    public function search(Request $request)
    {

        $data = [
            'prov' => $this->Location->prov(),
            'kab' => $this->Location->kab(),
            'kec' => $this->Location->kec(),
            'location' => $this->Location->kec(),
        ];


        if (isset($_GET['all'])) {

            $search_all = $_GET['all'];

            $prov = DB::table('master_prov')
            ->where('provinsi','like',"%".$search_all."%")
            ->paginate(10);


            $prov->appends($request->all());
            return view('admin.location', ['prov' => $prov], $data);
        }else{

            return view('admin.location', $data);
        }
    }
}
