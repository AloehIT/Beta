<?php
    $random =  mt_rand(1000, 9999);
    $idkategori = 'KTG'.'-'.sprintf("%02s", $random).date('i').date('s').date('y');
?>





<input type="hidden" value="{{$idkategori}}" name="id_kategori">

<div class="mb-3">
    <label for="namakategori" class="form-label text-secondary">Tipe Kategori</label>
    <select name="tipe" class="form-control" id="kategorinama" required>
        <option value="" disabled selected>-- Pilih Tipe --</option>
        <option value="Travel">Travel</option>
        <option value="Hotel">Hotel</option>
        <option value="Pesawat">Pesawat</option>
        <option value="Bus">Bus</option>
        <option value="Kereta">Kereta</option>
        <option value="Rental">Rental</option>
    </select>
</div>





<div class="mb-5">
    <label for="namakategori" class="form-label text-secondary">Kategori</label>
    <input type="text" name="nama_kategori" class="form-control" id="kategorinama" autocomplete="off" required placeholder="Nama Kategori">
</div>


