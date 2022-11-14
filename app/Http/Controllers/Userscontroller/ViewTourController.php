<?php

namespace App\Http\Controllers\UsersController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\CategoryModel;
use App\Models\PaketTour;
use App\Models\WilayahModel;

class ViewTourController extends Controller
{
    public function __construct()
    { 
        $this->Paket = new PaketTour(); 
        $this->Category = new CategoryModel();
        $this->Wilayah = new WilayahModel();
    }


    public function index()
    {
        $data = [
            //View another product in tourpage
            "produk" => $this->Paket->paket(),


            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        return view('tour', $data);
    }
    public function searchall(Request $request)
    {

        $data = [
            //View another product in tourpage
            "produk" => $this->Paket->paket(),


            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        
        if(isset($_GET['all'])) 
        {   
            $search_all = $_GET['all'];
            
            $produk = DB::table('tbl_paket')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_paket.kategori')
            ->where('nama_paket', 'LIKE', '%' . $search_all . '%')            
            ->orWhere('destinasi', 'LIKE', '%' . $search_all . '%')            
            ->orWhere('keterangan', 'LIKE', '%' . $search_all . '%')            
            ->orWhere('description', 'LIKE', '%' . $search_all . '%')            
            ->orWhere('acara', 'LIKE', '%' . $search_all . '%')            
            ->orWhere('program', 'LIKE', '%' . $search_all . '%')            
            ->orderBy(DB::raw('RAND()'))
            ->get();
    
        
            return view('tour', ['produk' => $produk], $data);
        }
        else 
        {
            return view('tour', $data);
        }
    }

    public function filter(Request $request)
    {

        $data = [
            //View another product in tourpage
            "produk" => $this->Paket->paket(),


            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        if(isset($_GET['kategori']) && isset($_GET['sub']) && isset($_GET['prov']) && isset($_GET['min']) && isset($_GET['max'])) 
        {   
            $kategori = $_GET['kategori'];
            $sub = $_GET['sub'];
            $wilayah = $_GET['prov'];
            $min = $_GET['min'];
            $max = $_GET['max'];
            
            $produk = DB::table('tbl_paket')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_paket.kategori')      
            ->where('kategori', 'LIKE', '%' . $kategori . '%')   
            ->where('sub_kategori1', 'LIKE', '%' . $sub . '%')   
            ->orWhere('sub_kategori2', 'LIKE', '%' . $sub . '%')   
            ->where('wilayah', 'LIKE', '%' . $wilayah . '%')   
            ->whereBetween('total_harga', [$min,$max])   
        

            ->orderBy(DB::raw('RAND()'))
            ->get();
    
        
            return view('tour', ['produk' => $produk], $data);

            // dd($produk);
        }
        else 
        {
            return view('tour', $data);
        }
    }
    





    
    public function detail($kode_paket)
    {
        if (!$this->Paket->detail($kode_paket)) {
            return view('404.error');
        }

        $data = [
            "detail" => $this->Paket->detail($kode_paket),
            "rental" => $this->Paket->rental(),
            "produk" => $this->Paket->produk(),
        ];

        return view('detail.detailpaket', $data);
    }
}

