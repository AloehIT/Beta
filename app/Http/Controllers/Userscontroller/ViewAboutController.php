<?php

namespace App\Http\Controllers\Userscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ContentModel;
use App\Models\PatnerModel;



class ViewAboutController extends Controller
{
    public function __construct()
    {
        $this->Content = new ContentModel(); 
        $this->Patner = new PatnerModel(); 
    }


    public function index()
    {
        $data = [
            //Content in About
            "keterangan" => $this->Content->keterangan(),
            "salam" => $this->Content->salam(),
            "license" => $this->Content->license(),

            "patner" => $this->Patner->patner(),
        ];

        return view('about', $data);
    }
}
