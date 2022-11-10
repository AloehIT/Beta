<div class="row mt-3">
  <label class="form-label text-dark">Foto Produk</label>
  <div class="col-md-12">
    <p class="image-upload_produk2 m-0">
      <label class="img-upload_produk2 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="foto-upload_produk2 img-fluid mt-0"
          id="output10">

        <label class="btn-input_produk2">
          <input type="file" name="img1" onchange="loadFile10(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output11">

        <label class="btn-input_produk1">
          <input type="file" name="img2" onchange="loadFile11(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output12">

        <label class="btn-input_produk1">
          <input type="file" name="img3" onchange="loadFile12(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>



  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output13">

        <label class="btn-input_produk1">
          <input type="file" name="img4" onchange="loadFile13(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>

  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/train/train.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output14">

        <label class="btn-input_produk1">
          <input type="file" name="img5" onchange="loadFile14(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>

</div>



<script>
  var loadLogo2 = function(event) {
      var output = document.getElementById('viewlogo2');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

  var loadFile10 = function(event) {
      var output = document.getElementById('output10');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile11 = function(event) {
      var output = document.getElementById('output11');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile12 = function(event) {
      var output = document.getElementById('output12');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile13 = function(event) {
      var output = document.getElementById('output13');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile14 = function(event) {
      var output = document.getElementById('output14');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>