<div class="mb-2">
    <label for="kategori" class="form-label text-secondary">Sub Kategori</label>
    <input type="text" name="subkategori" class="form-control" autocomplete="off" id="subcategory" 
        placeholder="Nama Sub-Kategori">
</div>


<div class="row mb-4">
    <div class="mb-2 col-md-6">
        <label for="subkategori" class="form-label text-secondary">Sub</label>
        <select name="sub" class="form-control" id="sub" required>
            <option value="" disabled selected>Pilih Sub</option>
            <option value="sub-kategori1">Sub-kategori1</option>
            <option value="sub-kategori2">Sub-kategori2</option>
        </select>
    </div>

    <div class="mb-2 col-md-6">
        <label for="kode" class="form-label text-secondary">Kode</label>
        <input type="text" class="form-control" id="kode" placeholder="Kode Kategori" readonly>
        <input type="hidden" id="ids" name="id">
    </div>
</div>


<script>
    $(document).on("click", ".passingsub", function () {
     var subcategory = $(this).data('subcategory');
     var sub = $(this).data('sub');
     var ids = $(this).data('ids');
     var kode = $(this).data('kode');

     $(".modal-body #subcategory").val( subcategory );
     $(".modal-body #sub").val( sub );
     $(".modal-body #ids").val( ids );
     $(".modal-body #kode").val( kode );
    });
</script>

