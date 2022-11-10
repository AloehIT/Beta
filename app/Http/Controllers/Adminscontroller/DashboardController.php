<?php

namespace App\Http\Controllers\Adminscontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

//model data view 
use App\Models\ProdukModel;
use App\Models\PatnerModel;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->Produk = new ProdukModel(); 
        $this->Patner = new PatnerModel();
    }

    public function index()
    {
        $data = [
            'terbaik' => $this->Produk->dashboard(),
            'patner' => $this->Patner->patneradmin(),
        ];

        return view('admin.dashboard', $data);
    }

    public function update(Request $request)
    {
        $kategori = DB::table('users')->where('id',$request->id)->update([
            'id' => $request->id,
            'name' => $request->name,
            'username' => $request->username,
            'unique_kode' => $request->unique,
            'password' => Hash::make($request->unique),
        ]);
        

        if($kategori){  
            Alert::success('Berhasil', 'Profile berhasil diupdate');       
            return redirect()->back();
        }else{
            Alert::error('Gagal', 'Profile gagal diupdate');
            return redirect()->back();
        }
    }
}
