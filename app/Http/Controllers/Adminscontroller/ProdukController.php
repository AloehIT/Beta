<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

use App\Models\ProdukModel;
use App\Models\CategoryModel;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->Produk = new ProdukModel();
        $this->Category = new CategoryModel();
    }

    public function index()
    {
        $data = [
            'produk' => $this->Produk->produkadmin(),


            //master data
            'kategori' => $this->Category->kategori(),
            'subkategori1' => $this->Category->subkategori1(),
            'subkategori2' => $this->Category->subkategori2(),

            'prov' => $this->Category->prov(),
            'kab' => $this->Category->kab(),
            'kec' => $this->Category->kec(),
        ];

        return view('admin.produk', $data);
    }

    ////////////////////////////Produk Insert///////////////////////////////////
    public function insert(Request $request)
    {
        $this->validate($request, [
            //relasi start
            'kode_produk' => 'required|unique:tbl_produk,kode_produk',
            //relasi end
        ]);

        $logo = $request->file('logo');
        if ($logo) {
            $nama_logo = 'sangcahayaid-' . time() . $logo->hashName();


            Image::make($request->file('logo'))->resize(500, 400,)->save('library/logoperusahaan/' . $nama_logo);
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



        $produk = DB::table('tbl_produk')->insert([
            'kode_produk' => $request->kode_produk,
            'logo' => $logo,
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
            'img4' => $img4,
            'img5' => $img5,
            'nama_brand' => $request->nama_brand,
            'tipe_produk' => $request->tipe_produk,
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
            'keberangkatan' => $request->keberangkatan,
            'tujuan' => $request->tujuan,
            'terminal1' => $request->terminal1,
            'terminal2' => $request->terminal2,
            'ranting' => $request->ranting,
            'keterangan' => $request->keterangan,
            'descreption' => $request->descreption,
            'fasilitas1' => $request->fasilitas1,
            'fasilitas2' => $request->fasilitas2,
            'fasilitas3' => $request->fasilitas3,
            'fasilitas4' => $request->fasilitas4,
            'fasilitas5' => $request->fasilitas5,
            'fasilitas6' => $request->fasilitas6,
        ]);


        if ($produk) {
            Alert::success('Berhasil', 'Produk berhasil ditambahkan');
            return redirect()->back();
        } else {
            Alert::error('Gagal', 'Produk gagal ditambahkan');
            return redirect()->back();
        }
    }
    ////////////////////////////Produk Insert///////////////////////////////////


    ////////////////////////////Produk update///////////////////////////////////
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

        if ($request->logo || $request->img1 || $request->img2 || $request->img3 || $request->img4 || $request->img5) {
            $logo = $request->file('logo');
            if ($logo) {
                $nama_logo = 'sangcahayaid-' . time() . $logo->hashName();


                Image::make($request->file('logo'))->resize(500, 400,)->save('library/logoperusahaan/' . $nama_logo);
                $logo = $nama_logo;
                unlink('library/logoperusahaan' . '/' . $request->logoval);
            } else {
                $logo = $request->logoval;
            }

            $img1 = $request->file('img1');
            if ($img1) {
                $nama_img1 = 'sangcahayaid-' . time() . $img1->hashName();


                Image::make($request->file('img1'))->resize(800, 500,)->save('library/produk/' . $nama_img1);
                $img1 = $nama_img1;
                unlink('library/produk' . '/' . $request->gbr);
            } else {
                $img1 = $request->gbr;
            }

            $img2 = $request->file('img2');
            if ($img2) {
                $nama_img2 = 'sangcahayaid-' . time() . $img2->hashName();


                Image::make($request->file('img2'))->resize(800, 500,)->save('library/produk/' . $nama_img2);
                $img2 = $nama_img2;
                unlink('library/produk' . '/' . $request->gbr2);
            } else {
                $img2 = $request->gbr2;
            }

            $img3 = $request->file('img3');
            if ($img3) {
                $nama_img3 = 'sangcahayaid-' . time() . $img3->hashName();


                Image::make($request->file('img3'))->resize(800, 500,)->save('library/produk/' . $nama_img3);
                $img3 = $nama_img3;
                unlink('library/produk' . '/' . $request->gbr3);
            } else {
                $img3 = $request->gbr3;
            }

            $img4 = $request->file('img4');
            if ($img4) {
                $nama_img2 = 'sangcahayaid-' . time() . $img4->hashName();


                Image::make($request->file('img4'))->resize(800, 500,)->save('library/produk/' . $nama_img2);
                $img4 = $nama_img2;
                unlink('library/produk' . '/' . $request->gbr4);
            } else {
                $img4 = $request->gbr4;
            }

            $img5 = $request->file('img5');
            if ($img5) {
                $nama_img5 = 'sangcahayaid-' . time() . $img5->hashName();


                Image::make($request->file('img5'))->resize(800, 500,)->save('library/produk/' . $nama_img5);
                $img5 = $nama_img5;
                unlink('library/produk' . '/' . $request->gbr5);
            } else {
                $img5 = $request->gbr5;
            }



            $produk = DB::table('tbl_produk')->where('kode_produk', $request->kode_produk)->update([
                'logo' => $logo,
                'img1' => $img1,
                'img2' => $img2,
                'img3' => $img3,
                'img4' => $img4,
                'img5' => $img5,
                'kode_produk' => $request->kode_produk,
                'nama_brand' => $request->nama_brand,
                'tipe_produk' => $request->tipe_produk,
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
                'keberangkatan' => $request->keberangkatan,
                'tujuan' => $request->tujuan,
                'terminal1' => $request->terminal1,
                'terminal2' => $request->terminal2,
                'ranting' => $request->ranting,
                'fasilitas1' => $request->fasilitas1,
                'fasilitas2' => $request->fasilitas2,
                'fasilitas3' => $request->fasilitas3,
                'fasilitas4' => $request->fasilitas4,
                'fasilitas5' => $request->fasilitas5,
                'fasilitas6' => $request->fasilitas6,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
            ]);
        } else {
            $produk = DB::table('tbl_produk')->where('kode_produk', $request->kode_produk)->update([
                'kode_produk' => $request->kode_produk,
                'nama_brand' => $request->nama_brand,
                'tipe_produk' => $request->tipe_produk,
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
                'keberangkatan' => $request->keberangkatan,
                'tujuan' => $request->tujuan,
                'terminal1' => $request->terminal1,
                'terminal2' => $request->terminal2,
                'ranting' => $request->ranting,
                'fasilitas1' => $request->fasilitas1,
                'fasilitas2' => $request->fasilitas2,
                'fasilitas3' => $request->fasilitas3,
                'fasilitas4' => $request->fasilitas4,
                'fasilitas5' => $request->fasilitas5,
                'fasilitas6' => $request->fasilitas6,
                'keterangan' => $request->keterangan,
                'description' => $request->description,
            ]);
        }

        if (!$produk) {
            Alert::warning('Oops', 'Tidak terjadi perubaha pada produk');
            return redirect()->back();
        } elseif ($produk) {
            Alert::success('Berhasil', 'Produk berhasil ditambahkan');
            return redirect()->back();
        }
    }
    ////////////////////////////Produk update///////////////////////////////////



    ////////////////////////////Produk Deleted///////////////////////////////////
    public function deleted(Request $request)
    {
        $produk = DB::table('tbl_produk')->where('kode_produk', $request->kode_produk)->first();

        if ($produk) {
            unlink('library/logoperusahaan' . '/' . $produk->logo);
            unlink('library/produk' . '/' . $produk->img1);
            unlink('library/produk' . '/' . $produk->img2);
            unlink('library/produk' . '/' . $produk->img3);
            unlink('library/produk' . '/' . $produk->img4);
            unlink('library/produk' . '/' . $produk->img5);
            DB::table('tbl_produk')->where('kode_produk', $request->kode_produk)->delete();
            Alert::success('Berhasil', 'Produk berhasil dihapus');
            return back();
        } else {
            Alert::error('Gagal', 'Produk gagal dihapus');
            return back();
        }
    }
    ////////////////////////////Produk Deleted///////////////////////////////////

}
