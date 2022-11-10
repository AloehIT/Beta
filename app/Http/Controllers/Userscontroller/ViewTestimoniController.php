<?php

namespace App\Http\Controllers\Userscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContentModel;

class ViewTestimoniController extends Controller
{
    public function __construct()
    {
        $this->Content = new ContentModel(); 
    }


    public function index()
    {
        $data = [
            //Content in About
            "keterangan" => $this->Content->keterangan1(),
            "ulasan1" => $this->Content->ulasan1(),
            "ulasan2" => $this->Content->ulasan2(),
        ];

        return view('testimoni', $data);
    }
}
