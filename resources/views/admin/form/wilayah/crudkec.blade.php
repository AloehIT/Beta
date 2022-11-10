<div class="modal fade" id="addkec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">

                <form action="{{ route('insert.kecamatan') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah Kecamatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="d-none">
                        <input type="text" name="idprov" id="idp" placeholder="idp">
                        <input type="text" name="prov" id="prov" placeholder="prov">
                        <input type="text" name="kab" id="kab" placeholder="kab">
                        <input type="text" name="idkab" id="idk" placeholder="idkab">
                        <input type="text" name="idkec" value="{{ $idkec }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Kecamatan</label>
                        <input type="text" name="kec" class="form-control text-capitalize" required placeholder="Kecamatan" autocomplete="off">
                    </div>                        

                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="editkec" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{ route('update.kecamatan') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Edit Kecamatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="d-none">
                        <input type="hidden" name="idkec" id="idkec">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Kecamatan</label>
                        <input type="text" name="kec" id="kec" class="form-control text-capitalize" required placeholder="Kecamatan" autocomplete="off">
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
    $(document).on("click", ".addKec", function () {
     var idp = $(this).data('idp');
     var prov = $(this).data('prov');
     var idk = $(this).data('idk');
     var kab = $(this).data('kab');
    
     $(".modal-body #idp").val( idp );
     $(".modal-body #prov").val( prov );

     $(".modal-body #idk").val( idk );
     $(".modal-body #kab").val( kab );

    });

    //edit data kabupaten json
    $(document).on("click", ".editKec", function () {
     var idkec = $(this).data('idkec');
     var kec = $(this).data('kec');

     $(".modal-body #idkec").val( idkec );
     $(".modal-body #kec").val( kec );
    });
</script>