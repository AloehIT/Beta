<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class TestimoniController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    //view testimoni page start
    public function index()
    {
        $data = [
            'keterangan' => DB::table('tbl_testimoni')->where('level', 'keterangan')->get(),
            'ulasan1' => DB::table('tbl_testimoni')->where('level', 'ulasan1')->get(),
            'ulasan2' => DB::table('tbl_testimoni')->where('level', 'ulasan2')->get(),
        ];

        return view('admin.testimoni', $data);
    }
    //view testimoni page end


    public function add(Request $request)
    {
        if ($request->img == "") {

            $testimoni = DB::table('tbl_testimoni')->insert([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'title' => $request->title,
                'description' => $request->description,
                'level' => $request->level,
            ]);


        }else{

            $testimoni = $request->file('image_testimoni');
            if ($testimoni) {
                $testimoni = 'sangcahayaid-' . time() . $testimoni->hashName();


                Image::make($request->file('image_testimoni'))->resize(500, 600,)->save('library/testimoni/' . $testimoni);
                $testimoni = $testimoni;
            }


            $testimoni = DB::table('tbl_testimoni')->insert([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'title' => $request->title,
                'description' => $request->description,
                'level' => $request->level,
                'image_testimoni' => $testimoni,
            ]);
        } 

        if($testimoni){  
            Alert::success('Berhasil', 'Konten berhasil ditambahkan');       
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Konten gagal ditambahkan');
            return redirect()->back();
        }
    }
    

    public function set(Request $request)
    {
        if ($request->image_testimoni == "") {

            $testimoni = DB::table('tbl_testimoni')->where('id',$request->id)->update([
                'id' => $request->id,
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'title' => $request->title,
                'description' => $request->description,
                'level' => $request->level,
            ]);

        }else{
            $testimoni = $request->file('image_testimoni');
            if ($testimoni) {
                $testimoni = 'sangcahayaid-' . time() . $testimoni->hashName();


                Image::make($request->file('image_testimoni'))->resize(500, 600,)->save('library/testimoni/' . $testimoni);
                $testimoni = $testimoni;
                unlink('library/testimoni' . '/' . $request->img);
            }


            $testimoni = DB::table('tbl_testimoni')->where('id',$request->id)->update([
                'id' => $request->id,
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'title' => $request->title,
                'description' => $request->description,
                'level' => $request->level,
                'image_testimoni' => $testimoni,
            ]);
        } 

        if($testimoni){  
            Alert::success('Berhasil', 'Konten berhasil diupdate');       
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Konten gagal diupdate');
            return redirect()->back();
        }
    }
}
