<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

use App\Models\PatnerModel;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $data = [
            'keterangan' => DB::table('tbl_tentangkami')->where('level', 'keterangan')->get(),
            'salam' => DB::table('tbl_tentangkami')->where('level', 'salam')->get(),
            'license' => DB::table('tbl_tentangkami')->where('level', 'license')->get(),
        ];

        return view('admin.tentangkami', $data);
    }


    public function add(Request $request)
    {
        if ($request->img == "") {

            $keterangan = DB::table('tbl_tentangkami')->insert([
                'judul' => $request->judul,
                'title' => $request->title,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
                'level' => $request->level,
            ]);


        }else{

            $about = $request->file('img');
            if ($about) {
                $about = 'sangcahayaid-' . time() . $about->hashName();


                Image::make($request->file('img'))->resize(500, 600,)->save('library/about/' . $about);
                $about = $about;
            }


            $keterangan = DB::table('tbl_tentangkami')->insert([
                'judul' => $request->judul,
                'title' => $request->title,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
                'level' => $request->level,
                'image_tentangkami' => $about,
            ]);
        } 

        if($keterangan){  
            Alert::success('Berhasil', 'Konten berhasil ditambahkan');       
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Konten gagal ditambahkan');
            return redirect()->back();
        }
    }
    

    public function set(Request $request)
    {
        if ($request->image_tentangkami == "") {

            $keterangan = DB::table('tbl_tentangkami')->where('id',$request->id)->update([
                'id' => $request->id,
                'judul' => $request->judul,
                'title' => $request->title,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
                'level' => $request->level,
            ]);

        }else{
            $about = $request->file('image_tentangkami');
            if ($about) {
                $about = 'sangcahayaid-' . time() . $about->hashName();


                Image::make($request->file('image_tentangkami'))->resize(500, 600,)->save('library/about/' . $about);
                $about = $about;
                unlink('library/about' . '/' . $request->img);
            }


            $keterangan = DB::table('tbl_tentangkami')->where('id',$request->id)->update([
                'id' => $request->id,
                'judul' => $request->judul,
                'title' => $request->title,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
                'level' => $request->level,
                'image_tentangkami' => $about,
            ]);
        } 

        if($keterangan){  
            Alert::success('Berhasil', 'Konten berhasil diupdate');       
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Konten gagal diupdate');
            return redirect()->back();
        }
    }
}
