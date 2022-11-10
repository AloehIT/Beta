<div class="row mt-3">
  <label class="form-label text-dark">Foto Produk</label>
  <div class="col-md-12">
    <p class="image-upload_produk2 m-0">
      <label class="img-upload_produk2 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/up.jpg') }}" alt="" class="img1 foto-upload_produk2 img-fluid mt-0"
          id="upload6">

        <label class="btn-input_produk2">
          <input type="file" name="img1" onchange="uploadFile6(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
    <input type="hidden" id="gbr" name="gbr">
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/up.jpg') }}" alt="" class="img2 foto-upload_produk1 img-fluid mt-0"
          id="upload7">

        <label class="btn-input_produk1">
          <input type="file" name="img2" onchange="uploadFile7(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr2" name="gbr2">
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/up.jpg') }}" alt="" class="img3 foto-upload_produk1 img-fluid mt-0"
          id="upload8">

        <label class="btn-input_produk1">
          <input type="file" name="img3" onchange="uploadFile8(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr3" name="gbr3">
  </div>



  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/up.jpg') }}" alt="" class="img4 foto-upload_produk1 img-fluid mt-0"
          id="upload9">

        <label class="btn-input_produk1">
          <input type="file" name="img4" onchange="uploadFile10(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr4" name="gbr4">
  </div>

  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/up.jpg') }}" alt="" class="img5 foto-upload_produk1 img-fluid mt-0"
          id="upload10">

        <label class="btn-input_produk1">
          <input type="file" name="img5" onchange="uploadFile10(event)">
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>

    <input type="hidden" id="gbr5" name="gbr5">
  </div>

</div>



<script>
  var uploadLogo1 = function(event) {
      var output = document.getElementById('uploadlogo1');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

  var uploadFile6 = function(event) {
      var output = document.getElementById('upload6');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile7 = function(event) {
      var output = document.getElementById('upload7');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile8 = function(event) {
      var output = document.getElementById('upload8');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile9 = function(event) {
      var output = document.getElementById('upload9');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var uploadFile10 = function(event) {
      var output = document.getElementById('upload10');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>