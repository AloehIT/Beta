<div class="tab-pane fade show main active1">
    <div class="card">
        <div class="card-body row mx-1">
            <input type="hidden" name="kode_paket" value="PKT{{ $kode }}">

            <div class="col-md-12 mb-2">
                <h5 class="modal-title mb-2" id="staticBackdropLabel">Informasi Umum</h5>
                <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
            </div>


            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mt-1">
                        @include('admin.imgupload.insertpaket')
                    </div>

                    <div class="col-md-6 mt-3">

                        <div class=" mb-1 col-md-12">
                            <label class="form-label text-dark">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_paket"
                                placeholder="Nama Brand" autocomplete="off" required>
                        </div>

                        <!------------------------------------Kategori Utama Produk------------------------------------------->
                        <div class="col-md-12 mb-1">
                            <label class="form-label text-dark">Kategori</label>
                            <select id="inkategori" class="form-control" name="kategori" required>
                                <option selected>-- Pilih Kategori --</option>
                                @foreach($kategori as $kat)
                                @if($kat->tipe == "Travel")
                                <option value="{{ $kat->id_kategori }}">{{ $kat->nama_kategori }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label class="form-label text-dark">Sub-kategori1</label>
                                <select id="insub1" class="form-control" name="sub1" required>
                                    <option>-- Pilih Kategori --</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-1">
                                <label for="sub2" class="form-label text-dark">Sub-kategori2</label>
                                <select id="insub2" class="form-control" name="sub2" required>
                                    <option selected disabled>-- Pilih Kategori --</option>
                                </select>
                            </div>
                        </div>
                        <!------------------------------------Kategori Utama Produk------------------------------------------->

                        <!------------------------------------Alamat Produk Start------------------------------------------->
                        <div class="mb-1 col-md-12">
                            <label class="form-label text-dark">Wilayah</label>
                            <select id="inprov" class="form-control text-capitalize" name="wilayah"
                                required>
                                <option selected>Pilih Wilayah</option>
                                @foreach($prov as $prov)
                                <option value="{{ $prov->provinsi }}">Wilayah {{ $prov->provinsi }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-1 col-md-12">
                            <label class="form-label text-dark">Destinasi</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background: #D6D6D6;"
                                    id="basic-addon1"><i class="bi bi-geo-alt-fill"></i></span>
                                <input type="text" class="form-control px-3" name="destinasi"
                                    placeholder="Tujuan destinasi" required autocomplete="off">
                            </div>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label text-dark">Penilaian/Rating</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background: #D6D6D6;"
                                    id="basic-addon1"><i class="bi bi-star-fill"></i>
                                </span>
                                <select class="form-control px-3" name="ranting" required>
                                    <option selected disabled>-- Pilih Rating --</option>
                                    <option value="5">Bintang 5</option>
                                    <option value="4">Bintang 4</option>
                                    <option value="3">Bintang 3</option>
                                    <option value="2">Bintang 2</option>
                                    <option value="1">Bintang 1</option>
                                </select>
                            </div>
                        </div>
                        <!------------------------------------Alamat Produk END------------------------------------------->

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
                <div class="mb-2">
                    <h5 class="modal-title" id="staticBackdropLabel">Pilih Akomodasi</h5>
                    <p class="text-secondary mb-0" style="font-size: 12px;">Pilih hotel untuk
                        informasi tempat beristirahat paket travel</p>
                </div>
                <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
            </div>

            <div class="row">
                <label class="form-label text-dark">Akomodasi Hotel</label>
                <div class="col-md-7 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><i class="fa-solid fa-hotel text-dark"></i></span>
                        <select id="penginapan" name="id_hotel"
                            class="px-3 form-control text-capitalize cekharga" required>
                            <option selected>Pilih Penginapan
                            <option>
                        </select>
                    </div>
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Kosongkan
                        jika tidak dipilih</label>
                </div>

                <div class="col-md-5 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><span class="text-dark">Rp.</span></span>
                        <input type="number" class="form-control px-3" id="hargap"
                            placeholder="Harga" autocomplete="off" required>
                    </div>
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Ubah harga
                        jika tidak cocok</label>
                </div>
            </div>


            <div class="row">
                <label class="form-label text-dark">Akomodasi Trannsportasi</label>
                <div class="col-md-7 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><i class="fa-solid fa-plane text-dark"></i></span>
                        <select id="transportasi" name="id_transport"
                            class="px-3 form-control text-capitalize cekharga1" required>
                            <option selected>Pilih Transportasi
                            <option>
                        </select>
                    </div>
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Kosongkan
                        jika tidak dipilih</label>
                </div>

                <div class="col-md-5 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><span class="text-dark">Rp.</span></span>
                        <input type="number" class="form-control px-3" id="hargat"
                            placeholder="Harga" autocomplete="off" required>
                    </div>
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Ubah harga
                        jika tidak cocok</label>
                </div>
            </div>


            <div class="row mb-3">
                <label class="form-label text-dark">Akomodasi Kendaraan Tambahan</label>
                <div class="col-md-7 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><i class="fa-solid fa-car text-dark"></i></span>
                        <select id="kendaraan" name="id_rental"
                            class="px-3 form-control text-capitalize cekharga2" required>
                            <option selected>Pilih Kendaraan
                            <option>
                        </select>
                    </div>
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Kosongkan
                        jika tidak dipilih</label>
                </div>

                <div class="col-md-5 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><span class="text-dark">Rp.</span></span>
                        <input type="number" class="form-control px-3" id="hargak"
                            placeholder="Harga" autocomplete="off" required>
                    </div>
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Ubah harga
                        jika tidak cocok</label>
                </div>
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
            <div class="col-md-12 mb-2">
                <h5 class="modal-title mb-2" id="staticBackdropLabel">Keterangan Produk</h5>
                <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
            </div>

            <div class="col-md-12 mb-1">
                <label class="form-label text-dark">Keterangan singkat (ID)</label>
                <input id="keterangan" type="hidden" name="keterangan">
                <trix-editor input="keterangan"></trix-editor>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label text-dark">
                    Short description (EN)</label>
                <input id="desc" type="hidden" name="description">
                <trix-editor input="desc"></trix-editor>
            </div>


            <div class="col-md-12 text-end">
                <button class="btn btn-primary previous-button"><i
                        class="fa fa-long-arrow-left"></i> Previous</button>
                <button class="btn btn-success next-button">Next <i
                        class="fa fa-long-arrow-right"></i></button>
            </div>
        </div>
        <!--img upload--->
    </div>
</div>

<div class="tab-pane fade show main">
    <div class="card">
        <div class="card-body row mx-1">
            <div class="col-md-12 mb-2">
                <h5 class="modal-title mb-2" id="staticBackdropLabel">Deskripsi Acara</h5>
                <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
            </div>

            <div class="mb-1 col-md-12">
                <label class="form-label text-dark">Lama tour/long tour</label>
                <div class="input-group">
                    <span class="input-group-text" style="background: #D6D6D6;"
                        id="basic-addon1"><i class="bi bi-calendar"></i>
                    </span>
                    <input type="number" class="form-control px-3" name="hari"
                        placeholder="Hari/Day" required autocomplete="off">
                </div>
            </div>


            <div class="col-md-12 mb-1">
                <label class="form-label text-dark">Runtatan Acara (ID)</label>
                <input id="acara" type="hidden" name="acara">
                <trix-editor input="acara"></trix-editor>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label text-dark">Event (EN)</label>
                <input id="program" type="hidden" name="program">
                <trix-editor input="program"></trix-editor>
            </div>

            <div class="col-md-12 text-end">
                <button class="btn btn-primary previous-button"><i
                        class="fa fa-long-arrow-left"></i> Previous</button>
                <button class="btn btn-success next-button">Next <i
                        class="fa fa-long-arrow-right"></i></button>
            </div>
        </div>
        <!--img upload--->
    </div>
</div>

<div class="tab-pane fade show main">
    <div class="card">
        <div class="card-body row mx-1">
            <div class="col-md-12 mb-2">
                <div class="mb-2">
                    <h5 class="modal-title" id="staticBackdropLabel">Biaya Paket Travel</h5>
                    <p class="text-secondary mb-0" style="font-size: 12px;">Tentukan total biaya untuk perjalanan pelanggan</p>
                </div>
                <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
            </div>

            <div class="col-md-6 mt-2 mb-1">
                <div class="input-group">
                    <span class="input-group-text" style="background: #D6D6D6;"
                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                    <input type="number" class="form-control px-3" name="total_harga"
                        placeholder="Total Harga" autocomplete="off" required>
                </div>
                <label class="text-info" style="font-size: 12px; font-weight: 500;">! Kosongkan harga
                    jika tidak disi</label>
            </div>

            <div class="col-md-6 mt-2 mb-1">
                <div class="input-group">
                    <span class="input-group-text" style="background: #D6D6D6;"
                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                    <input type="number" class="form-control px-3" name="harga_promo"
                        placeholder="Harga Promo" autocomplete="off">
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
        <!--img upload--->
    </div>
</div>


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
                        $("#transportasi").empty();
                        $("#penginapan").empty();
                        $("#penginapan").append('<option>Pilih Penginapan</option>');
                        $("#transportasi").append('<option>Pilih Transportasi</option>');
                        
                        $.each(data,function(key, kab){
                            $("#inkab").append('<option value="'+kab.kab+'">Daerah '+kab.kab+'</option>');
                        });
                    }else{
                        $("#transportasi").empty();
                        $("#penginapan").empty();
                        $("#penginapan").append('<option>Pilih Penginapan</option>');
                        $("#transportasi").append('<option>Pilih Transportasi</option>');
                    }
                }
            });
        }else{
            $("#transportasi").empty();
            $("#penginapan").empty();
            $("#penginapan").append('<option>Pilih Penginapan</option>');
            $("#transportasi").append('<option>Pilih Transportasi</option>');
        } 
        
    });
    //produk
    $('#inprov').change(function(){
        var hotel = $(this).val();    
        if(hotel){
            $.ajax({
                type:"GET",
                url: '/getHotel/'+hotel,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#penginapan").empty();
                        $("#penginapan").append('<option>Pilih Penginapan</option>'); 
                       
                        $.each(data,function(key, hotel){
                            $("#penginapan").append('<option value="'+hotel.kode_produk+'">'+hotel.nama_brand+'</option>');
                        });
                    }else{
                        $("#penginapan").empty();    
                    }
                }
            });
        }else{
            $("#penginapan").empty();
        } 
        
    });
    $('#inprov').change(function(){
        var transport = $(this).val();    
        if(transport){
            $.ajax({
                type:"GET",
                url: '/getTransport/'+transport,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#transportasi").empty();
                        $("#transportasi").append('<option>Pilih Transportasi</option>');
                        $.each(data,function(key, transport){
                            $("#transportasi").append('<option value="'+transport.kode_produk+'">'+transport.nama_brand+'</option>');
                        });
                    }else{
                        $("#transportasi").empty();
                    }
                }
            });
        }else{
            $("#transportasi").empty();
        } 
    });
    $('#inprov').change(function(){
        var kendaraan = $(this).val();    
        if(kendaraan){
            $.ajax({
                type:"GET",
                url: '/getKendaraan/'+kendaraan,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#kendaraan").empty();
                        $("#kendaraan").append('<option>Pilih Kendaraan</option>');
                        $.each(data,function(key, kendaraan){
                            $("#kendaraan").append('<option value="'+kendaraan.kode_produk+'">'+kendaraan.nama_brand+'</option>');
                        });
                    }else{
                        $("#kendaraan").empty();
                    }
                }
            });
        }else{
            $("#kendaraan").empty();
        } 
        
    });
    //harga
    $('.cekharga').change(function(){
        var produk = $(this).val();    
        if(produk){
            $.ajax({
                type:"GET",
                url: '/getProduk/'+produk,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#hargap").val();
                        $.each(data,function(key, produk){
                            $("#hargap").val(produk.harga)
                        });
                    }else{
                        $("#hargap").val();
                    }
                }
            });
        }else{
            $("#hargap").val();
        } 
        
    });
    $('.cekharga1').change(function(){
        var produk = $(this).val();    
        if(produk){
            $.ajax({
                type:"GET",
                url: '/getProduk/'+produk,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#hargat").empty();
                        $.each(data,function(key, produk){
                            $("#hargat").val(produk.harga)
                        });
                    }else{
                        $("#hargat").empty();
                    }
                }
            });
        }else{
            $("#hargat").empty();
        } 
        
    });
    $('.cekharga2').change(function(){
        var rental = $(this).val();    
        if(rental){
            $.ajax({
                type:"GET",
                url: '/getRental/'+rental,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#hargak").empty();
                        $.each(data,function(key, rental){
                            $("#hargak").val(rental.harga)
                        });
                    }else{
                        $("#hargak").empty();
                    }
                }
            });
        }else{
            $("#hargak").empty();
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

