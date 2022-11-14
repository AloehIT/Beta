<div class="modal fade" id="uphotel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">

                
                <div class="row mt-3 mb-3">
                    <div class="col-md-6">
                        <h4>Update Tiket Hotel</h4>
                    </div>

                    <div class="col-md-6 text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger" style="font-size: 25px"></i></button>
                    </div>    
                </div>
                
         
                <form action="{{ route('update.produk') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="tab-pane fade show">
                        <div class="card">
                            <!--img upload--->
                            <div class="card-body row mx-1">
                                <input type="hidden" name="tipe_produk" value="hotel">
                                <input type="hidden" name="kode_produk" id="kodeh">
                                <input type="hidden" name="logoval" id="logoval">
                
                                
                
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @include('admin.imgupload.updatehotel')     
                                        </div>
                
                                        
                
                
                                        <div class="col-md-6 mt-3">
                                            <div class="col-md-6">
                                                <label class="form-label text-dark">Logo Perusahaan</label>
                                                <p class="upload_logo m-0" style="border: 4px solid #EEEEEE; width: 120px; height: 110px;">
                                                  <label class="img-upload_logo m-0 p-0">
                                                    <img src="{{ URL::to('assets/admin.assets/icon/up.jpg') }}" alt="" class="view-logo foto-upload_logo img-fluid mt-0"
                                                      id="uploadlogo1">
                                            
                                                    <label class="btn-input_logo">
                                                      <input type="file" name="logo" onchange="uploadLogo1(event)" >
                                                      <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
                                                    </label>
                                                  </label>
                                                </p>
                                            </div>

                
                                            <div class=" mb-1 col-md-12">
                                                <label class="form-label text-dark">Nama Produk</label>
                                                <input type="text" id="brandh" class="form-control" name="nama_brand"
                                                    placeholder="Nama Brand" required>
                                            </div>
                

                                            <!------------------------------------Kategori Utama Produk------------------------------------------->
                                            <div class="col-md-12 mb-1">
                                                <label class="form-label text-dark">Kategori</label>
                                                <select id="upkategori1" class="form-control sendkategori" required>
                                                    <option selected>-- Pilih Kategori --</option>
                                                    @foreach($kategori as $kat)
                                                        @if($kat->tipe == "Hotel")
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
                                                    <select id="upsub11" class="form-control sendsub1" required> 
                                                        <option>-- Pilih Kategori --</option>
                                                    </select>
                                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">Sub1: <span id="beforesub1"></span></p>
                                                    <input type="hidden" class="sub1" name="sub1" id="sub1">
                                                </div>
                                    
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label text-dark">Sub-kategori2</label>
                                                    <select id="upsub21" class="form-control sendsub2" required>
                                                        <option selected disabled>-- Pilih Kategori --</option>
                                                    </select>
                                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">Sub2: <span id="beforesub2"></span></p>
                                                    <input type="hidden" class="sub2" name="sub2" id="sub2">
                                                </div>
                                            </div>
                                            <!------------------------------------Kategori Utama Produk------------------------------------------->
                

                                            <!------------------------------------Alamat Produk Start------------------------------------------->
                                            <div class="mb-1 col-md-12">
                                                <label class="form-label text-dark">Negara</label>
                                                <select id="upnegara" class="form-control text-capitalize sendnation"
                                                    required>
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
                                                    <label class="form-label text-dark">Wilayah Hotel</label>
                                                    <select id="upwilayah" class="form-control text-capitalize" name="district"
                                                        required>
                                                        <option selected>Wilayah Hotel</option>
                                                    </select>
                                                    <p style="font-size: 11px;" class="mb-0 text-capitalize">Wilayah: <span id="beforedistrict"></span></p>
                                                    <input type="hidden" class="district" name="district" id="district">
                                                </div>
                
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label text-dark">Daerah Hotel</label>
                                                    <select id="updaerah" class="form-control text-capitalize" name="subdistrict"
                                                        required>
                                                        <option selected>Wilayah Hotel</option>
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
                                                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3" placeholder="Lokasi.." required></textarea>
                                            </div>
                                        </div>
                
                                    </div>        
                                </div>
                
                            </div>
                            <!--img upload--->
                        </div>
                
                        <div class="row mt-3">
                            <label class="form-label" style="font-size: 18px;">Fasilitas Kamar</label>
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><i class="fa-solid fa-bed text-dark"></i></span>
                                    <input type="number" min="0" class="form-control px-3" placeholder="Jumlah tepat tidur"
                                        name="nilai" id="nilai">
                                </div>
                            </div>
                

                            <div class="form-check col-md-2 py-2">
                                <input class="form-check-input" type="checkbox" value="1" name="fasilitas1" id="fa1">
                                <label class="form-check-label">
                                    <i class="bi bi-wifi"></i> Free Wifi
                                </label>
                            </div>            
                

                            <div class="form-check col-md-2 py-2">
                                <input class="form-check-input" type="checkbox" value="1" name="fasilitas5" id="fa5">
                                <label class="form-check-label">
                                    <i class="fa-solid fa-tv"></i> TV
                                </label>
                            </div>   

                
                            <div class="form-check col-md-3 py-2">
                                <input class="form-check-input" type="checkbox" value="1" name="fasilitas6" id="fa6">
                                <label class="form-check-label">
                                    <img src="{{ URL::to('assets/admin.assets/icon/acicon.png') }}" class="img-fluid" width="20" alt=""> AC (Air Conditioner)
                                </label>
                            </div>            
                        </div>
                

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label" style="font-size: 18px;">Fasilitas & Kualitas</label>
                                <div class="row mx-2">
                                    <div class="form-check col-md-3">
                                        <input class="form-check-input" type="checkbox" value="1" name="fasilitas2" id="fa2">
                                        <label class="form-check-label">
                                            <i class="bi bi-cup-hot-fill"></i> Sarapan <span class="badge bg-secondary">Gratis</span>
                                        </label>
                                    </div>
                
                                    <div class="form-check col-md-3">
                                        <input class="form-check-input" type="checkbox" value="1" name="fasilitas3" id="fa3">
                                        <label class="form-check-label">
                                            <i class="fa-solid fa-person-swimming"></i> Kolam renang
                                        </label>
                                    </div>
                
                                    <div class="form-check col-md-3">
                                        <input class="form-check-input" type="checkbox" value="1" name="fasilitas4" id="fa4">
                                        <label class="form-check-label">
                                            <i class="fa-solid fa-umbrella-beach"></i> Di tepi pantai
                                        </label>
                                    </div>
                                </div>
                                <select class="form-control" name="ranting" required id="rating">
                                    <option selected disabled>-- Pilih Rating --</option>
                                    <option value="5">Bintang 5</option>
                                    <option value="4">Bintang 4</option>
                                    <option value="3">Bintang 3</option>
                                    <option value="2">Bintang 2</option>
                                    <option value="1">Bintang 1</option>
                                </select>
                            </div>
                
                            <div class="mt-3">
                                <label class="form-label" style="font-size: 18px;">Sewa & Biaya</label>
                            </div>
                
                            <div class="col-md-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><i class="bi bi-calendar-day"></i></span>
                                    <input type="number" min="0" value="0" class="form-control px-3" placeholder="Hari"
                                        name="durasi_waktu" required id="durasi">
                                </div>
                            </div>
                
                            <div class="col-md-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                                    <input type="text" class="form-control px-3" placeholder="Harga"
                                        name="harga" required id="harga">
                                </div>
                            </div>

                            <div class="col-md-5 mb-3">
                                <div class="input-group mb-0">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                                    <input type="text" class="form-control px-3" placeholder="Harga Promo"
                                        name="harga_promo" id="promo">
                                </div>
                                <p style="color: #1592E6; font-size: 11px;" class="mb-0">! Kosongkan harga promo jika tidak ada</p>
                            </div>    
                            
                
                            <div class="col-md-12 mb-1">
                                <label class="form-label text-dark">Keterangan singkat (ID)</label>
                                <input id="upkethotel" type="hidden" name="keterangan" class="keterangan">
                                <trix-editor input="upkethotel" class="keterangan"></trix-editor>
                            </div>
            
                            <div class="col-md-12 mb-3">
                                <label class="form-label text-dark">
                                    Short description (EN)</label>
                                <input id="updeschotel" type="hidden" name="description" class="desc">
                                <trix-editor input="updeschotel" class="desc"></trix-editor>
                            </div>
                        </div>
                
                
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-success col-12">
                                <i class="bi bi-check-circle-fill"></i> Simpan 
                            </button>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{URL::to('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>

<script type="text/javascript">
    //Kategori
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



    $('#upkategori1').change(function(){
        var upsub = $(this).val( );    

        if(upsub){
            $.ajax({
                type:"GET",
                url: '/getData1/'+upsub,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#upsub11").empty();
                        $("#upsub11").append('<option>-- Pilih Kategori --</option>');

                        $.each(data,function(key, subkategori1){
                            $("#upsub11").append('<option value="'+subkategori1.subkategori+'">'+subkategori1.subkategori+'</option>');
                        });
                    }else{
                        $("#upsub11").empty();
                    }
                }
            });
        }else{
            $("#upsub11").empty();
        } 
        
        
        if(upsub){
            $.ajax({
                type:"GET",
                url: '/getData2/'+upsub,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#upsub21").empty();
                        $("#upsub21").append('<option>-- Pilih Kategori --</option>');

                        $.each(data,function(key, subkategori2){
                            $("#upsub21").append('<option value="'+subkategori2.subkategori+'">'+subkategori2.subkategori+'</option>');
                        });
                    }else{
                        $("#upsub21").empty();
                    }
                }
            });
        }else{
            $("#upsub21").empty();
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
    
    



    $(document).on("click", ".passHotel", function () {
     var kodeh = $(this).data('kodeh');
     
     //img
     var logoh = $(this).data('logoh');
     var img1h = $(this).data('img1h');
     var img2h = $(this).data('img2h');
     var img3h = $(this).data('img3h');
     var img4h = $(this).data('img4h');
     var img5h = $(this).data('img5h');
     //img

     //kategori
     var kategori = $(this).data('kategori');
     var idkat = $(this).data('idkat');
     var subkategori1 = $(this).data('sub1');
     var subkategori2 = $(this).data('sub2');
     //kategori

     var brandh = $(this).data('brandh');
     var nilai = $(this).data('nilai');
     var alamat = $(this).data('alamat');

     //fasilitas
     var fa1 = $(this).data('fa1');
     var fa2 = $(this).data('fa2');
     var fa3 = $(this).data('fa3');
     var fa4 = $(this).data('fa4');
     var fa5 = $(this).data('fa5');
     var fa6 = $(this).data('fa6');
     //fasilitas


     var nilai = $(this).data('nilai');
     var rating = $(this).data('rating');
     var durasi = $(this).data('durasi');
     var harga = $(this).data('harga');
     var promo = $(this).data('promo');
     var keterangan = $(this).data('keterangan');
     var desc = $(this).data('desc');

     var nation = $(this).data('nation');
     var district = $(this).data('district');
     var subdistrict = $(this).data('subdistrict');


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
     $(".modal-body #alamat").val( alamat );
     $(".modal-body #nilai").val( nilai );
     $(".modal-body #rating").val( rating );
     $(".modal-body #durasi").val( durasi );
     $(".modal-body #harga").val( harga );
     $(".modal-body #promo").val( promo );
     $(".modal-body .keterangan").val( keterangan );
     $(".modal-body .desc").val( desc );



     //fasilitas
     $(".modal-body #fa1").prop('checked', fa1 );
     $(".modal-body #fa2").prop('checked', fa2 );
     $(".modal-body #fa3").prop('checked', fa3 );
     $(".modal-body #fa4").prop('checked', fa4 );
     $(".modal-body #fa5").prop('checked', fa5 );
     $(".modal-body #fa6").prop('checked', fa6 );
     //fasilitas



     $(".modal-body #kategori").val( idkat );
     $(".modal-body #sub1").val( subkategori1 );
     $(".modal-body #sub2").val( subkategori2 );

     $(".modal-body #beforekategori").text( kategori );
     $(".modal-body #beforesub1").text( subkategori1 );
     $(".modal-body #beforesub2").text( subkategori2 );

     $(".modal-body #nation").val( nation );
     $(".modal-body #district").val( district );
     $(".modal-body #subdistrict").val( subdistrict );
     
     $(".modal-body #beforenation").text( nation );
     $(".modal-body #beforedistrict").text( district );
     $(".modal-body #beforesubdistrict").text( subdistrict );

    });
 
</script>







