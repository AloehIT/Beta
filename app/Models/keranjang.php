<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;
    protected $table = 'tbl_keranjang';
    protected $fillable = ['session','id_produk','qty','harga','created_at','updated_at'];
    public function produk(){
        return $this->belongsTo(ProdukModel::class, 'id_produk','kode_produk');
    }
    public function rental()
    {
        return $this->belongsTo(rental::class, 'id_produk', 'kode_produk');
    }
    public function paket()
    {
        return $this->belongsTo(PaketTour::class, 'id_produk', 'kode_produk');
    }
}
