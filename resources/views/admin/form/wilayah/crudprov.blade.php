<div class="modal fade" id="Myadd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">

                <form action="{{ route('insert.provensi') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah
                            Wilayah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="idprov" value="{{ $idprov }}">
                        <label class="form-label text-secondary">Provinsi</label>
                        <input type="text" name="prov" class="form-control text-capitalize" required placeholder="Provinsi"
                            autocomplete="off">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="Myedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{ route('update.provensi') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Edit
                            Wilayah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Provinsi</label>
                        <input type="text" name="prov" class="form-control text-capitalize" id="provedit1" required
                            placeholder="Provinsi">
                        <input type="hidden" name="id" id="idp1">
                        <input type="hidden" name="idprov" id="idprov1">
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
    $(document).on("click", ".passProv", function () {
     var prov = $(this).data('prov1');
     var idp = $(this).data('idp1');
     var kodep = $(this).data('kodep1');

     $(".modal-body #provedit1").val( prov );
     $(".modal-body #idp1").val( idp );
     $(".modal-body #idprov1").val( kodep );
    });
</script>