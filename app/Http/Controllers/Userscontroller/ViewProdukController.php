<?php

namespace App\Http\Controllers\Userscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ProdukModel;
use App\Models\WilayahModel;
use App\Models\CategoryModel;


class ViewProdukController extends Controller
{
    public function __construct()
    {
        $this->Produk = new ProdukModel(); 
        $this->Wilayah = new WilayahModel(); 
        $this->Category = new CategoryModel();
    }



    public function index()
    {
        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->produk(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        return view('produk', $data);
    }
    public function searchall(Request $request)
    {

        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->produk(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];


        if (isset($_GET['all'])) {
            

            $search_all = $_GET['all'];

            $produk = DB::table('tbl_produk')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
            ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
            ->orderBy('tbl_produk.created_at', 'DESC')
            ->where('nama_brand', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tipe_produk', 'LIKE', '%' . $search_all . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.prov', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kab', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kec', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keberangkatan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tujuan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keterangan', 'LIKE', '%' . $search_all . '%')
            ->orderBy(DB::raw('RAND()'))
            ->get();


            return view('produk', ['produk' => $produk], $data);

        }
        else 
        {
            return view('produk', $data);
        }
    }


    



    public function hotel()
    {
        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->hotel(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        return view('hotel', $data);
    }
    public function searchhotel(Request $request)
    {

        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->hotel(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];


        if (isset($_GET['all'])) {
            

            $search_all = $_GET['all'];

            $produk = DB::table('tbl_produk')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
            ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
            ->orderBy('tbl_produk.created_at', 'DESC')
            ->where('tipe_produk', 'hotel')
            ->where('nama_brand', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tipe_produk', 'LIKE', '%' . $search_all . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.prov', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kab', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kec', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keberangkatan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tujuan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keterangan', 'LIKE', '%' . $search_all . '%')
            ->orderBy(DB::raw('RAND()'))
            ->paginate(9);


            $produk->appends($request->all());
            return view('hotel', ['produk' => $produk], $data);

        }else 
        {
            return view('hotel', $data);
        }
    }




    
    public function bus()
    {
        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->bus(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        return view('bus', $data);
    }
    public function searchbus(Request $request)
    {

        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->bus(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];


        if (isset($_GET['all'])) {
            

            $search_all = $_GET['all'];

            $produk = DB::table('tbl_produk')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
            ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
            ->orderBy('tbl_produk.created_at', 'DESC')
            ->where('tipe_produk', 'bus')
            ->where('nama_brand', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tipe_produk', 'LIKE', '%' . $search_all . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.prov', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kab', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kec', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keberangkatan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tujuan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keterangan', 'LIKE', '%' . $search_all . '%')
            ->orderBy(DB::raw('RAND()'))
            ->get();

            return view('bus', ['produk' => $produk], $data);

        }else 
        {
            return view('bus', $data);
        }
    }





    public function kereta()
    {
        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->kereta(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        return view('kereta', $data);
    }
    public function searchkereta(Request $request)
    {

        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->kereta(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];


        if (isset($_GET['all'])) {
            

            $search_all = $_GET['all'];

            $produk = DB::table('tbl_produk')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
            ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
            ->orderBy('tbl_produk.created_at', 'DESC')
            ->where('tipe_produk', 'kereta')
            ->where('nama_brand', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tipe_produk', 'LIKE', '%' . $search_all . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.prov', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kab', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kec', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keberangkatan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tujuan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keterangan', 'LIKE', '%' . $search_all . '%')
            ->orderBy(DB::raw('RAND()'))
            ->get();


            // $produk->appends($request->all());
            return view('kereta', ['produk' => $produk], $data);

        }else 
        {
            return view('kereta', $data);
        }
    }




    
    public function pesawat()
    {
        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->pesawat(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        return view('pesawat', $data);
    }
    public function searchpesawat(Request $request)
    {

        $data = [
            //View another product in tourpage
            "produk" => $this->Produk->pesawat(),
            

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'provinsi' => $this->Wilayah->prov(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];


        if (isset($_GET['all'])) {
            

            $search_all = $_GET['all'];

            $produk = DB::table('tbl_produk')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_produk.kategori')
            ->join('subkategori', 'subkategori.subkategori', '=', 'tbl_produk.sub_kategori1',)
            ->orderBy('tbl_produk.created_at', 'DESC')
            ->where('tipe_produk', 'pesawat')
            ->where('nama_brand', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tipe_produk', 'LIKE', '%' . $search_all . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.prov', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kab', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_produk.kec', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keberangkatan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tujuan', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keterangan', 'LIKE', '%' . $search_all . '%')
            ->orderBy(DB::raw('RAND()'))
            ->get();


            // $produk->appends($request->all());
            return view('pesawat', ['produk' => $produk], $data);

        }else 
        {
            return view('pesawat', $data);
        }
    }


















    public function detailhotel($kode_produk)
    {
        $data = [
            "detail" => $this->Produk->detail($kode_produk),
        ];

        return view('detail.detailhotel', $data);
    }

    public function detailpesawat($kode_produk)
    {
        $data = [
            "detail" => $this->Produk->detail($kode_produk),
        ];

        return view('detail.detailpesawat', $data);
    }

    public function detailbus($kode_produk)
    {
        $data = [
            "detail" => $this->Produk->detail($kode_produk),
        ];

        return view('detail.detailbus', $data);
    }

    public function detailkereta($kode_produk)
    {
        $data = [
            "detail" => $this->Produk->detail($kode_produk),
        ];

        return view('detail.detailkereta', $data);
    }






    
}
