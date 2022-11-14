<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

use App\Models\PaketTour;
use App\Models\CategoryModel;
use App\Models\WilayahModel;

class PaketController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
        $this->Paket = new PaketTour();
        $this->Category = new CategoryModel();
        $this->Location = new WilayahModel();  
    }

    //view paket tour page start
    public function index()
    {
        $data = [
            'paket' => $this->Paket->paket(),
            
            //master data
            'kategori' => $this->Category->kategori(),
            'subkategori1' => $this->Category->subkategori1(),
            'subkategori2' => $this->Category->subkategori2(),

            'nation' => $this->Location->nation(),
            'district' => $this->Location->district(),
            'subdistrict' => $this->Location->subdistrict(),
        ];

        $random1 =  mt_rand(1000, 9999);
        $kode = '-'.sprintf("%05s", $random1).date('i').date('s').date('y');


        return view('admin.pakettour', $data, compact('kode'));
    }
    //view paket tour page end


    ////////////////////////////Paket Insert///////////////////////////////////
    public function insert(Request $request)
    {
        $this->validate($request, [
            //relasi start
            'kode_paket' => 'required|unique:tbl_paket,kode_paket',
            //relasi end
        ]);


        $img1 = $request->file('img1');
        if ($img1) {
            $nama_img1 = 'sangcahayaid-' . time() . $img1->hashName();


            Image::make($request->file('img1'))->resize(800, 500,)->save('library/paket/' . $nama_img1);
            $img1 = $nama_img1;
        }

        $img2 = $request->file('img2');
        if ($img2) {
            $nama_img2 = 'sangcahayaid-' . time() . $img2->hashName();


            Image::make($request->file('img2'))->resize(800, 500,)->save('library/paket/' . $nama_img2);
            $img2 = $nama_img2;
        }

        $img3 = $request->file('img3');
        if ($img3) {
            $nama_img3 = 'sangcahayaid-' . time() . $img3->hashName();


            Image::make($request->file('img3'))->resize(800, 500,)->save('library/paket/' . $nama_img3);
            $img3 = $nama_img3;
        }

        $img4 = $request->file('img4');
        if ($img4) {
            $nama_img2 = 'sangcahayaid-' . time() . $img4->hashName();


            Image::make($request->file('img4'))->resize(800, 500,)->save('library/paket/' . $nama_img2);
            $img4 = $nama_img2;
        }

        $img5 = $request->file('img5');
        if ($img5) {
            $nama_img5 = 'sangcahayaid-' . time() . $img5->hashName();


            Image::make($request->file('img5'))->resize(800, 500,)->save('library/paket/' . $nama_img5);
            $img5 = $nama_img5;
        }



        $paket = DB::table('tbl_paket')->insert([
            'kode_paket' => $request->kode_paket,
            'id_transport' => $request->id_transport,
            'id_hotel' => $request->id_hotel,
            'id_rental' => $request->id_rental,
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
            'img4' => $img4,
            'img5' => $img5,
            'nama_paket' => $request->nama_paket,
            'countries' => $request->countries,
            'wilayah' => $request->wilayah,
            'destinasi' => $request->destinasi,
            'kategori' => $request->kategori,
            'sub_kategori1' => $request->sub1,
            'sub_kategori2' => $request->sub2,
            'total_harga' => $request->total_harga,
            'harga_promo' => $request->harga_promo,
            'hari' => $request->hari,
            'keterangan' => $request->keterangan,
            'description' => $request->description,
            'acara' => $request->acara,
            'program' => $request->program,
            'ranting' => $request->ranting,
        ]);


        if ($paket) {
            Alert::success('Berhasil', 'Produk berhasil ditambahkan');
            return redirect()->back();
        } else {
            Alert::error('Gagal', 'Produk gagal ditambahkan');
            return redirect()->back();
        }
    }
    ////////////////////////////Paket Insert///////////////////////////////////



    ////////////////////////////Paket update///////////////////////////////////
    public function update(Request $request)
    {
        $this->validate($request, [
            //relasi start
            'logo' => 'nullable',
            'img1' => 'nullable',
            'img2' => 'nullable',
            'img3' => 'nullable',
            'img4' => 'nullable',
            'img5' => 'nullable',
            //relasi end
        ]);

        if ($request->img1 || $request->img2 || $request->img3 || $request->img4 || $request->img5) {
            $img1 = $request->file('img1');
            if ($img1) {
                $nama_img1 = 'sangcahayaid-' . time() . $img1->hashName();


                Image::make($request->file('img1'))->resize(800, 500,)->save('library/paket/' . $nama_img1);
                $img1 = $nama_img1;
                unlink('library/paket' . '/' . $request->gbr);
            } else {
                $img1 = $request->gbr;
            }

            $img2 = $request->file('img2');
            if ($img2) {
                $nama_img2 = 'sangcahayaid-' . time() . $img2->hashName();


                Image::make($request->file('img2'))->resize(800, 500,)->save('library/paket/' . $nama_img2);
                $img2 = $nama_img2;
                unlink('library/paket' . '/' . $request->gbr2);
            } else {
                $img2 = $request->gbr2;
            }

            $img3 = $request->file('img3');
            if ($img3) {
                $nama_img3 = 'sangcahayaid-' . time() . $img3->hashName();


                Image::make($request->file('img3'))->resize(800, 500,)->save('library/paket/' . $nama_img3);
                $img3 = $nama_img3;
                unlink('library/paket' . '/' . $request->gbr3);
            } else {
                $img3 = $request->gbr3;
            }

            $img4 = $request->file('img4');
            if ($img4) {
                $nama_img2 = 'sangcahayaid-' . time() . $img4->hashName();


                Image::make($request->file('img4'))->resize(800, 500,)->save('library/paket/' . $nama_img2);
                $img4 = $nama_img2;
                unlink('library/paket' . '/' . $request->gbr4);
            } else {
                $img4 = $request->gbr4;
            }

            $img5 = $request->file('img5');
            if ($img5) {
                $nama_img5 = 'sangcahayaid-' . time() . $img5->hashName();


                Image::make($request->file('img5'))->resize(800, 500,)->save('library/paket/' . $nama_img5);
                $img5 = $nama_img5;
                unlink('library/paket' . '/' . $request->gbr5);
            } else {
                $img5 = $request->gbr5;
            }



            $paket = DB::table('tbl_paket')->where('kode_paket', $request->kode_paket)->update([
                'kode_paket' => $request->kode_paket,
                'id_transport' => $request->id_transport,
                'id_hotel' => $request->id_hotel,
                'id_rental' => $request->id_rental,
                'img1' => $img1,
                'img2' => $img2,
                'img3' => $img3,
                'img4' => $img4,
                'img5' => $img5,
                'nama_paket' => $request->nama_paket,
                'countries' => $request->countries,
                'wilayah' => $request->wilayah,
                'destinasi' => $request->destinasi,
                'kategori' => $request->kategori,
                'sub_kategori1' => $request->sub1,
                'sub_kategori2' => $request->sub2,
                'total_harga' => $request->total_harga,
                'harga_promo' => $request->harga_promo,
                'hari' => $request->hari,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
                'acara' => $request->acara,
                'program' => $request->program,
                'ranting' => $request->ranting,
            ]);
        } else {
            $paket = DB::table('tbl_paket')->where('kode_paket', $request->kode_paket)->update([
                'kode_paket' => $request->kode_paket,
                'id_transport' => $request->id_transport,
                'id_hotel' => $request->id_hotel,
                'id_rental' => $request->id_rental,
                'nama_paket' => $request->nama_paket,
                'countries' => $request->countries,
                'wilayah' => $request->wilayah,
                'destinasi' => $request->destinasi,
                'kategori' => $request->kategori,
                'sub_kategori1' => $request->sub1,
                'sub_kategori2' => $request->sub2,
                'total_harga' => $request->total_harga,
                'harga_promo' => $request->harga_promo,
                'hari' => $request->hari,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
                'acara' => $request->acara,
                'program' => $request->program,
                'ranting' => $request->ranting,
            ]);
        }

        if (!$paket) {
            Alert::warning('Oops', 'Tidak terjadi perubaha pada paket');
            return redirect()->back();
        } elseif ($paket) {
            Alert::success('Berhasil', 'Paket berhasil ditambahkan');
            return redirect()->back();
        }
    }
    ////////////////////////////Paket update///////////////////////////////////


    ////////////////////////////Paket Deleted///////////////////////////////////
    public function deleted(Request $request)
    {
        $paket = DB::table('tbl_paket')->where('kode_paket', $request->kode_paket)->first();

        if ($paket) {
            unlink('library/paket' . '/' . $paket->img1);
            unlink('library/paket' . '/' . $paket->img2);
            unlink('library/paket' . '/' . $paket->img3);
            unlink('library/paket' . '/' . $paket->img4);
            unlink('library/paket' . '/' . $paket->img5);
            DB::table('tbl_paket')->where('kode_paket', $request->kode_paket)->delete();
            Alert::success('Berhasil', 'Paket berhasil dihapus');
            return back();
        } else {
            Alert::error('Gagal', 'Paket gagal dihapus');
            return back();
        }
    }
    ////////////////////////////Paket Deleted///////////////////////////////////
}
