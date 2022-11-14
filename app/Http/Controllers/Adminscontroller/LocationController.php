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
            'nation' => $this->Location->nation(),
            'district' => $this->Location->district(),
            'subdistrict' => $this->Location->subdistrict(),
        ];

        return view('admin.location', $data);
    }

    ////////////////////////////location Insert/////////////////////////////////
    public function insertnation(Request $request)
    {
        
        $cek = DB::table('location')->where('nation', $request->nation)->first();
        
        if(!$cek){ 
            DB::table('location')->insert([
                'idnation' => $request->idnation,
                'nation' => $request->nation,
                'type' => $request->type,
            ]);

            Alert::success('Berhasil', 'Negara berhasil didaftarkan');      
            return redirect()->back();
        }elseif($cek){
            Alert::warning('Opps', 'Negara sudah didaftarkan');
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Negara gagal didaftarkan');
            return redirect()->back();
        }
    }

    public function insertdistrict(Request $request)
    {
        $cek = DB::table('district')->where('district', $request->district)->first();
        
        if(!$cek){  
            DB::table('district')->insert([
                'idnation' => $request->idnation,
                'iddistrict' => $request->iddistrict,
                'nation' => $request->nation,
                'district' => $request->district,
            ]);

            Alert::success('Berhasil', 'Data provinsi berhasil didaftar');      
            return redirect()->back();
        }else if($cek){
            Alert::warning('Opps', 'Data provinsi sudah didaftar');
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Data provinsi gagal didaftar');
            return redirect()->back();
        }
    }

    public function insertsubdistrict(Request $request)
    {
        $cek = DB::table('subdistrict')->where('subdistrict', $request->subdistrict)->first();
        
            
        
        if(!$cek){  
            DB::table('subdistrict')->insert([
                'idnation' => $request->idnation,
                'iddistrict' => $request->iddistrict,
                'idsubdistrict' => $request->idsubdistrict,
                'nation' => $request->nation,
                'district' => $request->district,
                'subdistrict' => $request->subdistrict,
            ]);

            Alert::success('Berhasil', 'Data daerah berhasil didaftar');      
            return redirect()->back();
        }
        else if($cek){
            Alert::warning('Opps', 'Data daerah sudah didaftar');
            return redirect()->back();
        }
        else{
            Alert::error('Gagal', 'Data daerah gagal didaftar');
            return redirect()->back();
        }
    }
    ////////////////////////////location Insert/////////////////////////////////


    ////////////////////////////location update/////////////////////////////////
    public function upnation(Request $request)
    {    
        $cek = DB::table('location')->where('nation', $request->nation)->first();
        
        if(!$cek){  
            DB::table('location')->where('idnation', $request->idnation)->update([
                'nation' => $request->nation,
            ]);
    
            DB::table('district')->where('idnation', $request->idnation)->update([
                'nation' => $request->nation,
            ]);
    
            DB::table('subdistrict')->where('idnation', $request->idnation)->update([
                'nation' => $request->nation,
            ]);

            Alert::success('Berhasil', 'Data Negara berhasil diupdate');      
            return redirect()->back();
        }
        elseif($cek){
            Alert::warning('Opps', 'Negara sudah didaftarkan');
            return redirect()->back();
        }
        else{
            Alert::error('Gagal', 'Data Negara gagal diupdate');      
            return redirect()->back();
        }
    }

    public function updistrict(Request $request)
    {  
        $cek = DB::table('district')->where('district', $request->district)->first();

        if(!$cek){  
            DB::table('district')->where('iddistrict', $request->iddistrict)->update([
                'district' => $request->district,
            ]);
    
            DB::table('subdistrict')->where('iddistrict', $request->iddistrict)->update([
                'district' => $request->district,
            ]);

            Alert::success('Berhasil', 'Data provinsi berhasil diupdate');      
            return redirect()->back();
        }elseif($cek){
            Alert::warning('Opps', 'Data provinsi sudah didaftarkan');
            return redirect()->back();
        }
        else{
            Alert::error('Gagal', 'Data provinsi gagal diupdate');      
            return redirect()->back();
        }
    }

    public function upsubdistrict(Request $request)
    {
        $cek = DB::table('subdistrict')->where('subdistrict', $request->subdistrict)->first();
        
        if(!$cek){  
            DB::table('subdistrict')->where('idsubdistrict', $request->idsubdistrict)->update([
                'subdistrict' => $request->subdistrict,
            ]);

            Alert::success('Berhasil', 'Data Daerah berhasil diupdate');      
            return redirect()->back();
        }elseif($cek){
            Alert::warning('Opps', 'Data Daerah sudah didaftarkan');
            return redirect()->back();
        }
        else{
            Alert::error('Gagal', 'Data Daerah gagal diupdate');      
            return redirect()->back();
        }
    }
    ////////////////////////////location update/////////////////////////////////



    ////////////////////////////location Deleted/////////////////////////////////
    public function delnation(Request $request)
    {  
        $disc = DB::table('district')->where('idnation',$request->idnation)->first();
        $subdis = DB::table('subdistrict')->where('idnation',$request->idnation)->first();

        if(!$disc && !$subdis)
        {
            DB::table('location')->where('idnation', $request->idnation)->delete();   
            Alert::success('Berhasil', 'Negara berhasil dihapus'); 
            return back();
        }else{ 
            Alert::warning('Oops', 'Negara memiliki data Provinsi dan Kabupaten');
            return back();
        }
    }    


    public function deldistrict(Request $request)
    {  
        $subdistrict = DB::table('subdistrict')->where('iddistrict',$request->iddistrict)->first();

        if(!$subdistrict)
        {
            DB::table('district')->where('iddistrict', $request->iddistrict)->delete();   
            Alert::success('Berhasil', 'Data provinsi berhasil dihapus'); 
            return back();
        }else{ 
            Alert::warning('Oops', 'Data provinsi memiliki data kabupaten');
            return back();
        }
    }    


    public function delsubdistrict(Request $request)
    {  
        $subdistrict = DB::table('subdistrict')->where('idsubdistrict', $request->idsubdistrict)->delete(); 

        if($subdistrict)
        {
            Alert::success('Berhasil', 'Data daerah berhasil dihapus'); 
            return back();
        }else{ 
            Alert::error('Oops', 'Data daerah gagal dihapus');
            return back();
        }
    }    
    ////////////////////////////location Deleted/////////////////////////////////



    public function search(Request $request)
    {

        $data = [
            'nation' => $this->Location->nation(),
            'district' => $this->Location->district(),
            'subdistrict' => $this->Location->subdistrict(),
        ];


        if (isset($_GET['all'])) {

            $search_all = $_GET['all'];

            $nation = DB::table('location')
            ->where('nation','like',"%".$search_all."%")
            ->paginate(10);


            $nation->appends($request->all());
            return view('admin.location', ['nation' => $nation], $data);
        }else{

            return view('admin.location', $data);
        }
    }
}
