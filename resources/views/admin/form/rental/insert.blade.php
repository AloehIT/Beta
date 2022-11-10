<form action="{{ route('insert.rental') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="tab-pane fade show main active1">
        <div class="card">
            <div class="card-body row mx-1">
                <input type="hidden" name="tipe_produk" value="rental">
                <input type="hidden" name="kode_produk" value="PRD{{ $kode }}">

                <div class="col-md-12 mb-2">
                    <h5 class="modal-title mb-2" id="staticBackdropLabel">Informasi Umum</h5>
                    <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            @include('admin.imgupload.insertrental')                            
                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark">Logo Perusahaan</label>
                                <p class="upload_logo m-0" style="border: 4px solid #EEEEEE; width: 120px; height: 110px;">
                                  <label class="img-upload_logo m-0 p-0">
                                    <img src="{{URL::to('assets/admin.assets/icon/addmobil.png')}}" alt="" class="foto-upload_logo img-fluid mt-0"
                                      id="viewlogo1">
                            
                                    <label class="btn-input_logo">
                                      <input type="file" name="logo" onchange="loadLogo1(event)" required>
                                      <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
                                    </label>
                                  </label>
                                </p>
                            </div>

                            <div class=" mb-1 col-md-12">
                                <label class="form-label text-dark">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_brand"
                                    placeholder="Nama Brand" required>
                            </div>

                            <!------------------------------------Kategori Utama Produk------------------------------------------->
                            <div class="col-md-12 mb-1">
                                <label class="form-label text-dark">Kategori</label>
                                <select id="inkategori" class="form-control text-capitalize" name="kategori" required>
                                    <option selected>-- Pilih Kategori --</option>
                                    @foreach($kategori as $kat)
                                        @if($kat->tipe == "Rental")
                                            <option value="{{ $kat->id_kategori }}">{{ $kat->nama_kategori }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <label class="form-label text-dark">Sub-kategori1</label>
                                    <select id="insub1" class="form-control text-capitalize" name="sub1" required> 
                                        <option>-- Pilih Kategori --</option>
                                    </select>
                                </div>
                    
                                <div class="col-md-6 mb-1">
                                    <label for="sub2" class="form-label text-dark">Sub-kategori2</label>
                                    <select id="insub2" class="form-control text-capitalize" name="sub2" required>
                                        <option selected disabled>-- Pilih Kategori --</option>
                                    </select>
                                </div>
                            </div>
                            <!------------------------------------Kategori Utama Produk------------------------------------------->

                            <!------------------------------------Alamat Produk Start------------------------------------------->
                            <div class="mb-1 col-md-12">
                                <label class="form-label text-dark">Provinsi</label>
                                <select id="inprov" class="form-control text-capitalize" name="prov" required>
                                    <option selected>-- Pilih Provinsi --</option>
                                    @foreach($prov as $prov)
                                        <option value="{{ $prov->provinsi }}">Provinsi {{ $prov->provinsi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label text-dark">Kabupaten</label>
                                    <select id="inkab" class="form-control text-capitalize" name="kab" required>
                                        <option selected disabled>-- Pilih Kabupaten --</option>
                                    </select>
                                </div>

                                <div class="mb-1 col-md-6">
                                    <label class="form-label text-dark">Kecamatan</label>
                                    <select id="inkec" class="form-control text-capitalize" name="kec" required>
                                        <option selected disabled>-- Pilih Kecamatan --</option>
                                    </select>
                                </div>
                            </div>
                            <!------------------------------------Alamat Produk END------------------------------------------->
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="mb-1">
                                <label class="form-label text-dark">Lokasi</label>
                                <input id="alamat" type="hidden" name="alamat">
                                <trix-editor input="alamat"></trix-editor>
                            </div>
                        </div>

                    </div>        
                </div>

                <div class="col-md-12 text-end">
                    <button class="btn btn-primary next-button col-12 mt-3">Next <i
                            class="fa fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>


    <div class="tab-pane fade show main">
        <div class="card">
            <div class="card-body row mx-1">
                <div class="col-md-12 mb-2">
                    <h5 class="modal-title mb-2" id="staticBackdropLabel">Keterangan Produk</h5>
                    <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
                </div>

                <div class="col-md-12 mb-1">
                    <label for="keterangan" class="form-label"
                        style="font-size: 18px;">Keterangan (ID)</label>
                    <input id="keterangan" type="hidden" name="keterangan">
                    <trix-editor input="keterangan"></trix-editor>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label"
                        style="font-size: 18px;">Description (EN)</label>
                    <input id="descreption" type="hidden" name="descreption">
                    <trix-editor input="descreption"></trix-editor>
                </div>

                <div class="col-md-12 text-end">
                    <button class="btn btn-primary previous-button"><i
                            class="fa fa-long-arrow-left"></i> Previous</button>
                    <button class="btn btn-success next-button">Next <i
                        class="fa fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>


    <div class="tab-pane fade show main">
        <div class="card">
            <div class="card-body row mx-1">
                <div class="mb-2">
                    <h5 class="modal-title" id="staticBackdropLabel">Informasi Fasilitas</h5>
                    <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
                </div>

                <div class="row mt-1">
                    <div class="mb-2">
                        <label class="form-label text-dark">Tipe Kendaraan</label>
                        <select class="form-control" name="tipe_kendaraan" required>
                            <option value="" selected disabled>-- Tipe Kendaraan --</option>
                            @foreach($tipe_kendaraan as $tipes)
                                <option value="{{ $tipes->tipe }}">{{ $tipes->tipe }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="mb-2">
                        <label class="form-label text-dark">Rating Penilaian Kendaraan</label>
                        <select class="form-control" name="ranting" required>
                            <option selected disabled>-- Pilih Rating --</option>
                            <option value="5">Bintang 5</option>
                            <option value="4">Bintang 4</option>
                            <option value="3">Bintang 3</option>
                            <option value="2">Bintang 2</option>
                            <option value="1">Bintang 1</option>
                        </select>
                    </div>
                </div>
        
        
                <div class="row mt-2">
                    <label class="form-label" style="font-size: 18px;">Sewa & Kapasitas Kendaraan</label>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background: #D6D6D6;"
                                id="basic-addon1"><img src="{{ URL::to('assets/admin.assets/icon/chair.png') }}" class="img-fluid" width="20" alt=""></span>
                            <input type="number" min="0" class="form-control px-3" placeholder="Jumlah Penumpang"
                                name="nilai">
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background: #D6D6D6;"
                                id="basic-addon1"><i class="bi bi-calendar-day"></i></span>
                            <input type="text" class="form-control px-3" placeholder="Hari Peminjaman"
                                name="durasi_waktu">
                        </div>
                    </div>
        
                    <label class="form-label" style="font-size: 18px;">Harga Sewa & Promo</label>
        
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background: #D6D6D6;"
                                id="basic-addon1"><span class="text-dark">Rp.</span></span>
                            <input type="number" class="form-control px-3" placeholder="Harga"
                                name="harga">
                        </div>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <div class="input-group mb-0">
                            <span class="input-group-text" style="background: #D6D6D6;"
                                id="basic-addon1"><span class="text-dark">Rp.</span></span>
                            <input type="number" class="form-control px-3" placeholder="Harga Promo"
                                name="harga_promo">
                        </div>
                        <p style="color: #1592E6; font-size: 11px;" class="mb-0">! Kosongkan harga promo jika tidak ada</p>
                    </div>
                </div>

                <div class="col-md-12 text-end">
                    <button class="btn btn-primary previous-button"><i
                        class="fa fa-long-arrow-left"></i> Previous</button>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle-fill"></i> Simpan 
                    </button>
                </div>
            </div>
        </div>
    </div>


</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{URL::to('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>

<script type="text/javascript">
    //Kategori
    $('#inkategori').change(function(){
        var sub = $(this).val();    

        if(sub){
            $.ajax({
                type:"GET",
                url: '/getData1/'+sub,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#insub1").empty();
                        $("#insub1").append('<option>-- Pilih Kategori --</option>');

                        $.each(data,function(key, subkategori1){
                            $("#insub1").append('<option value="'+subkategori1.subkategori+'">'+subkategori1.subkategori+'</option>');
                        });
                    }else{
                        $("#insub1").empty();
                    }
                }
            });
        }else{
            $("#insub1").empty();
        } 
        
        
        if(sub){
            $.ajax({
                type:"GET",
                url: '/getData2/'+sub,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#insub2").empty();
                        $("#insub2").append('<option>-- Pilih Kategori --</option>');

                        $.each(data,function(key, subkategori2){
                            $("#insub2").append('<option value="'+subkategori2.subkategori+'">'+subkategori2.subkategori+'</option>');
                        });
                    }else{
                        $("#insub2").empty();
                    }
                }
            });
        }else{
            $("#insub2").empty();
        } 
    });

    //Wilayah
    $('#inprov').change(function(){
        var kab = $(this).val();    

        if(kab){
            $.ajax({
                type:"GET",
                url: '/getProv/'+kab,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#inkab").empty();
                        $("#inkab").append('<option>-- Pilih Kabupaten --</option>');
                        $("#inkec").empty();
                        $("#inkec").append('<option>-- Pilih Kecamatan --</option>');

                        $.each(data,function(key, kab){
                            $("#inkab").append('<option value="'+kab.kab+'">Kabupaten '+kab.kab+'</option>');
                        });
                    }else{
                        $("#inkab").empty();
                        $("#inkec").empty();
                    }
                }
            });
        }else{
            $("#inkab").empty();
            $("#inkec").empty();
        } 
        
    });


    $('#inkab').change(function(){
        var kec = $(this).val();    

        if(kec){
            $.ajax({
                type:"GET",
                url: '/getKab/'+kec,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#inkec").empty();
                        $("#inkec").append('<option>-- Pilih Kecamatan --</option>');

                        $.each(data,function(key, kec){
                            $("#inkec").append('<option value="'+kec.kec+'">Kecamatan '+kec.kec+'</option>');
                        });
                    }else{
                        $("#inkec").empty();
                    }
                }
            });
        }else{
            $("#inkec").empty();
        } 
        
    });
 
</script>


<script type='text/javascript'>
    var next_click = document.querySelectorAll(".next-button");
    var previous_click = document.querySelectorAll(".previous-button");
    var submit_click = document.querySelector(".submit-button");
    var mainform = document.querySelectorAll(".main");
    var formnumber = 0;

    next_click.forEach(function (nxt_btn) {
        nxt_btn.addEventListener('click', function () {
            if (!validateform()) {
                return false;
            }
            formnumber++;
            updateform();
            progress_forward();
        });
    });

    previous_click.forEach(function (back_btn) {
        back_btn.addEventListener('click', function () {

            formnumber--;
            updateform();
            progress_backward();
        });
    });

    var user_name = document.querySelector("#username");
    var shown_name = document.querySelector(".shown-name")

    submit_click.addEventListener('click', function () {
        if (!validateform()) {
            return false;
        }
        formnumber++;
        updateform();
        shown_name.innerHTML = user_name.value;
        progress_bar.classList.add('d-none-page');
    });


    function updateform() {
        mainform.forEach(function (mainform_number) {
            mainform_number.classList.remove('active1');
        });
        mainform[formnumber].classList.add('active1');
    }

    function validateform() {
        validate = true;
        var validate_inputs = document.querySelectorAll(".main.active1 input");
        validate_inputs.forEach(function (valids) {
            valids.classList.remove('warning');
            if (valids.hasAttribute('require')) {
                if (valids.value.length == 0) {
                    validate = false;
                    valids.classList.add('warning');
                }
            }
        });
        return validate;
    }

    var progress = document.querySelectorAll(".progress-bar li");

    function progress_forward() {


        progresbar_bar_backward = formnumber + 1;
        progress[formnumber].classList.add('active1');
    }
    function progress_backward() {
        var progresbar_bar_backward = formnumber + 1;
        progress[progresbar_bar_backward].classList.remove('active1');
    }

    var progress_bar = document.querySelector(".progress-bar");




    var dob_inputs = document.querySelectorAll(".dob input");
    function Nextitem(values, nextInput) {

        if (values.value.length == values.getAttribute('maxlength')) {

            dob_inputs[nextInput].focus();
        }


    }
</script>

<script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function (e) {
        e.preventDefault();
    });
</script>