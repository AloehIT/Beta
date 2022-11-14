<form action="{{ route('update.rental') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="tab-pane fade show mb-3">
        <div class="card">
            <div class="card-body row mx-1">
                <input type="hidden" name="tipe_produk" value="rental">
                <input type="hidden" name="kode_produk" id="kode">
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
                                    placeholder="Nama Brand" id="brand"  >
                            </div>

                            <!------------------------------------Kategori Utama Produk------------------------------------------->
                            <div class="col-md-12 mb-1">
                                <label class="form-label text-dark">Kategori</label>
                                <select id="upkategori" class="form-control text-capitalize sendkategori">
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
                                    <select id="upsub1" class="form-control text-capitalize sendsub1"> 
                                        <option>-- Pilih Kategori --</option>
                                    </select>
                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">SUB1: <span id="beforesub1"></span></p>
                                    <input type="hidden" class="sub1" name="sub1" id="sub1">
                                </div>
                    
                                <div class="col-md-6 mb-1">
                                    <label for="sub2" class="form-label text-dark">Sub-kategori2</label>
                                    <select id="upsub2" class="form-control text-capitalize sendsub2">
                                        <option selected disabled>-- Pilih Kategori --</option>
                                    </select>
                                    
                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">SUB2: <span id="beforesub2"></span></p>
                                    <input type="hidden" class="sub2" name="sub2" id="sub2">
                                </div>
                            </div>
                            <!------------------------------------Kategori Utama Produk------------------------------------------->

                            <!------------------------------------Alamat Produk Start------------------------------------------->
                            <div class="mb-1 col-md-12">
                                <label class="form-label text-dark">Negara</label>
                                <select id="upnegara" class="form-control text-capitalize sendnation">
                                    <option selected>Pilih Negara</option>
                                    @foreach($nation as $negara)
                                    <option value="{{ $negara->nation }}">{{ $negara->nation }}
                                    </option>
                                    @endforeach
                                </select>

                                <p style="font-size: 11px;" class="mb-0 text-capitalize">Negara: <span id="beforenation"></span></p>
                                <input type="hidden" class="nation" name="countries" id="nation">
                            </div>

                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label text-dark">Wilayah Rentcar</label>
                                    <select id="upwilayah" class="form-control text-capitalize"
                                         >
                                        <option selected>Wilayah Rentcar</option>
                                    </select>
                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">Wilayah: <span id="beforedistrict"></span></p>
                                    <input type="hidden" class="district" name="district" id="district">
                                </div>

                                <div class="mb-1 col-md-6">
                                    <label class="form-label text-dark">Daerah Rentcar</label>
                                    <select id="updaerah" class="form-control text-capitalize"
                                         >
                                        <option selected>Wilayah Rentcar</option>
                                    </select>
                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">Daerah: <span id="beforesubdistrict"></span></p>
                                    <input type="hidden" class="subdistrict" name="subdistrict" id="subdistrict">
                                </div>
                                <label class="text-info mb-0" style="font-size: 12px;">!Daerah dan wilayah sesuai dengan opsi wilayah</label>
                            </div>
                            <!------------------------------------Alamat Produk END------------------------------------------->
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="mb-1">
                                <label class="form-label text-dark">Lokasi</label>
                                <input id="upalamat" type="hidden" name="alamat" class="lokasi">
                                <trix-editor input="upalamat" class="lokasi"></trix-editor>
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
                        <select class="form-control text-capitalize" name="tipe_kendaraan" id="tipe"  >
                            <option value="" selected disabled>-- Tipe Kendaraan --</option>
                            @foreach($tipe_kendaraan as $tipes)
                                <option value="{{ $tipes->tipe }}">{{ $tipes->tipe }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="mb-2">
                        <label class="form-label text-dark">Rating Penilaian Kendaraan</label>
                        <select class="form-control" name="ranting" id="rating"  >
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
                    <label for="keterangan" class="form-label"
                        style="font-size: 18px;">Keterangan (ID)</label>
                    <input id="upketerangan" type="hidden" name="keterangan" class="keterangan">
                    <trix-editor input="upketerangan" class="keterangan"></trix-editor>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label"
                        style="font-size: 18px;">Description (EN)</label>
                    <input id="updescreption" type="hidden" name="description" class="desc">
                    <trix-editor input="updescreption" class="desc"></trix-editor>
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
    //send wilayah
    $('.sendnation').on('change', function(){
        const nation = $('.sendnation').val();
        $('.nation').val(nation);
    });

    $('.senddistrict').on('change', function(){
        const district = $('.senddistrict').val();
        $('.district').val(district);
    });

    $('.sendsubdistrict').on('change', function(){
        const subdistrict = $('.sendsubdistrict').val();
        $('.subdistrict').val(subdistrict);
    });


    $('#upnegara').change(function(){
        var district = $(this).val();    
        if(district){
            $.ajax({
                type:"GET",
                url: '/getNegara/'+district,
                dataType: 'JSON',
                success:function(data){        
                    if(data){                        
                        $.each(data,function(key, district){
                            $("#upwilayah").append('<option value="'+district.district+'">'+district.district+'</option>');
                        });
                    }else{
                        $("#upwilayah").empty();
                        $("#upwilayah").append('<option>Wilayah Destinasi</option>');
                    }
                }
            });
        }else{
            $("#upwilayah").empty();
            $("#upwilayah").append('<option>Wilayah Destinasi</option>');
        } 
        
    });


    $('#upwilayah').change(function(){
        var subdistrict = $(this).val();    
        if(subdistrict){
            $.ajax({
                type:"GET",
                url: '/getWilayah/'+subdistrict,
                dataType: 'JSON',
                success:function(data){        
                    if(data){                        
                        $.each(data,function(key, subdistrict){
                            $("#updaerah").append('<option value="'+subdistrict.subdistrict+'">'+subdistrict.subdistrict+'</option>');
                        });
                    }else{
                        $("#updaerah").empty();
                        $("#updaerah").append('<option>Daerah Hotel</option>');
                    }
                }
            });
        }else{
            $("#updaerah").empty();
            $("#updaerah").append('<option>Daerah Hotel</option>');
        } 
        
    });
 




    $(document).on("click", ".passrental", function () {
     var kode = $(this).data('kode');
     
     //img
     var logo = $(this).data('logo');
     var img1 = $(this).data('img1');
     var img2 = $(this).data('img2');
     var img3 = $(this).data('img3');
     var img4 = $(this).data('img4');
     var img5 = $(this).data('img5');
     //img

     var brand = $(this).data('brand');
     var tipe = $(this).data('tipe');
     var alamat = $(this).data('alamat');

     var kategori = $(this).data('kategori');
     var idkat = $(this).data('idkat');
     var subkategori1 = $(this).data('subkategori1');
     var subkategori2 = $(this).data('subkategori2');
     var nilai = $(this).data('nilai');
     var rating = $(this).data('rating');
     var harga = $(this).data('harga');
     var promo = $(this).data('promo');
     var durasi = $(this).data('durasi');
     var keterangan = $(this).data('keterangan');
     var desc = $(this).data('desc');

     var nation = $(this).data('nation');
     var district = $(this).data('district');
     var subdistrict = $(this).data('subdistrict');



     $(".modal-body #kode").val( kode );


     $(".modal-body #logoval").val( logo );
     $(".modal-body .view-logo").attr("src", "../library/logoperusahaan/"+logo);


     //produk
     $(".modal-body #gbr").val( img1 );
     $(".modal-body .img1").attr("src", "../library/produk/"+img1);

     $(".modal-body #gbr2").val( img2 );
     $(".modal-body .img2").attr("src", "../library/produk/"+img2);

     $(".modal-body #gbr3").val( img3 );
     $(".modal-body .img3").attr("src", "../library/produk/"+img3);

     $(".modal-body #gbr4").val( img4 );
     $(".modal-body .img4").attr("src", "../library/produk/"+img4);

     $(".modal-body #gbr5").val( img5 );
     $(".modal-body .img5").attr("src", "../library/produk/"+img5);
     //img


     $(".modal-body #brand").val( brand );

     $(".modal-body #kategori").val( idkat );
     $(".modal-body #sub1").val( subkategori1 );
     $(".modal-body #sub2").val( subkategori2 );

     $(".modal-body #beforekategori").text( kategori );
     $(".modal-body #beforesub1").text( subkategori1 );
     $(".modal-body #beforesub2").text( subkategori2 );

     $(".modal-body .lokasi").val( alamat );
     $(".modal-body #nilai").val( nilai );

     $(".modal-body #rating").val( rating );
     $(".modal-body #hari").val( durasi );
     $(".modal-body #harga").val( harga );
     $(".modal-body #promo").val( promo );
     $(".modal-body .keterangan").val( keterangan );
     $(".modal-body .desc").val( desc );
     $(".modal-body #tipe").val( tipe );

     $(".modal-body #nation").val( nation );
     $(".modal-body #district").val( district );
     $(".modal-body #subdistrict").val( subdistrict );
     
     $(".modal-body #beforenation").text( nation );
     $(".modal-body #beforedistrict").text( district );
     $(".modal-body #beforesubdistrict").text( subdistrict );
    });
</script>

