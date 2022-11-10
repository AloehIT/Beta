<?php

namespace App\Http\Controllers\Userscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//model data view 
use App\Models\SliderModel;
use App\Models\ProdukModel;
use App\Models\PatnerModel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->Slider = new SliderModel(); 
        $this->Produk = new ProdukModel(); 
        $this->Patner = new PatnerModel(); 
    }


    public function index(Request $request)
    {
        $data = [
            //View another product in homepage
            "produk" => $this->Produk->produk(),
            "terpopuler" => $this->Produk->populer(),
            "paket" => $this->Produk->paket(),
        

            //Content in homepage
            "slider" => $this->Slider->sliderhome(),
            "patner" => $this->Patner->patner(),
        ];

        return view('home', $data);
    }
}
