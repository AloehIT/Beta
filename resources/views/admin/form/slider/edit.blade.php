<!-- Modal -->
<style>
    .img {
        background-color: #1592E6;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.3rem;
        cursor: pointer;
    }
</style>


<div class="modal fade" id="upslide" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-body">
            <form action="{{ route('update.slider') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id">
                <input type="hidden" name="img" id="img">
                <div class="text-end mb-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times text-danger" style="font-size: 25px"></i></button>
                </div>
    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" class="img-fluid viewimage" id="output2">
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <input type="file" name="slider" id="actual-btn" onchange="loadFile2(event)"
                        hidden/>
                    <label for="actual-btn" class="img">Upload Gambar</label>
                </div>

    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Judul (ID)</label>
                    <input type="text" class="form-control" name="judul_slider" id="judul" required placeholder="Judul Slider">
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Judul (EN)</label>
                    <input type="text" class="form-control" name="title_slider" id="title" required placeholder="Title Slider">
                </div>
    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Links</label>
                    <input type="text" class="form-control" name="links" placeholder="link..." id="links"> 
                    <p class="text-info" style="font-size: 12px;">! bisa untuk dikosongkan</p>
                </div>
    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Deskripsi (ID)</label>
                    <input id="deskripsi1" type="hidden" name="deskripsi_slider" class="desk">
                    <trix-editor input="deskripsi1" class="desk"></trix-editor>
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Description (EN)</label>
                    <input id="description1" type="hidden" name="description_slider" class="desc">
                    <trix-editor input="description1" class="desc"></trix-editor>
                </div>
                    

                
                <div class="text-end mt-5">
                    <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{URL::to('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>
<script>
    var loadFile2 = function(event) {
      var output = document.getElementById('output2');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>

<script>
    $(document).on("click", ".passSlider", function () {
     var id = $(this).data('id');
     
     //img
     var img = $(this).data('img');
     //img

     
     var links = $(this).data('links');
     var judul = $(this).data('judul');
     var desk = $(this).data('desk');
     var title = $(this).data('title');
     var desc = $(this).data('desc');






     $(".modal-body #id").val( id );


     $(".modal-body #img").val( img );
     $(".modal-body .viewimage").attr("src", "../library/slider/"+img);


     $(".modal-body #links").val( links );
     $(".modal-body #judul").val( judul );
     $(".modal-body .desk").val( desk );
     $(".modal-body #title").val( title );
     $(".modal-body .desc").val( desc );

     

    });
</script>
