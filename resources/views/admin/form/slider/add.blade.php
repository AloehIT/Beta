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


<div class="modal fade" id="Myadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-body">
            <form action="{{ route('add.slider') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="text-end mb-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times text-danger" style="font-size: 25px"></i></button>
                </div>
    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" class="img-fluid" id="output">
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <input type="file" name="slider" id="actual-btn1" onchange="loadFile(event)"
                        hidden required />
                    <label for="actual-btn1" class="img">Upload Gambar</label>
                </div>

    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Judul (ID)</label>
                    <input type="text" class="form-control" name="judul_slider" required placeholder="Judul Slider">
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Title (EN)</label>
                    <input type="text" class="form-control" name="title_slider" required placeholder="Title Slider">
                </div>
    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Links</label>
                    <input type="text" class="form-control" name="links" placeholder="link...">
                    <p class="text-info" style="font-size: 12px;">! bisa untuk dikosongkan</p>
                </div>
    
                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Deskripsi (ID)</label>
                    <input id="deskripsi" type="hidden" name="deskripsi_slider">
                    <trix-editor input="deskripsi"></trix-editor>
                </div>

                <div class="col-md-12 mt-2">
                    <label class="form-label text-dark">Description (EN)</label>
                    <input id="description" type="hidden" name="description_slider">
                    <trix-editor input="description"></trix-editor>
                </div>
                
                <input type="hidden" name="id" value="{{ $new }}">
                
                
                <div class="text-end mt-5">
                    <button type="submit" class="btn btn-sm text-white" style="background: #1592E6;">Simpan</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
  
<script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>