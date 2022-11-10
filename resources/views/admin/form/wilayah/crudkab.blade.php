<div class="modal fade" id="addkab" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">

                <form action="{{ route('insert.kabupaten') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah Kabupaten</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="d-none">
                        <input type="text" name="idprov" id="idp">
                        <input type="text" name="idkab" value="{{ $idkab }}">
                        <input type="text" name="prov" id="prov">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Kabupaten</label>
                        <input type="text" name="kab" class="form-control text-capitalize" required placeholder="Kabupaten" autocomplete="off">
                    </div>                        

                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="editKab" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{ route('update.kabupaten') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Edit Kabupaten</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="d-none">
                        <input type="text" name="idkab" id="idk1">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Kabupaten</label>
                        <input type="text" name="kab" id="kab1" class="form-control text-capitalize" required placeholder="Kabupaten" autocomplete="off">
                    </div>  

                    
                    <div class="text-end">
                        <input type="reset" class="btn btn-sm" style="background: #FFFF00;" value="Reset">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script> 
<script>
    //add data kabupaten jsonn
    $(document).on("click", ".addKab", function () {
        var idprov = $(this).data('idp');
        var prov = $(this).data('prov');
     

        $(".modal-body #idp").val( idprov );
        $(".modal-body #prov").val( prov );
    });


    //edit data kabupaten json
    $(document).on("click", ".editKab", function () {
     var idkab = $(this).data('idk');
     var kab = $(this).data('kab');

     $(".modal-body #idk1").val( idkab );
     $(".modal-body #kab1").val( kab );
    });
</script>