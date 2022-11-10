<div class="row mt-3">
  <label class="form-label text-dark">Foto Produk</label>
  <div class="col-md-12">
    <p class="image-upload_produk2 m-0">
      <label class="img-upload_produk2 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="img1 foto-upload_produk2 img-fluid mt-0"
          id="upload11">

        <label class="btn-input_produk2">
          <input type="file" name="img1" onchange="uploadFile11(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
    <input type="hidden" id="gbr" name="gbr">
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="img2 foto-upload_produk1 img-fluid mt-0"
          id="upload12">

        <label class="btn-input_produk1">
          <input type="file" name="img2" onchange="uploadFile12(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr2" name="gbr2">
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="img3 foto-upload_produk1 img-fluid mt-0"
          id="upload13">

        <label class="btn-input_produk1">
          <input type="file" name="img3" onchange="uploadFile13(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr3" name="gbr3">
  </div>



  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="img4 foto-upload_produk1 img-fluid mt-0"
          id="upload14">

        <label class="btn-input_produk1">
          <input type="file" name="img4" onchange="uploadFile14(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr4" name="gbr4">
  </div>

  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="img5 foto-upload_produk1 img-fluid mt-0"
          id="upload15">

        <label class="btn-input_produk1">
          <input type="file" name="img5" onchange="uploadFile15(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr5" name="gbr5">
  </div>

</div>



<script>
   var uploadLogo2 = function(event) {
      var output = document.getElementById('uploadlogo2');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

  var uploadFile11 = function(event) {
      var output = document.getElementById('upload11');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile12 = function(event) {
      var output = document.getElementById('upload12');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile13 = function(event) {
      var output = document.getElementById('upload13');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile14 = function(event) {
      var output = document.getElementById('upload14');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile15 = function(event) {
      var output = document.getElementById('upload15');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>