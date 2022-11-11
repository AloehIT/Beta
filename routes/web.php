<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
///apps get views:START
use App\Http\Controllers\Userscontroller\HomeController;
use App\Http\Controllers\Userscontroller\ViewProdukController;
use App\Http\Controllers\Userscontroller\ViewRentalController;
use App\Http\Controllers\Userscontroller\ViewTestimoniController;
use App\Http\Controllers\Userscontroller\ViewAboutController;
use App\Http\Controllers\UsersController\ViewTourController;
///apps get views:END



//admins get views:START
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

//page
use App\Http\Controllers\Adminscontroller\DashboardController;
use App\Http\Controllers\Adminscontroller\MasterKategoriController;
use App\Http\Controllers\Adminscontroller\ProdukController;
use App\Http\Controllers\Adminscontroller\AboutController;
use App\Http\Controllers\Adminscontroller\LocationController;
use App\Http\Controllers\Adminscontroller\PaketController;
use App\Http\Controllers\Adminscontroller\PatnerController;
use App\Http\Controllers\Adminscontroller\RentalController;
use App\Http\Controllers\Adminscontroller\SliderController;
use App\Http\Controllers\Adminscontroller\TestimoniController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\Userscontroller\KernajangController;
use App\Http\Middleware\Lang;
//admins get views:END

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware([Lang::class])->group(
    function () {


//Halaman Produk
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produk-kami', [ViewProdukController::class, 'index'])->name('produk');
Route::get('/produk-kami/hotel', [ViewProdukController::class, 'hotel'])->name('hotel');
Route::get('/produk-kami/bus', [ViewProdukController::class, 'bus'])->name('bus');
Route::get('/produk-kami/kereta', [ViewProdukController::class, 'kereta'])->name('kereta');
Route::get('/produk-kami/pesawat', [ViewProdukController::class, 'pesawat'])->name('pesawat');


//search produk
Route::get('/produk-kami/search', [ViewProdukController::class, 'searchall'])->name('search.produkall');
Route::get('/produk-kami/hotel/search', [ViewProdukController::class, 'searchhotel'])->name('search.hotel');
Route::get('/produk-kami/pesawat/search', [ViewProdukController::class, 'searchpesawat'])->name('search.pesawat');
Route::get('/produk-kami/bus/search', [ViewProdukController::class, 'searchbus'])->name('search.bus');
Route::get('/produk-kami/kereta/search', [ViewProdukController::class, 'searchkereta'])->name('search.kereta');


//detailproduk
Route::get('/detailhotel/detail/{kode_produk}', [ViewProdukController::class, 'detailhotel'])->name('detail.hotel');
Route::get('/detailpesawat/detail/{kode_produk}', [ViewProdukController::class, 'detailpesawat'])->name('detail.pesawat');
Route::get('/detailbus/detail/{kode_produk}', [ViewProdukController::class, 'detailbus'])->name('detail.bus');
Route::get('/detailkereta/detail/{kode_produk}', [ViewProdukController::class, 'detailkereta'])->name('detail.kereta');

Route::POST('/add_cart',[cartController::class,'add_cart']);
Route::POST('/delete_cart',[cartController::class,'delete_cart']);

Route::get('/rental-kami', [ViewRentalController::class, 'index'])->name('mobil');
Route::get('/rental-kami/rental/search', [ViewRentalController::class, 'searchrental'])->name('search.rental');
Route::get('/rental-kami/detail/{kode_produk}', [ViewRentalController::class, 'detail'])->name('detail.rental');


Route::get('/tour-kami', [ViewTourController::class, 'index'])->name('tour');
Route::get('/tour-kami/detail/{kode_paket}', [ViewTourController::class, 'detail'])->name('detail.paket');
Route::get('/tour-kami/tour/search', [ViewTourController::class, 'searchall'])->name('search.paket');




Route::get('/tentang-kami', [ViewAboutController::class, 'index'])->name('about');
Route::get('/ulasan-kami', [ViewTestimoniController::class, 'index'])->name('testimoni');

Route::get('/keranjang', [KernajangController::class, 'index'])->name('keranjang');
//Halaman User Pelanggan
















//Halaman Users Admin
Route::get('/dashboard', function () {
    if (Auth::user()) {
        return redirect('/dashboard');
    }

    return view('auth.login');
}); 


//auth access:START
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('getlogin');
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::post('/updateprofile', [DashboardController::class, 'update'])->name('update.profile');
//auth access:END


//Get page
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Master Kategori
Route::get('/kategori', [MasterKategoriController::class, 'index'])->name('admin.kategori');
Route::get('/kategori/search', [MasterKategoriController::class, 'search'])->name('search.kategori');
//CRUD katagori::START

//insert
Route::post('/kategori/insert', [MasterKategoriController::class, 'insertkategori'])->name('insert.category');
Route::post('/kategori/insertsub', [MasterKategoriController::class, 'insertsub'])->name('insert.subcategory');

//update
Route::post('/kategori/update', [MasterKategoriController::class, 'updatekategori'])->name('update.category');
Route::post('/kategori/updatesub', [MasterKategoriController::class, 'updatesub'])->name('update.subkategori');

//deleted
Route::delete('/kategori/deleted/{id_kategori}', [MasterKategoriController::class, 'deletedkategori'])->name('kategori.destroy');
Route::delete('/kategori/deletedsub/{id}', [MasterKategoriController::class, 'deletedsub'])->name('subkategori.destroy');
//CRUD katagori::END




//Master Location
Route::get('/location', [LocationController::class, 'index'])->name('admin.location');
Route::get('/location/search', [LocationController::class, 'search'])->name('search.location');
//CRUD Location::START

//insert
Route::post('/location/insertprov', [LocationController::class, 'insertprov'])->name('insert.provensi');
Route::post('/location/insertkab', [LocationController::class, 'insertkab'])->name('insert.kabupaten');
Route::post('/location/insertkec', [LocationController::class, 'insertkec'])->name('insert.kecamatan');

//update
Route::post('/location/updateprov', [LocationController::class, 'upprov'])->name('update.provensi');
Route::post('/location/updatekab', [LocationController::class, 'upkab'])->name('update.kabupaten');
Route::post('/location/updatekec', [LocationController::class, 'upkec'])->name('update.kecamatan');


//deleted
Route::delete('/delprov/{idprov}', [LocationController::class, 'delprov'])->name('prov.destroy');
Route::delete('/delkab/{idkab}', [LocationController::class, 'delkab'])->name('kab.destroy');
Route::delete('/delkec/{idkec}', [LocationController::class, 'delkec'])->name('kec.destroy');
//CRUD Location::END









//Master Produk
Route::get('/masterproduk', [ProdukController::class, 'index'])->name('admin.produktour');
Route::get('/masterproduk/search', [ProdukController::class, 'search'])->name('search.produk');

//crud produk::START
Route::post('/masterproduk/insert', [ProdukController::class, 'insert'])->name('insert.produk');
Route::post('/masterproduk/update', [ProdukController::class, 'update'])->name('update.produk');
Route::delete('/masterproduk/deleted/{kode_produk}', [ProdukController::class, 'deleted'])->name('produk.destroy');
//crud produk::END








Route::get('/mastersewamobil', [RentalController::class, 'index'])->name('admin.sewamobil');
Route::get('/mastersewamobil/search', [RentalController::class, 'search'])->name('search.sewa');

//crud produk::START
Route::post('/mastersewamobil/insert', [RentalController::class, 'insert'])->name('insert.rental');
Route::post('/mastersewamobil/update', [RentalController::class, 'update'])->name('update.rental');
Route::delete('/mastersewamobil/deleted/{kode_produk}', [RentalController::class, 'deleted'])->name('rental.destroy');
//crud produk::END




Route::get('/masterpakettour', [PaketController::class, 'index'])->name('admin.pakettour');
Route::post('/masterpakettour/insert', [PaketController::class, 'insert'])->name('insert.pakettour');
Route::post('/masterpakettour/update', [PaketController::class, 'update'])->name('update.pakettour');
Route::delete('/masterpakettour/deleted/{kode_paket}', [PaketController::class, 'deleted'])->name('paket.destroy');







////Set about content:Start
Route::get('/set-about', [AboutController::class, 'index'])->name('admin.about');
Route::post('/add-tentangkami/insert', [AboutController::class, 'add'])->name('add.about');
Route::post('/set-about/set', [AboutController::class, 'set'])->name('update.about');
////Set about content:End


////Set testimoni content:Start
Route::get('/set-testimoni', [TestimoniController::class, 'index'])->name('admin.testimoni');
Route::post('/set-testimoni/add', [TestimoniController::class, 'add'])->name('add.testimoni');
Route::post('/set-testimoni/set', [TestimoniController::class, 'set'])->name('update.testimoni');
////Set testimoni content:End


////Set testimoni content:Start
Route::get('/set-slider', [SliderController::class, 'index'])->name('admin.slider');
Route::post('/master-slider/add', [SliderController::class, 'add'])->name('add.slider');
Route::post('/master-slider/update', [SliderController::class, 'update'])->name('update.slider');
////Set testimoni content:End


////Set patner content:Start
Route::get('/set-patnerkami', [PatnerController::class, 'index'])->name('admin.patner');
Route::post('/set-patnerkami/insert', [PatnerController::class, 'insert'])->name('add.patner');
Route::post('/set-patnerkami/deleted/{id}', [PatnerController::class, 'deleted']);




//Get Data JSON
Route::get('/getData1/{id_kategori}', function ($id_kategori) {
    $subkategori1 = DB::table('subkategori')->where('id_kategori', $id_kategori)->where('sub', 'sub-kategori1')->get();
    return response()->json($subkategori1);
})->name('getData');

Route::get('/getData2/{id_kategori}', function ($id_kategori) {
    $subkategori2 = DB::table('subkategori')->where('id_kategori', $id_kategori)->where('sub', 'sub-kategori2')->get();
    return response()->json($subkategori2);
})->name('getData2');

Route::get('/getProv/{prov}', function ($prov) {
    $kab = DB::table('master_kab')->where('prov', $prov)->get();
    return response()->json($kab);
})->name('getProv');

Route::get('/getKab/{kab}', function ($kab) {
    $kec = DB::table('master_kec')->where('kab', $kab)->get();
    return response()->json($kec);
})->name('getKab');


//paket
Route::get('/getHotel/{prov}', function ($prov) {
    $hotel = DB::table('tbl_produk')->where('prov', $prov)->where('tipe_produk', 'hotel')->get();
    return response()->json($hotel);
})->name('getHotel');

Route::get('/getTransport/{prov}', function ($prov) {
    $transport = DB::table('tbl_produk')->where('tujuan', $prov)->where('tipe_produk', 'pesawat')->orWhere('tipe_produk', 'kereta')->orWhere('tipe_produk', 'bus')->get();
    return response()->json($transport);
})->name('getTransport');

Route::get('/getKendaraan/{prov}', function ($prov) {
    $kendaraan = DB::table('tbl_rental')->where('prov', $prov)->get();
    return response()->json($kendaraan);
})->name('getKendaraan');




//harga
Route::get('/getProduk/{kode_produk}', function ($kode_produk) {
    $produk = DB::table('tbl_produk')->where('kode_produk', $kode_produk)->get();
    return response()->json($produk);
})->name('getProduk');

Route::get('/getRental/{kode_produk}', function ($kode_produk) {
    $rental = DB::table('tbl_rental')->where('kode_produk', $kode_produk)->get();
    return response()->json($rental);
})->name('getRental');
//paket



Route::post('/search',function(request $request){
    $kategori = DB::table('tbl_produk')->where('kategori', $request->kategori)->get();
    return response()->json($kategori);
});
    });
//Get Data JSON