<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\MobilModel;
use App\Models\CategoryModel;

class RentalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->Mobil = new MobilModel;
        $this->Category = new CategoryModel();
    }

    //view mobil page start
    public function index()
    {
        $data = [
            'produk' => $this->Mobil->sewamobil(),
            'kategori' => $this->Mobil->kategori(),
            'subkategori1' => $this->Mobil->subkategori1(),
            'subkategori2' => $this->Mobil->subkategori2(),
            'tipe_kendaraan' => DB::table('tipe_kendaraan')->get(),

            'prov' => $this->Category->prov(),
            'kab' => $this->Category->kab(),
            'kec' => $this->Category->kec(),
        ];


        return view('admin.sewamobil', $data);
    }
    //view mobil page end



    ////////////////////////////sewa Insert///////////////////////////////////
    public function insert(Request $request)
    {
        $this->validate($request, [
            'kode_produk' => 'required|unique:tbl_rental,kode_produk',
            'logo' => 'nullable',
            'img1' => 'nullable',
            'img2' => 'nullable',
            'img3' => 'nullable',
            'img4' => 'nullable',
            'img5' => 'nullable',
        ]);

        $logo = $request->file('logo');
        if ($logo) {
            $nama_logo = 'sangcahayaid-' . time() . $logo->hashName();


            Image::make($request->file('logo'))->resize(400, 300,)->save('library/logoperusahaan/' . $nama_logo);
            $logo = $nama_logo;
        }

        $img1 = $request->file('img1');
        if ($img1) {
            $nama_img1 = 'sangcahayaid-' . time() . $img1->hashName();


            Image::make($request->file('img1'))->resize(800, 500,)->save('library/produk/' . $nama_img1);
            $img1 = $nama_img1;
        }

        $img2 = $request->file('img2');
        if ($img2) {
            $nama_img2 = 'sangcahayaid-' . time() . $img2->hashName();


            Image::make($request->file('img2'))->resize(800, 500,)->save('library/produk/' . $nama_img2);
            $img2 = $nama_img2;
        }

        $img3 = $request->file('img3');
        if ($img3) {
            $nama_img3 = 'sangcahayaid-' . time() . $img3->hashName();


            Image::make($request->file('img3'))->resize(800, 500,)->save('library/produk/' . $nama_img3);
            $img3 = $nama_img3;
        }

        $img4 = $request->file('img4');
        if ($img4) {
            $nama_img2 = 'sangcahayaid-' . time() . $img4->hashName();


            Image::make($request->file('img4'))->resize(800, 500,)->save('library/produk/' . $nama_img2);
            $img4 = $nama_img2;
        }

        $img5 = $request->file('img5');
        if ($img5) {
            $nama_img5 = 'sangcahayaid-' . time() . $img5->hashName();


            Image::make($request->file('img5'))->resize(800, 500,)->save('library/produk/' . $nama_img5);
            $img5 = $nama_img5;
        }



        $produk = DB::table('tbl_rental')->insert([
            'kode_produk' => $request->kode_produk,
            'logo' => $logo,
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
            'img4' => $img4,
            'img5' => $img5,
            'nama_brand' => $request->nama_brand,
            'tipe_produk' => $request->tipe_produk,
            'tipe_kendaraan' => $request->tipe_kendaraan,
            'prov' => $request->prov,
            'kab' => $request->kab,
            'kec' => $request->kec,
            'alamat' => $request->alamat,
            'kategori' => $request->kategori,
            'sub_kategori1' => $request->sub1,
            'sub_kategori2' => $request->sub2,
            'nilai' => $request->nilai,
            'harga' => $request->harga,
            'harga_promo' => $request->harga_promo,
            'durasi_waktu' => $request->durasi_waktu,
            'ranting' => $request->ranting,
            'keterangan' => $request->keterangan,
            'description' => $request->description,
        ]);


        if ($produk) {
            Alert::success('Berhasil', 'Produk berhasil ditambahkan');      
            return redirect()->back();
        } else {
            Alert::error('Gagal', 'Produk gagal ditambahkan');
            return redirect()->back();
        }
    }
    ////////////////////////////sewa Insert///////////////////////////////////



    ////////////////////////////Sewa update///////////////////////////////////
    public function update(Request $request)
    {
        $this->validate($request, [
            'logo' => 'nullable',
            'img1' => 'nullable',
            'img2' => 'nullable',
            'img3' => 'nullable',
            'img4' => 'nullable',
            'img5' => 'nullable',
        ]);


        if ($request->logo || $request->img1 || $request->img2 || $request->img3 || $request->img4 || $request->img5) {

            $logo = $request->file('logo');
            if ($logo) {
                $nama_logo = 'sangcahayaid-' . time() . $logo->hashName();


                Image::make($request->file('logo'))->resize(500, 400,)->save('library/logoperusahaan/' . $nama_logo);
                $logo = $nama_logo;
                unlink('library/logoperusahaan' . '/' . $request->logoval);
            }else{
                $logo = $request->logoval;
            }

            $img1 = $request->file('img1');
            if ($img1) {
                $nama_img1 = 'sangcahayaid-' . time() . $img1->hashName();


                Image::make($request->file('img1'))->resize(800, 500,)->save('library/produk/' . $nama_img1);
                $img1 = $nama_img1;
                unlink('library/produk' . '/' . $request->gbr);
            }else{
                $img1 = $request->gbr;
            }

            $img2 = $request->file('img2');
            if ($img2) {
                $nama_img2 = 'sangcahayaid-' . time() . $img2->hashName();


                Image::make($request->file('img2'))->resize(800, 500,)->save('library/produk/' . $nama_img2);
                $img2 = $nama_img2;
                unlink('library/produk' . '/' . $request->gbr2);
            }else{
                $img2 = $request->gbr2;
            }

            $img3 = $request->file('img3');
            if ($img3) {
                $nama_img3 = 'sangcahayaid-' . time() . $img3->hashName();


                Image::make($request->file('img3'))->resize(800, 500,)->save('library/produk/' . $nama_img3);
                $img3 = $nama_img3;
                unlink('library/produk' . '/' . $request->gbr3);
            }else{
                $img3 = $request->gbr3;
            }

            $img4 = $request->file('img4');
            if ($img4) {
                $nama_img2 = 'sangcahayaid-' . time() . $img4->hashName();


                Image::make($request->file('img4'))->resize(800, 500,)->save('library/produk/' . $nama_img2);
                $img4 = $nama_img2;
                unlink('library/produk' . '/' . $request->gbr4);
            }else{
                $img4 = $request->gbr4;
            }

            $img5 = $request->file('img5');
            if ($img5) {
                $nama_img5 = 'sangcahayaid-' . time() . $img5->hashName();


                Image::make($request->file('img5'))->resize(800, 500,)->save('library/produk/' . $nama_img5);
                $img5 = $nama_img5;
                unlink('library/produk' . '/' . $request->gbr5);
            }else{
                $img5 = $request->gbr5;
            }



            $produk = DB::table('tbl_rental')->where('kode_produk', $request->kode_produk)->update([
                'logo' => $logo,
                'img1' => $img1,
                'img2' => $img2,
                'img3' => $img3,
                'img4' => $img4,
                'img5' => $img5,
                'kode_produk' => $request->kode_produk,
                'nama_brand' => $request->nama_brand,
                'tipe_produk' => $request->tipe_produk,
                'tipe_kendaraan' => $request->tipe_kendaraan,
                'prov' => $request->prov,
                'kab' => $request->kab,
                'kec' => $request->kec,
                'alamat' => $request->alamat,
                'kategori' => $request->kategori,
                'sub_kategori1' => $request->sub1,
                'sub_kategori2' => $request->sub2,
                'nilai' => $request->nilai,
                'harga' => $request->harga,
                'harga_promo' => $request->harga_promo,
                'durasi_waktu' => $request->durasi_waktu,
                'ranting' => $request->ranting,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
            ]);

        } else {
            $produk = DB::table('tbl_rental')->where('kode_produk', $request->kode_produk)->update([
                'kode_produk' => $request->kode_produk,
                'nama_brand' => $request->nama_brand,
                'tipe_produk' => $request->tipe_produk,
                'tipe_kendaraan' => $request->tipe_kendaraan,
                'prov' => $request->prov,
                'kab' => $request->kab,
                'kec' => $request->kec,
                'alamat' => $request->alamat,
                'kategori' => $request->kategori,
                'sub_kategori1' => $request->sub1,
                'sub_kategori2' => $request->sub2,
                'nilai' => $request->nilai,
                'harga' => $request->harga,
                'harga_promo' => $request->harga_promo,
                'durasi_waktu' => $request->durasi_waktu,
                'ranting' => $request->ranting,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
            ]);
        }


        if ($produk) {
            Alert::success('Berhasil', 'Produk berhasil diupdate');
            return redirect()->back();
        } 
        elseif(!$produk){
            Alert::warning('Oops', 'Tidak terjadi perubaha pada produk');
            return redirect()->back();
        }
        
    }
    ////////////////////////////Sewa update///////////////////////////////////


    ////////////////////////////Produk Insert///////////////////////////////////
    public function deleted(Request $request)
    {
        $produk = DB::table('tbl_rental')->where('kode_produk', $request->kode_produk)->first();
        
        if ($produk) {
            unlink('library/logoperusahaan' .'/'. $produk->logo);
            unlink('library/produk' .'/'. $produk->img1);
            unlink('library/produk' .'/'. $produk->img2);
            unlink('library/produk' .'/'. $produk->img3);
            unlink('library/produk' .'/'. $produk->img4);
            unlink('library/produk' .'/'. $produk->img5);
            DB::table('tbl_rental')->where('kode_produk', $request->kode_produk)->delete();
            Alert::success('Berhasil', 'Produk berhasil dihapus'); 
            return back();
        } else {
            Alert::error('Gagal', 'Produk gagal dihapus');
            return back();
        }
    }
    ////////////////////////////Produk Insert///////////////////////////////////



    
}
