<div class="row mt-3">
  <label class="form-label text-dark">Foto Produk</label>
  <div class="col-md-12">
    <p class="image-upload_produk2 m-0">
      <label class="img-upload_produk2 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/front.png') }}" alt="" class="img1 foto-upload_produk2 img-fluid mt-0"
          id="upload16">

        <label class="btn-input_produk2">
          <input type="file" name="img1" onchange="uploadFile16(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
    <input type="hidden" id="gbr" name="gbr" required>
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/front.png') }}" alt="" class="img2 foto-upload_produk1 img-fluid mt-0"
          id="upload17">

        <label class="btn-input_produk1">
          <input type="file" name="img2" onchange="uploadFile17(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr2" name="gbr2" required>
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/side.png') }}" alt="" class="img3 foto-upload_produk1 img-fluid mt-0"
          id="upload18">

        <label class="btn-input_produk1">
          <input type="file" name="img3" onchange="uploadFile18(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr3" name="gbr3" required>
  </div>



  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/side.png') }}" alt="" class="img4 foto-upload_produk1 img-fluid mt-0"
          id="upload19">

        <label class="btn-input_produk1">
          <input type="file" name="img4" onchange="uploadFile19(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr4" name="gbr4" required>
  </div>

  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/up.jpg') }}" alt="" class="img5 foto-upload_produk1 img-fluid mt-0"
          id="upload20">

        <label class="btn-input_produk1">
          <input type="file" name="img5" onchange="uploadFile20(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr5" name="gbr5" required>
  </div>

</div>



<script>
   var uploadLogo3 = function(event) {
      var output = document.getElementById('uploadlogo3');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

  var uploadFile16 = function(event) {
      var output = document.getElementById('upload16');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile17 = function(event) {
      var output = document.getElementById('upload17');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile18 = function(event) {
      var output = document.getElementById('upload18');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile19 = function(event) {
      var output = document.getElementById('upload19');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile20 = function(event) {
      var output = document.getElementById('upload20');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>