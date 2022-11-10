<form action="{{ route('update.rental') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="tab-pane fade show mb-3">
        <div class="card">
            <div class="card-body row mx-1">
                <input type="hidden" name="tipe_produk" value="rental">
                <input type="hidden" name="kode_produk" id="kodeh">
                <input type="hidden" name="logoval" id="logoval">

                <div class="col-md-12 mb-2">
                    <h5 class="modal-title mb-2" id="staticBackdropLabel">Informasi Umum</h5>
                    <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            @include('admin.imgupload.updaterental')                                
                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark">Logo Perusahaan</label>
                                <p class="upload_logo m-0" style="border: 4px solid #EEEEEE; width: 120px; height: 110px;">
                                  <label class="img-upload_logo m-0 p-0">
                                    <img src="{{URL::to('assets/admin.assets/icon/addmobil.png')}}" alt="" class="view-logo foto-upload_logo img-fluid mt-0"
                                      id="uploadlogo1">
                            
                                    <label class="btn-input_logo">
                                      <input type="file" name="logo" onchange="uploadLogo1(event)">
                                      <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
                                    </label>
                                  </label>
                                </p>
                            </div>

                            <div class=" mb-1 col-md-12">
                                <label class="form-label text-dark">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_brand"
                                    placeholder="Nama Brand" id="brandh" required>
                            </div>

                            <!------------------------------------Kategori Utama Produk------------------------------------------->
                            <div class="col-md-12 mb-1">
                                <label class="form-label text-dark">Kategori</label>
                                <select id="upkategori" class="form-control text-capitalize sendkategori" required>
                                    <option selected>-- Pilih Kategori --</option>
                                    @foreach($kategori as $kat)
                                        @if($kat->tipe == "Rental")
                                            <option value="{{ $kat->id_kategori }}">{{ $kat->nama_kategori }}</option>
                                        @endif
                                    @endforeach
                                </select>
                               
                                <p style="font-size: 11px;" class="mb-0 text-capitalize">Kategori: <span id="beforekategori"></span></p>
                                <input type="hidden" class="kategori" name="kategori" id="kategori">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <label class="form-label text-dark">Sub-kategori1</label>
                                    <select id="upsub1" class="form-control text-capitalize sendsub1" name="sub1" required> 
                                        <option>-- Pilih Kategori --</option>
                                    </select>
                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">SUB1: <span id="beforesub1"></span></p>
                                    <input type="hidden" class="sub1" name="sub1" id="sub1">
                                </div>
                    
                                <div class="col-md-6 mb-1">
                                    <label for="sub2" class="form-label text-dark">Sub-kategori2</label>
                                    <select id="upsub2" class="form-control text-capitalize sendsub2" name="sub2" required>
                                        <option selected disabled>-- Pilih Kategori --</option>
                                    </select>
                                    
                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">SUB2: <span id="beforesub2"></span></p>
                                    <input type="hidden" class="sub2" name="sub2" id="sub2">
                                </div>
                            </div>
                            <!------------------------------------Kategori Utama Produk------------------------------------------->

                            <!------------------------------------Alamat Produk Start------------------------------------------->
                            <div class="mb-1 col-md-12">
                                <label class="form-label text-dark">Provinsi</label>
                                <select id="upprov" class="form-control text-capitalize sendprov" name="prov" required>
                                    <option selected>-- Pilih Provinsi --</option>
                                    @foreach($prov as $prov)
                                        <option value="{{ $prov->provinsi }}">Provinsi {{ $prov->provinsi }}</option>
                                    @endforeach
                                </select>

                                <p style="font-size: 11px;" class="mb-0 text-capitalize">Prov: <span id="beforeprov"></span></p>
                                <input type="hidden" class="prov" name="prov" id="prov">
                            </div>


                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label text-dark">Kabupaten</label>
                                    <select id="upkab" class="form-control text-capitalize sendkab" name="kab" required>
                                        <option selected disabled>-- Pilih Kabupaten --</option>
                                    </select>

                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">Kab: <span id="beforekab"></span></p>
                                    <input type="hidden" class="kab" name="kab" id="kab">
                                </div>

                                <div class="mb-1 col-md-6">
                                    <label class="form-label text-dark">Kecamatan</label>
                                    <select id="upkec" class="form-control text-capitalize sendkec" name="kec" required>
                                        <option selected disabled>-- Pilih Kecamatan --</option>
                                    </select>

                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">Kec: <span id="beforekec"></span></p>
                                    <input type="hidden" class="kec" name="kec" id="kec">
                                </div>
                            </div>
                            <!------------------------------------Alamat Produk END------------------------------------------->
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="mb-1">
                                <label class="form-label text-dark">Lokasi</label>
                                <input id="alamat" type="hidden" name="alamat" class="lokasi">
                                <trix-editor input="alamat" class="lokasi"></trix-editor>
                            </div>
                        </div>

                    </div>        
                </div>
            </div>
        </div>
    </div>


    <div class="tab-pane fade show mb-3">
        <div class="card">
            <div class="card-body row mx-1">
                <div class="col-md-12 mb-2">
                    <h5 class="modal-title mb-2" id="staticBackdropLabel">Keterangan Produk</h5>
                    <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
                </div>
                
                <div class="row mt-1">
                    <div class="mb-2">
                        <label class="form-label text-dark">Tipe Kendaraan</label>
                        <select class="form-control text-capitalize" name="tipe_kendaraan" id="tipe" required>
                            <option value="" selected disabled>-- Tipe Kendaraan --</option>
                            @foreach($tipe_kendaraan as $tipes)
                                <option value="{{ $tipes->tipe }}">{{ $tipes->tipe }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="mb-2">
                        <label class="form-label text-dark">Rating Penilaian Kendaraan</label>
                        <select class="form-control" name="ranting" id="rating" required>
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
                                name="nilai" id="nilai">
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background: #D6D6D6;"
                                id="basic-addon1"><i class="bi bi-calendar-day"></i></span>
                            <input type="text" class="form-control px-3" placeholder="Hari Peminjaman"
                                name="durasi_waktu" id="hari">
                        </div>
                    </div>
        
                    <label class="form-label" style="font-size: 18px;">Harga Sewa & Promo</label>
        
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background: #D6D6D6;"
                                id="basic-addon1"><span class="text-dark">Rp.</span></span>
                            <input type="number" class="form-control px-3" placeholder="Harga"
                                name="harga" id="harga">
                        </div>
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <div class="input-group mb-0">
                            <span class="input-group-text" style="background: #D6D6D6;"
                                id="basic-addon1"><span class="text-dark">Rp.</span></span>
                            <input type="number" class="form-control px-3" placeholder="Harga Promo"
                                name="harga_promo" id="promo">
                        </div>
                        <p style="color: #1592E6; font-size: 11px;" class="mb-0">! Kosongkan harga promo jika tidak ada</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tab-pane fade show mb-3">
        <div class="card">
            <div class="card-body row mx-1">
                <div class="mb-2">
                    <h5 class="modal-title" id="staticBackdropLabel">Informasi Fasilitas</h5>
                    <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
                </div>
                
                <div class="col-md-12 mb-1">
                    <label class="form-label text-dark">Keterangan singkat (ID)</label>
                    <input id="ket" type="hidden" name="keterangan" class="keterangan">
                    <trix-editor input="ket" class="keterangan"></trix-editor>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label text-dark">
                        Short description (EN)</label>
                    <input id="desc" type="hidden" name="description" class="desc">
                    <trix-editor input="desc" class="desc"></trix-editor>
                </div>


                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-success col-12">
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
    //send kategori
    $('.sendkategori').on('change', function(){
        const kategori = $('.sendkategori').val();
        $('.kategori').val(kategori);
    });

    $('.sendsub1').on('change', function(){
        const subkategori = $('.sendsub1').val();
        $('.sub1').val(subkategori);
    });

    $('.sendsub2').on('change', function(){
        const subkategori = $('.sendsub2').val();
        $('.sub2').val(subkategori);
    });

    //send wilayah
    $('.sendprov').on('change', function(){
        const provinsi = $('.sendprov').val();
        $('.prov').val(provinsi);
    });

    $('.sendkab').on('change', function(){
        const subkategori = $('.sendkab').val();
        $('.kab').val(subkategori);
    });

    $('.sendkec').on('change', function(){
        const subkategori = $('.sendkec').val();
        $('.kec').val(subkategori);
    });

    //Kategori
    $('#upkategori').change(function(){
        var sub = $(this).val();    

        if(sub){
            $.ajax({
                type:"GET",
                url: '/getData1/'+sub,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#upsub1").empty();
                        $("#upsub1").append('<option>-- Pilih Kategori --</option>');

                        $.each(data,function(key, subkategori1){
                            $("#upsub1").append('<option value="'+subkategori1.subkategori+'">'+subkategori1.subkategori+'</option>');
                        });
                    }else{
                        $("#upsub1").empty();
                    }
                }
            });
        }else{
            $("#upsub1").empty();
        } 
        
        
        if(sub){
            $.ajax({
                type:"GET",
                url: '/getData2/'+sub,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#upsub2").empty();
                        $("#upsub2").append('<option>-- Pilih Kategori --</option>');

                        $.each(data,function(key, subkategori2){
                            $("#upsub2").append('<option value="'+subkategori2.subkategori+'">'+subkategori2.subkategori+'</option>');
                        });
                    }else{
                        $("#upsub2").empty();
                    }
                }
            });
        }else{
            $("#upsub2").empty();
        } 
    });


   //Wilayah
    $('#upprov').change(function(){
        var upkab = $(this).val();    

        if(upkab){
            $.ajax({
                type:"GET",
                url: '/getProv/'+upkab,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#upkab").empty();
                        $("#upkab").append('<option>-- Pilih Kabupaten --</option>');
                        $("#upkec").empty();
                        $("#upkec").append('<option>-- Pilih Kecamatan --</option>');

                        $.each(data,function(key, kab){
                            $("#upkab").append('<option value="'+kab.kab+'">Kabupaten '+kab.kab+'</option>');
                        });
                    }else{
                        $("#upkab").empty();
                        $("#upkec").empty();
                    }
                }
            });
        }else{
            $("#upkab").empty();
            $("#upkec").empty();
        } 
        
    });


    $('#upkab').change(function(){
        var kec = $(this).val();    

        if(kec){
            $.ajax({
                type:"GET",
                url: '/getKab/'+kec,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#upkec").empty();
                        $("#upkec").append('<option>-- Pilih Kecamatan --</option>');

                        $.each(data,function(key, kec){
                            $("#upkec").append('<option value="'+kec.kec+'">Kecamatan '+kec.kec+'</option>');
                        });
                    }else{
                        $("#upkec").empty();
                    }
                }
            });
        }else{
            $("#upkec").empty();
        } 
        
    });
 


    $(document).on("click", ".passrental", function () {
     var kodeh = $(this).data('kodeh');
     
     //img
     var logoh = $(this).data('logoh');
     var img1h = $(this).data('img1h');
     var img2h = $(this).data('img2h');
     var img3h = $(this).data('img3h');
     var img4h = $(this).data('img4h');
     var img5h = $(this).data('img5h');
     //img

     var brandh = $(this).data('brandh');
     var tipe = $(this).data('tipe');
     var alamath = $(this).data('alamath');
     var provh = $(this).data('provh');
     var kabh = $(this).data('kabh');
     var kech = $(this).data('kech');

     var kategorih = $(this).data('kategorih');
     var idkat = $(this).data('idkat');
     var subkategori1h = $(this).data('subkategori1h');
     var subkategori2h = $(this).data('subkategori2h');
     var nilaih = $(this).data('nilaih');
     var ratingh = $(this).data('ratingh');
     var hargah = $(this).data('hargah');
     var promoh = $(this).data('promoh');
     var durasih = $(this).data('durasih');
     var keteranganh = $(this).data('keteranganh');
     var desc = $(this).data('desc');





     $(".modal-body #kodeh").val( kodeh );


     $(".modal-body #logoval").val( logoh );
     $(".modal-body .view-logo").attr("src", "../library/logoperusahaan/"+logoh);


     //produk
     $(".modal-body #gbr").val( img1h );
     $(".modal-body .img1").attr("src", "../library/produk/"+img1h);

     $(".modal-body #gbr2").val( img2h );
     $(".modal-body .img2").attr("src", "../library/produk/"+img2h);

     $(".modal-body #gbr3").val( img3h );
     $(".modal-body .img3").attr("src", "../library/produk/"+img3h);

     $(".modal-body #gbr4").val( img4h );
     $(".modal-body .img4").attr("src", "../library/produk/"+img4h);

     $(".modal-body #gbr5").val( img5h );
     $(".modal-body .img5").attr("src", "../library/produk/"+img5h);
     //img


     $(".modal-body #brandh").val( brandh );

     $(".modal-body #kategori").val( idkat );
     $(".modal-body #sub1").val( subkategori1h );
     $(".modal-body #sub2").val( subkategori2h );

     $(".modal-body #beforekategori").text( kategorih );
     $(".modal-body #beforesub1").text( subkategori1h );
     $(".modal-body #beforesub2").text( subkategori2h );

     $(".modal-body #prov").val( provh );
     $(".modal-body #kab").val( kabh );
     $(".modal-body #kec").val( kech );

     $(".modal-body #beforeprov").text( provh );
     $(".modal-body #beforekab").text( kabh );
     $(".modal-body #beforekec").text( kech );

     $(".modal-body .lokasi").val( alamath );
     $(".modal-body #nilai").val( nilaih );


     $(".modal-body #rating").val( ratingh );
     $(".modal-body #hari").val( durasih );
     $(".modal-body #harga").val( hargah );
     $(".modal-body #promo").val( promoh );
     $(".modal-body .keterangan").val( keteranganh );
     $(".modal-body .desc").val( desc );
     $(".modal-body #tipe").val( tipe );

    });
</script>

