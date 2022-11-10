<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\PatnerModel;

class PatnerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->Patner = new PatnerModel();
    }

    //view patner page start
    public function index()
    {
        $data = [
            'patner' => $this->Patner->patneradmin(),
        ];

        return view('admin.patner', $data);
    }
    //view patner page start


    ////////////////////////////Patner Kami Insert///////////////////////////////////
    public function insert(Request $request)
    {

        $photo = $request->file('img_patner');
        if ($photo) {
            $nama_gambar = 'sangcahayaid-' . time() . $photo->hashName();


            Image::make($request->file('img_patner'))->resize(400, 300,)->save('library/patner/' . $nama_gambar);
            $imgaeName = $nama_gambar;
        }

        $patner = DB::table('tbl_patner')->insert([
            'nama_patner' => $request->nama_patner,
            'deskripsi' => $request->deskripsi,
            'links' => $request->links,
            'img_patner' => $imgaeName,
        ]);


        if ($patner) {
            Alert::success('Berhasil', 'Konten berhasil ditambahkan');
            return redirect()->back();
        } else {
            Alert::error('Gagal', 'Konten gagal ditambahkan');
            return redirect()->back();
        }
    }
    ////////////////////////////Patner Kami Insert///////////////////////////////////



    ////////////////////////////patner Kami Insert///////////////////////////////////
    public function deleted(Request $request)
    {

        $patner = DB::table('tbl_patner')->where('id', $request->id)->first();
        unlink('library/patner' . '/' . $patner->img_patner);

        $deleted = DB::table('tbl_patner')->where('id', $request->id)->delete();

        if ($deleted) {
            Alert::success('Berhasil', 'Patner berhasil dihapus');
            return back();
        } else {
            Alert::error('Gagal', 'Patner gagal dihapus');
            return back();
        }
    }
    ////////////////////////////patner Kami Insert///////////////////////////////////
}
