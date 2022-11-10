<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    //view slider page start
    public function index()
    {
        $data = [
            'slider' => DB::table('tbl_slider')->get(),
        ];


        $getno=DB::table('tbl_slider')->orderBy('id', 'DESC')->take(1)->get();
        foreach ($getno as $value);
        $terakhir = $value->id;
        $new = $terakhir + 1;

        return view('admin.slider', $data, compact('new'));
    }
    //view slider page end


    ////////////////////////////Slider Insert///////////////////////////////////
    public function add(Request $request)
    {
      
        //update image
        $slider = $request->file('slider');
        if ($slider) {
            $slider = 'sangcahayaid-' . time() . $slider->hashName();


            Image::make($request->file('slider'))->resize(1000, 800,)->save('library/slider/' . $slider);
            $slider = $slider;
        }
       
        $slider = DB::table('tbl_slider')->insert([
            'judul_slider' => $request->judul_slider,
            'deskripsi_slider' => $request->deskripsi_slider,
            'title_slider' => $request->title_slider,
            'description_slider' => $request->description_slider,
            'links' => $request->links,
            'img_slider' => $slider,
            'id' => $request->id,
        ]);


        if($slider){  
            Alert::success('Berhasil', 'Konten berhasil ditambahkan');      
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Konten gagal ditambahkan');
            return redirect()->back();
        }
    }


    public function update(Request $request)
    {
      
        //update image
        if ($request->slider == "") {
 
            $slider = DB::table('tbl_slider')->where('id',$request->id)->update([
                'judul_slider' => $request->judul_slider,
                'deskripsi_slider' => $request->deskripsi_slider,
                'title_slider' => $request->title_slider,
                'description_slider' => $request->description_slider,
                'links' => $request->links,
            ]);
                         
        }else{
        

            $slider = $request->file('slider');
            if ($slider) {
                $slider = 'sangcahayaid-' . time() . $slider->hashName();


                Image::make($request->file('slider'))->resize(1000, 800,)->save('library/slider/' . $slider);
                $slider = $slider;
                unlink('library/slider' . '/' . $request->img);
            }

                

            $slider = DB::table('tbl_slider')->where('id',$request->id)->update([
                'judul_slider' => $request->judul_slider,
                'deskripsi_slider' => $request->deskripsi_slider,
                'title_slider' => $request->title_slider,
                'description_slider' => $request->description_slider,
                'links' => $request->links,
                'img_slider' => $slider,
                
            ]);
            
        } 
       
        

        if($slider){  
            Alert::success('Berhasil', 'Konten berhasil diupdate');      
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Konten gagal diupdate');
            return redirect()->back();
        }
    }
    ////////////////////////////Slider End//////////////////////////////////////
}
