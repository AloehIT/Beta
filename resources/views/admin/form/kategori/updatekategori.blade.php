<input type="hidden" id="idk" name="id">

<div class="mb-3">
    <label for="namakategori" class="form-label text-secondary">Tipe Kategori</label>
    <select name="tipe" class="form-control" id="tipe" required>
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
    <input type="text" name="nama_kategori" class="form-control" id="kategorinama" required
        placeholder="Nama Kategori" autocomplete="off">
</div>



<script>
    $(document).on("click", ".passingcaty", function () {
     var category = $(this).data('category');
     var tipe = $(this).data('tipe');
     var idk = $(this).data('id');


     $(".modal-body #kategorinama").val( category );
     $(".modal-body #idk").val( idk );
     $(".modal-body #tipe").val( tipe );
    });
</script>

  