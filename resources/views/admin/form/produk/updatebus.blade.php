<div class="modal fade" id="upbus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">

                <div class="row mt-3 mb-3">
                    <div class="col-md-6">
                        <h4>Update Tiket Bus</h4>
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
                                <input type="hidden" name="tipe_produk" value="bus">
                                <input type="hidden" name="kode_produk" id="kodeh">
                                <input type="hidden" name="logoval" id="logoval">
                
                                
                
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @include('admin.imgupload.updatebus')
                                        </div>
                
                                        
                
                
                                        <div class="col-md-6 pt-5 ">
                                            <div class="col-md-6">
                                                <label class="form-label text-dark">Logo Perusahaan</label>
                                                <p class="upload_logo m-0" style="border: 4px solid #EEEEEE; width: 120px; height: 110px;">
                                                  <label class="img-upload_logo m-0 p-0">
                                                    <img src="{{ URL::to('assets/admin.assets/icon/bus/brand.png') }}" alt="" class="view-logo foto-upload_logo img-fluid mt-0"
                                                      id="uploadlogo">
                                            
                                                    <label class="btn-input_logo">
                                                      <input type="file" name="logo" onchange="uploadLogo(event)">
                                                      <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
                                                    </label>
                                                  </label>
                                                </p>
                                            </div>
                
                                            <div class=" mb-1 col-md-12">
                                                <label class="form-label text-dark">Nama Produk</label>
                                                <input type="text" class="form-control" name="nama_brand"
                                                    placeholder="Nama Brand" id="brandh">
                                            </div>

                                            <div class="mb-1 col-md-12">
                                                <label class="form-label text-dark">Tiket</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" style="background: #D6D6D6;"
                                                    id="basic-addon1"><i class="fa-solid fa-ticket-simple"></i></span>
                                                    <input type="number" class="form-control px-3" name="nilai"
                                                        placeholder="Jumlah tiket" min="1" id="tiket">
                                                </div>
                                            </div>
                
                                            <!------------------------------------Kategori Utama Produk------------------------------------------->
                                            <div class="col-md-12 mb-1">
                                                <label class="form-label text-dark">Kategori</label>
                                                <select id="upkategori" class="form-control sendkategori1" required>
                                                    <option selected>-- Pilih Kategori --</option>
                                                    @foreach($kategori as $kat)
                                                        @if($kat->tipe == "Bus")
                                                            <option value="{{ $kat->id_kategori }}">{{ $kat->nama_kategori }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <p style="font-size: 11px;" class="mb-0">Kategori: <span id="beforekategori"></span></p>
                                                <input type="hidden" class="kategori1" name="kategori" id="kategori">
                                            </div>

                
                                            <div class="row">
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label text-dark">Sub-kategori1</label>
                                                    <select id="upsub1" class="form-control sendsub12"> 
                                                        <option>-- Pilih Kategori --</option>
                                                    </select>
                                                    <p style="font-size: 11px;" class="mb-0">SUB1: <span id="beforesub1"></span></p>
                                                    <input type="hidden" class="sub12" name="sub1" id="sub1">
                                                </div>
                                    
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label text-dark">Sub-kategori2</label>
                                                    <select id="upsub2" class="form-control sendsub22">
                                                        <option selected disabled>-- Pilih Kategori --</option>
                                                    </select>
                                                    <p style="font-size: 11px;" class="mb-0">SUB2: <span id="beforesub2"></span></p>
                                                    <input type="hidden" class="sub22" name="sub2" id="sub2">
                                                </div>
                                            </div>
                                            <!------------------------------------Kategori Utama Produk------------------------------------------->      
                                        </div>
                
                                    
                                    </div>        
                                </div>
                
                            </div>
                            <!--img upload--->
                        </div>
                
        
                
                        <div class="row mt-2">

                            <label class="form-label" style="font-size: 18px;">Terminal Keberangkatan & Tujuan</label>
                            <div class="col-md-6">    
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
                                    <input type="text" class="form-control px-3" placeholder="Terminal Keberangkatan"
                                        name="terminal1" id="terminal1">
                                </div>    
                            </div>

                            <div class="col-md-6">    
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
                                    <input type="text" class="form-control px-3" placeholder="Terminal Tujuan"
                                        name="terminal2" id="terminal2">
                                </div>    
                            </div>


                            <div class="col-md-12">
                                <label class="form-label" style="font-size: 18px;">Keberangkatan & Tujuan</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" style="background: #D6D6D6;"
                                                id="basic-addon1"><i class="fa-solid fa-bus"></i></span>
                                            <input type="text" class="form-control px-3" placeholder="Keberangkatan"
                                                name="keberangkatan" id="locstart">
                                        </div>    
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" style="background: #D6D6D6;"
                                                id="basic-addon1"><i class="fa-solid fa-bus"></i></span>
                                            <input type="text" class="form-control px-3" placeholder="Tujuan"
                                                name="tujuan" id="locend">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <label class="form-label" style="font-size: 18px;">Fasilitas & Kualitas</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="checkbox" value="1" name="fasilitas2" id="fasilitas">
                                            <label class="form-check-label">
                                                <i class="bi bi-cup-hot-fill"></i> Makan <span class="badge bg-secondary">Gratis</span>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-md-9">
                                        <select class="form-control" name="ranting" id="rating">
                                            <option selected disabled>-- Pilih Rating --</option>
                                            <option value="5">Bintang 5</option>
                                            <option value="4">Bintang 4</option>
                                            <option value="3">Bintang 3</option>
                                            <option value="2">Bintang 2</option>
                                            <option value="1">Bintang 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                
                            <div class="mt-3">
                                <label class="form-label" style="font-size: 18px;">Waktu tempuh & Biaya</label>
                            </div>
                
                            <div class="col-md-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><i class="bi bi-alarm"></i></span>
                                    <input type="number" min="0" value="0" class="form-control px-3" placeholder="Hari"
                                        name="durasi_waktu" id="durasi">
                                </div>
                            </div>
                
                            <div class="col-md-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                                    <input type="text" class="form-control px-3" placeholder="Harga"
                                        name="harga" id="harga">
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
                                <input id="upketbus" type="hidden" name="keterangan" class="keterangan">
                                <trix-editor input="upketbus" class="keterangan"></trix-editor>
                            </div>
            
                            <div class="col-md-12 mb-3">
                                <label class="form-label text-dark">
                                    Short description (EN)</label>
                                <input id="updescbus" type="hidden" name="description" class="desc">
                                <trix-editor input="updescbus" class="desc"></trix-editor>
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
    //send kategori
    $('.sendkategori1').on('change', function(){
        const kategori = $('.sendkategori1').val();
        $('.kategori1').val(kategori);
    });

    $('.sendsub12').on('change', function(){
        const subkategori = $('.sendsub12').val();
        $('.sub12').val(subkategori);
    });

    $('.sendsub22').on('change', function(){
        const subkategori = $('.sendsub22').val();
        $('.sub22').val(subkategori);
    });

    //Kategori
    $('#upkategori').change(function(){
        var upsub = $(this).val();    

        if(upsub){
            $.ajax({
                type:"GET",
                url: '/getData1/'+upsub,
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
        
        
        if(upsub){
            $.ajax({
                type:"GET",
                url: '/getData2/'+upsub,
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


    $(document).on("click", ".passBus", function () {
     var kode = $(this).data('kode');
     
     //img
     var logoh = $(this).data('logo');
     var img1h = $(this).data('img1');
     var img2h = $(this).data('img2');
     var img3h = $(this).data('img3');
     var img4h = $(this).data('img4');
     var img5h = $(this).data('img5');
     //img

     var brandh = $(this).data('brand');
     var provh = $(this).data('prov');
     var kabh = $(this).data('kab');
     var kech = $(this).data('kec');
     var kategori = $(this).data('kategori');
     var idkat = $(this).data('idkat');
     var sub1 = $(this).data('sub1');
     var sub2 = $(this).data('sub2');
     var tiket = $(this).data('tiket');
     var terminal1 = $(this).data('terminal1');
     var terminal2 = $(this).data('terminal2');

     var locstart = $(this).data('locstart');
     var locend = $(this).data('locend');
     
     var rating = $(this).data('rating');
     var durasi = $(this).data('durasi');
     var fasilitas = $(this).data('fasilitas');
     var harga = $(this).data('harga');
     var promo = $(this).data('promo');
     var keterangan = $(this).data('keterangan');
     var desc = $(this).data('desc');




     $(".modal-body #kodeh").val( kode );


     //img
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
     $(".modal-body #sub1").val( sub1 );
     $(".modal-body #sub2").val( sub2 );

     $(".modal-body #beforekategori").text( kategori );
     $(".modal-body #beforesub1").text( sub1 );
     $(".modal-body #beforesub2").text( sub2 );

     $(".modal-body #tiket").val( tiket );
     $(".modal-body #terminal1").val( terminal1 );
     $(".modal-body #terminal2").val( terminal2 );
     $(".modal-body #locstart").val( locstart );
     $(".modal-body #locend").val( locend );
     $(".modal-body #rating").val( rating );
     $(".modal-body #durasi").val( durasi );
     $(".modal-body #fasilitas").prop('checked', fasilitas);
     $(".modal-body #harga").val( harga );
     $(".modal-body #promo").val( promo );
     $(".modal-body .keterangan").val( keterangan );
     $(".modal-body .desc").val( desc );

     

    });
</script>
