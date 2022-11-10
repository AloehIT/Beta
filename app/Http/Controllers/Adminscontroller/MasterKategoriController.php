<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

use App\Models\CategoryModel;



class MasterKategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->Category = new CategoryModel();  
    }

    public function index(Request $request)
    {
        $data = [
            'kategori' => $this->Category->kategori(),
            'subkategori1' => $this->Category->subkategori1(),
            'subkategori2' => $this->Category->subkategori2(),
        ];

        return view('admin.kategori', $data);
    }



    ////////////////////////////kategori Insert/////////////////////////////////
    public function insertkategori(Request $request)
    {
        $this->validate($request, [
            //relasi start
            'id_kategori' => 'required|unique:tbl_kategori,id_kategori',
            //relasi end
        ]);

        $kategori = DB::table('tbl_kategori')->insert([
            'id_kategori' => $request->id_kategori,
            'nama_kategori' => $request->nama_kategori,
            'tipe' => $request->tipe,
        ]);

        if($kategori){  
            Alert::success('Berhasil', 'Kategori berhasil ditambahkan');      
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Kategori gagal ditambahkan');
            return redirect()->back();
        }
    }


    public function insertsub(Request $request)
    {
        $this->validate($request, [
            //relasi start
            'id_subkategori' => 'required|unique:subkategori,id_subkategori',
            //relasi end
        ]);


        $subkategori = DB::table('subkategori')->insert([
            'id_kategori' => $request->id_kategori,
            'id_subkategori' => $request->id_subkategori,
            'subkategori' => $request->subkategori,
            'tipe' => $request->tipe,
            'sub' => $request->sub,
        ]);


        if($subkategori){  
            Alert::success('Berhasil', 'Sub Kategori berhasil ditambahkan');      
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Sub Kategori gagal ditambahkan');
            return redirect()->back();
        }
    }
    ////////////////////////////kategori Insert/////////////////////////////////


    ////////////////////////////kategori update/////////////////////////////////
    public function updatekategori(Request $request)
    {
        $kategori = DB::table('tbl_kategori')->where('id',$request->id)->update([
            'id' => $request->id,
            'nama_kategori' => $request->nama_kategori,
            'tipe' => $request->tipe,
        ]);
        

        if($kategori){  
            Alert::success('Berhasil', 'Kategori berhasil diupdate');       
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Kategori gagal diupdate');
            return redirect()->back();
        }
    }


    public function updatesub(Request $request)
    {
        $subkategori = DB::table('subkategori')->where('id',$request->id)->update([
            'id' => $request->id,
            'subkategori' => $request->subkategori,
            'sub' => $request->sub,
        ]);        
        
        if($subkategori){  
            Alert::success('Berhasil', 'Sub-Kategori berhasil diupdate');      
            return redirect()->back();
        }
        else{
            Alert::error('Gagal', 'Sub-Kategori gagal diupdate');
            return redirect()->back();
        }
    }
    ////////////////////////////kategori update/////////////////////////////////



    ////////////////////////////kategori Deleted/////////////////////////////////
    public function deletedkategori(Request $request)
    {
        $sub = DB::table('subkategori')->where('id_kategori',$request->id_kategori)->first();
        $kat = DB::table('tbl_kategori')->where('id_kategori',$request->id_kategori)->first();

        if(!$sub)
        {
            DB::table('tbl_kategori')->where('id_kategori',$request->id_kategori)->delete();

            Alert::success('Berhasil', 'Kategori berhasil dihapus'); 
            return back();
        }else{ 
            Alert::warning('Oops', 'Kategori memiliki subkategori');
            return back();
        }

    }

    


    public function deletedsub(Request $request)
    {
        $produk = DB::table('tbl_produk')->where('sub_kategori1', $request->subkategori)->first();
        $produk = DB::table('tbl_produk')->where('sub_kategori2', $request->subkategori)->first();
        

        if(!$produk){
            DB::table('subkategori')->where('id',$request->id)->delete();
            Alert::success('Berhasil', 'Sub Kategori berhasil dihapus'); 
            return back();
        }else{
            Alert::error('Gagal', 'Sub Kategori gagal dihapus');
            return back();
        }
    }
    ////////////////////////////kategori Deleted/////////////////////////////////



    public function search(Request $request)
    {

        $data = [
            'kategori' => $this->Category->kategori(),
            'subkategori1' => $this->Category->subkategori1(),
            'subkategori2' => $this->Category->subkategori2(),
        ];


        if (isset($_GET['all'])) {

            $search_all = $_GET['all'];

            $kategori = DB::table('tbl_kategori')
            ->where('nama_kategori','like',"%".$search_all."%")
            ->orderBy('id', 'DESC')
            ->paginate(10);


            $kategori->appends($request->all());
            return view('admin.kategori', ['kategori' => $kategori], $data);
        }else{

            return view('admin.kategori', $data);
        }
    }
}
