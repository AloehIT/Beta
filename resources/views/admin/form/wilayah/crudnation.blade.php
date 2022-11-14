<div class="modal fade" id="Myadd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5">

                <form action="{{ route('insert.nation') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">
                        Tambah Data Negara Travel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="idnation" value="{{ $idnation }}">
                        <label class="form-label text-secondary">Negara</label>
                        <input type="text" name="nation" class="form-control text-capitalize" required placeholder="Negara"
                            autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label text-secondary">Tipe</label>
                        <select name="tipe" class="form-control" id="type" required>
                            <option value="" disabled selected>-- Pilih Tipe --</option>
                            <option value="Travel">Travel</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Pesawat">Pesawat</option>
                            <option value="Bus">Bus</option>
                            <option value="Kereta">Kereta</option>
                            <option value="Rental">Rental</option>
                        </select>
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
                <form action="{{ route('update.nation') }}" method="POST">
                    {{csrf_field()}}
                    <div class="d-flex justify-content-between mb-4">
                        <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">
                            Edit Data Negara Travel
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger"></i></button>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Negara</label>
                        <input type="text" name="nation" class="form-control text-capitalize" id="nation1" required
                            placeholder="Negara">
                        <input type="hidden" name="id" id="idn1">
                        <input type="hidden" name="idnation" id="koden">
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
    $(document).on("click", ".passNation", function () {
     var nation = $(this).data('nation1');
     var idn = $(this).data('idn1');
     var koden = $(this).data('koden1');

     $(".modal-body #nation1").val( nation );
     $(".modal-body #idn1").val( idn );
     $(".modal-body #koden").val( koden );
    });
</script>