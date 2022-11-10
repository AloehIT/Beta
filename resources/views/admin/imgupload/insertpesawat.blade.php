<div class="row mt-3">
  <label class="form-label text-dark">Foto Produk</label>
  <div class="col-md-12">
    <p class="image-upload_produk2 m-0">
      <label class="img-upload_produk2 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/plane.png') }}" alt="" class="foto-upload_produk2 img-fluid mt-0"
          id="output15">

        <label class="btn-input_produk2">
          <input type="file" name="img1" onchange="loadFile15(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/plane.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output16">

        <label class="btn-input_produk1">
          <input type="file" name="img2" onchange="loadFile16(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/plane.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output17">

        <label class="btn-input_produk1">
          <input type="file" name="img3" onchange="loadFile17(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>



  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/plane.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output18">

        <label class="btn-input_produk1">
          <input type="file" name="img4" onchange="loadFile18(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>

  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/plane/plane.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output19">

        <label class="btn-input_produk1">
          <input type="file" name="img5" onchange="loadFile19(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>

</div>



<script>
  var loadLogo3 = function(event) {
      var output = document.getElementById('viewlogo3');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

  var loadFile15 = function(event) {
      var output = document.getElementById('output15');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile16 = function(event) {
      var output = document.getElementById('output16');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile17 = function(event) {
      var output = document.getElementById('output17');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile18 = function(event) {
      var output = document.getElementById('output18');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile19 = function(event) {
      var output = document.getElementById('output19');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>