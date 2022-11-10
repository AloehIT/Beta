<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-body">
            <form action="{{ route('update.testimoni') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="text-end mb-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times text-danger" style="font-size: 25px"></i>
                    </button>
                </div>

                <input type="hidden" id="img" name="img">
                <input type="hidden" id="id" name="id">
                <input type="hidden" id="level" name="level">
    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" class="img-fluid viewimage" id="output1">
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <input type="file" name="image_testimoni" id="actual-btn1" onchange="loadFile1(event)"
                        hidden />
                    <label for="actual-btn1" class="img btn btn-info">Upload Gambar</label>
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Judul (ID)</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Slider">
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Title (EN)</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title Slider">
                </div>
    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Keterangan (ID)</label>
                    <input id="keterangan" type="hidden" name="keterangan" class="keterangan">
                    <trix-editor input="keterangan" class="keterangan"></trix-editor>
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Description (EN)</label>
                    <input id="description" type="hidden" name="description" class="description">
                    <trix-editor input="description" class="description"></trix-editor>
                </div>
                
                
                <div class="text-end mt-5">
                    <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>



<script src="{{URL::to('assets/admin.assets/js/jquery/jquery-3.3.1.min.js')}}"></script>
<script>
    var loadFile1 = function(event) {
      var output = document.getElementById('output1');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>
<script>
    $(document).on("click", ".sendTestimoni", function () {
     var id = $(this).data('id');
     var judul = $(this).data('judul');
     var keterangan = $(this).data('keterangan');
     var level = $(this).data('level');
     var img = $(this).data('img');
     var title = $(this).data('title');
     var description = $(this).data('description');

     $(".modal-body #id").val( id );
     $(".modal-body #judul").val( judul );
     $(".modal-body .keterangan").val( keterangan );
    
     $(".modal-body #level").val( level );
     $(".modal-body #img").val( img );
     $(".modal-body .viewimage").attr("src", "../library/testimoni/"+img);
     $(".modal-body #title").val( title );
     $(".modal-body .description").val( description );
    });
</script>