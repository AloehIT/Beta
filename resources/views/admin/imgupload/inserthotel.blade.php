<div class="row mt-3">
  <label class="form-label text-dark">Foto Produk</label>
  <div class="col-md-12">
    <p class="image-upload_produk2 m-0">
      <label class="img-upload_produk2 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/hotel.png') }}" alt="" class="foto-upload_produk2 img-fluid mt-0"
          id="output5">

        <label class="btn-input_produk2">
          <input type="file" name="img1" onchange="loadFile5(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/hotel.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output6">

        <label class="btn-input_produk1">
          <input type="file" name="img2" onchange="loadFile6(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>


  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/hotel.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output7">

        <label class="btn-input_produk1">
          <input type="file" name="img3" onchange="loadFile7(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>



  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/hotel.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output8">

        <label class="btn-input_produk1">
          <input type="file" name="img4" onchange="loadFile8(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>

  <div class="col-md-6">
    <p class="image-upload_produk1 m-0">
      <label class="img-upload_produk1 m-0 p-0">
        <img src="{{ URL::to('assets/admin.assets/icon/hotel.png') }}" alt="" class="foto-upload_produk1 img-fluid mt-0"
          id="output9">

        <label class="btn-input_produk1">
          <input type="file" name="img5" onchange="loadFile9(event)" required>
          <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
        </label>
      </label>
    </p>
  </div>

</div>



<script>
  var loadLogo1 = function(event) {
      var output = document.getElementById('viewlogo1');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

  var loadFile5 = function(event) {
      var output = document.getElementById('output5');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile6 = function(event) {
      var output = document.getElementById('output6');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile7 = function(event) {
      var output = document.getElementById('output7');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile8 = function(event) {
      var output = document.getElementById('output8');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

    var loadFile9 = function(event) {
      var output = document.getElementById('output9');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>