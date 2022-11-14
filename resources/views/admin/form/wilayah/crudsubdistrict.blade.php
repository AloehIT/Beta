<div class="modal fade" id="addsubdistrict" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">

                <form action="{{ route('insert.subdistrict') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah Daerah Travel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="d-none">
                        <input type="text" name="idnation" id="idn2">
                        <input type="text" name="nation" id="nation2">
                        <input type="text" name="district" id="district2">
                        <input type="text" name="iddistrict" id="idd2">
                        <input type="text" name="idsubdistrict" value="{{ $idsubdistrict }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Daerah</label>
                        <input type="text" name="subdistrict" class="form-control text-capitalize" required placeholder="Daerah" autocomplete="off">
                    </div>                        

                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editsubdistrict" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{ route('update.subdistrict') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Edit Daerah Travel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="d-none">
                        <input type="text" name="idsubdistrict" id="idsubdest">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Daerah</label>
                        <input type="text" name="subdistrict" id="subdistrict" class="form-control text-capitalize" required placeholder="Daerah" autocomplete="off">
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
    $(document).on("click", ".addsubdistrict", function () {
     var idn = $(this).data('idn');
     var nation = $(this).data('nation');
     var idd = $(this).data('idd');
     var district = $(this).data('district');
    
     $(".modal-body #idn2").val( idn );
     $(".modal-body #nation2").val( nation );

     $(".modal-body #idd2").val( idd );
     $(".modal-body #district2").val( district );

    });

    //edit data kabupaten json
    $(document).on("click", ".editsubdistrict", function () {
     var idsubdesc = $(this).data('idsubdesc');
     var subdistrict = $(this).data('subdistrict');

     $(".modal-body #idsubdest").val( idsubdesc );
     $(".modal-body #subdistrict").val( subdistrict );
    });
</script>