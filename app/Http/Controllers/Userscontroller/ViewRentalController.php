<?php

namespace App\Http\Controllers\Userscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ProdukModel;
use App\Models\WilayahModel;
use App\Models\CategoryModel;


class ViewRentalController extends Controller
{
    public function __construct()
    {
        $this->Produk = new ProdukModel(); 
        $this->Location = new WilayahModel(); 
        $this->Category = new CategoryModel();
    }

    public function index()
    {
        $data = [
            //View another product in rental
            "produk" => $this->Produk->rental(),

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];

        return view('mobil', $data);
    }
    public function searchrental(Request $request)
    {

        $data = [
            //View another product in rental
            "produk" => $this->Produk->rental(),

            //master data
            'option' => DB::table('master_option')->get(),
            'ranting' => DB::table('ranting')->get(),
            'kategori' => $this->Category->kategori(),
            'subkategori' => $this->Category->subkategori(),
        ];


        if (isset($_GET['all'])) {
            

            $search_all = $_GET['all'];

            $produk = DB::table('tbl_rental')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori', '=', 'tbl_rental.kategori')
            ->orderBy('tbl_rental.created_at', 'DESC')
            ->where('nama_brand', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tipe_produk', 'LIKE', '%' . $search_all . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_rental.countries', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_rental.district', 'LIKE', '%' . $search_all . '%')
            ->orWhere('tbl_rental.subdistrict', 'LIKE', '%' . $search_all . '%')
            ->orWhere('keterangan', 'LIKE', '%' . $search_all . '%')
            ->orderBy(DB::raw('RAND()'))
            ->get();


            // $produk->appends($request->all());
            return view('mobil', ['produk' => $produk], $data);

        }
        else 
        {
            return view('mobil', $data);
        }
    }
    




    public function detail($kode_produk)
    {
        $data = [
            "detail" => $this->Produk->detail1($kode_produk),
        ];

        return view('detail.detailrental', $data);
    }

}
