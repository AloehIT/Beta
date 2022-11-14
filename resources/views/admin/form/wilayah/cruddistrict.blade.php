<div class="modal fade" id="adddistrict" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">

                <form action="{{ route('insert.district') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah Wilayah Travel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="d-none">
                        <input type="text" name="idnation" id="idn">
                        <input type="text" name="iddistrict" value="{{ $iddistrict }}">
                        <input type="text" name="nation" id="nation">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Wilayah</label>
                        <input type="text" name="district" class="form-control text-capitalize" required placeholder="Wilayah" autocomplete="off">
                    </div>                        

                    <div class="text-end">
                        <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="editdistrict" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body p-5">
                <form action="{{ route('update.district') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Edit Wilayah Travel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="d-none">
                        <input type="text" name="iddistrict" id="idd1">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Wilayah</label>
                        <input type="text" name="district" id="district1" class="form-control text-capitalize" required placeholder="Wilayah" autocomplete="off">
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
    $(document).on("click", ".passDistrict", function () {
        var idn = $(this).data('idn');
        var nation = $(this).data('nation');
     

        $(".modal-body #idn").val( idn );
        $(".modal-body #nation").val( nation );
    });


    //edit data kabupaten json
    $(document).on("click", ".editdistrict", function () {
     var idd = $(this).data('idd');
     var district = $(this).data('district');

     $(".modal-body #idd1").val( idd );
     $(".modal-body #district1").val( district );
    });
</script>