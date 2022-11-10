<div class="row mt-3">
  <label class="form-label text-dark">Foto Produk</label>
  <div class="col-md-12">
    <p class="image-upload_produk2 m-0">
      <label class="img-upload_produk2 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/travel.png') }}" alt="" class="img1 foto-upload_produk2 img-fluid mt-0"
          id="upload">

        <label class="btn-input_produk2">
          <input type="file" name="img1" onchange="uploadFile(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
    <input type="hidden" id="gbr" name="gbr">
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/travel.png') }}" alt="" class="img2 foto-upload_produk1 img-fluid mt-0"
          id="upload2">

        <label class="btn-input_produk1">
          <input type="file" name="img2" onchange="uploadFile2(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr2" name="gbr2">
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/travel.png') }}" alt="" class="img3 foto-upload_produk1 img-fluid mt-0"
          id="upload3">

        <label class="btn-input_produk1">
          <input type="file" name="img3" onchange="uploadFile3(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr3" name="gbr3">
  </div>



  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/travel.png') }}" alt="" class="img4 foto-upload_produk1 img-fluid mt-0"
          id="upload4">

        <label class="btn-input_produk1">
          <input type="file" name="img4" onchange="uploadFile4(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr4" name="gbr4">
  </div>

  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/travel.png') }}" alt="" class="img5 foto-upload_produk1 img-fluid mt-0"
          id="upload5">

        <label class="btn-input_produk1">
          <input type="file" name="img5" onchange="uploadFile5(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr5" name="gbr5">
  </div>

</div>



<script>
  var uploadLogo = function(event) {
      var output = document.getElementById('uploadlogo');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

  var uploadFile = function(event) {
      var output = document.getElementById('upload');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile2 = function(event) {
      var output = document.getElementById('upload2');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile3 = function(event) {
      var output = document.getElementById('upload3');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile4 = function(event) {
      var output = document.getElementById('upload4');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile5 = function(event) {
      var output = document.getElementById('upload5');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>