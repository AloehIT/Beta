<?php 
    $random1 =  mt_rand(1000, 9999);
    $id_sub = 'SUB'.'-'.sprintf("%05s", $random1).date('i').date('s').date('y');
?>

<div class="d-flex justify-content-between mb-4">
    <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah Sub-Kategori</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
</div>



<div class="mb-2">
    <label for="kategori" class="form-label text-secondary">Sub Kategori</label>
    <input type="text" name="subkategori" class="form-control" id="kategori" required placeholder="Sub-Kategori" autocomplete="off">
</div>


<div class="row mb-4">
    <div class="mb-2 col-md-6">
        <label for="subkategori" class="form-label text-secondary">Sub</label>
        <select name="sub" class="form-control" id="subkategori" required>
            <option value="" disabled selected>Pilih Sub</option>
            <option value="sub-kategori1">Sub-kategori1</option>
            <option value="sub-kategori2">Sub-kategori2</option>
        </select>
    </div>

    <div class="mb-2 col-md-6">
        <label for="kode" class="form-label text-secondary">Kode</label>
        <input type="text" name="id_subkategori" class="form-control" id="kode" required
            placeholder="Kode Kategori" value="{{ $id_sub }}">
        <input type="hidden" name="id_kategori" id="idk">
        <input type="hidden" name="tipe" id="tipe">
    </div>
</div>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script> 
<script>
    $(document).on("click", ".passingKat", function () {
     var tipes = $(this).data('tipe');
     var idk = $(this).data('idk');
     var idname = $(this).data('idname');

     $(".modal-body #tipe").val( tipes );
     $(".modal-body #idk").val( idk );
    });
</script>
