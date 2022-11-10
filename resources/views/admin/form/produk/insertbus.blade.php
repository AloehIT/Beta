<div class="modal fade" id="addbus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">

                <div class="row mt-3 mb-3">
                    <div class="col-md-6">
                        <h4>Tambah Tiket Bus</h4>
                    </div>

                    <div class="col-md-6 text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times text-danger" style="font-size: 25px"></i></button>
                    </div>    
                </div>

         
                <form action="{{ route('insert.produk') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-pane fade show">
                        <div class="card">
                            <!--img upload--->
                            <div class="card-body row mx-1">
                                <input type="hidden" name="tipe_produk" value="bus">
                                <input type="hidden" name="kode_produk" value="PRD{{ $kode }}">
                
                                
                
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @include('admin.imgupload.insertbus')
                                        </div>
                
                                        
                
                
                                        <div class="col-md-6 pt-5 ">
                                            <div class="col-md-6">
                                                <label class="form-label text-dark">Logo Perusahaan</label>
                                                <p class="upload_logo m-0" style="border: 4px solid #EEEEEE; width: 120px; height: 110px;">
                                                  <label class="img-upload_logo m-0 p-0">
                                                    <img src="{{ URL::to('assets/admin.assets/icon/bus/brand.png') }}" alt="" class="foto-upload_logo img-fluid mt-0"
                                                      id="viewlogo">
                                            
                                                    <label class="btn-input_logo">
                                                      <input type="file" name="logo" onchange="loadLogo(event)" required>
                                                      <i class="bi bi-camera-fill" aria-hidden="true" style="font-size: 40px;"></i><br>
                                                    </label>
                                                  </label>
                                                </p>
                                            </div>
                
                                            <div class=" mb-1 col-md-12">
                                                <label class="form-label text-dark">Nama Produk</label>
                                                <input type="text" class="form-control" name="nama_brand" placeholder="Nama Brand" autocomplete="off" required>
                                            </div>

                                            <div class="mb-1 col-md-12">
                                                <label class="form-label text-dark">Tiket</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" style="background: #D6D6D6;"
                                                    id="basic-addon1"><i class="fa-solid fa-ticket-simple"></i></span>
                                                    <input type="number" class="form-control px-3" name="nilai"
                                                        placeholder="Jumlah tiket" min="1" value="1" required autocomplete="off">
                                                </div>
                                            </div>
                

                                            <!------------------------------------Kategori Utama Produk------------------------------------------->
                                            <div class="col-md-12 mb-1">
                                                <label class="form-label text-dark">Kategori</label>
                                                <select id="kategori2" class="form-control" name="kategori" required>
                                                    <option selected>-- Pilih Kategori --</option>
                                                    @foreach($kategori as $kat)
                                                        @if($kat->tipe == "Bus")
                                                            <option value="{{ $kat->id_kategori }}">{{ $kat->nama_kategori }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                
                                            <div class="row">
                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label text-dark">Sub-kategori1</label>
                                                    <select id="sub12" class="form-control" name="sub1" required> 
                                                        <option>-- Pilih Kategori --</option>
                                                    </select>
                                                </div>
                                    
                                                <div class="col-md-6 mb-1">
                                                    <label for="sub22" class="form-label text-dark">Sub-kategori2</label>
                                                    <select id="sub22" class="form-control" name="sub2" required>
                                                        <option selected disabled>-- Pilih Kategori --</option>
                                                    </select>
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
                                        name="terminal1" autocomplete="off" required>
                                </div>    
                            </div>


                            <div class="col-md-6">    
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
                                    <input type="text" class="form-control px-3" placeholder="Terminal Tujuan"
                                        name="terminal2" autocomplete="off" required>
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
                                                name="keberangkatan" autocomplete="off" required>
                                        </div>    
                                    </div>


                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" style="background: #D6D6D6;"
                                                id="basic-addon1"><i class="fa-solid fa-bus"></i></span>
                                            <input type="text" class="form-control px-3" placeholder="Tujuan"
                                                name="tujuan" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <label class="form-label" style="font-size: 18px;">Fasilitas & Kualitas</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check py-1">
                                            <input class="form-check-input" type="checkbox" value="1" name="fasilitas2">
                                            <label class="form-check-label">
                                                <i class="bi bi-cup-hot-fill"></i> Makan <span class="badge bg-secondary">Gratis</span>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-md-9">
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
                            </div>
                
                            <div class="mt-3">
                                <label class="form-label" style="font-size: 18px;">Waktu tempuh & Biaya</label>
                            </div>
                
                            <div class="col-md-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><i class="bi bi-alarm"></i></span>
                                    <input type="number" min="0" value="0" class="form-control px-3" placeholder="Hari"
                                        name="durasi_waktu" required autocomplete="off">
                                </div>
                            </div>
                
                            <div class="col-md-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                                    <input type="text" class="form-control px-3" placeholder="Harga"
                                        name="harga" required autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-5 mb-3">
                                <div class="input-group mb-0">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                                    <input type="text" class="form-control px-3" placeholder="Harga Promo"
                                        name="harga_promo" autocomplete="off">
                                </div>
                                <p style="color: #1592E6; font-size: 11px;" class="mb-0">! Kosongkan harga promo jika tidak ada</p>
                            </div> 
                            
                
                            <div class="col-md-12 mb-1">
                                <label for="keterangan" class="form-label"
                                    style="font-size: 18px;">Keterangan (ID)</label>
                                <input id="insertketbus" type="hidden" name="keterangan">
                                <trix-editor input="insertketbus"></trix-editor>
                            </div>
            
                            <div class="col-md-12 mb-3">
                                <label for="description" class="form-label"
                                    style="font-size: 18px;">Description (EN)</label>
                                <input id="insertdescbus" type="hidden" name="descreption">
                                <trix-editor input="insertdescbus"></trix-editor>
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
    $('#kategori2').change(function(){
        var sub = $(this).val();    

        if(sub){
            $.ajax({
                type:"GET",
                url: '/getData1/'+sub,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#sub12").empty();
                        $("#sub12").append('<option>-- Pilih Kategori --</option>');

                        $.each(data,function(key, subkategori1){
                            $("#sub12").append('<option value="'+subkategori1.subkategori+'">'+subkategori1.subkategori+'</option>');
                        });
                    }else{
                        $("#sub12").empty();
                    }
                }
            });
        }else{
            $("#sub12").empty();
        } 
        
        
        if(sub){
            $.ajax({
                type:"GET",
                url: '/getData2/'+sub,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#sub22").empty();
                        $("#sub22").append('<option>-- Pilih Kategori --</option>');

                        $.each(data,function(key, subkategori2){
                            $("#sub22").append('<option value="'+subkategori2.subkategori+'">'+subkategori2.subkategori+'</option>');
                        });
                    }else{
                        $("#sub22").empty();
                    }
                }
            });
        }else{
            $("#sub22").empty();
        } 
    });




    //Wilayah
    $('#prov').change(function(){
        var kab = $(this).val();    

        if(kab){
            $.ajax({
                type:"GET",
                url: '/getProv/'+kab,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#kab").empty();
                        $("#kab").append('<option>-- Pilih Kabupaten --</option>');
                        $("#kec").empty();
                        $("#kec").append('<option>-- Pilih Kecamatan --</option>');

                        $.each(data,function(key, kab){
                            $("#kab").append('<option value="'+kab.kab+'">Kabupaten '+kab.kab+'</option>');
                        });
                    }else{
                        $("#kab").empty();
                        $("#kec").empty();
                    }
                }
            });
        }else{
            $("#kab").empty();
            $("#kec").empty();
        } 
        
    });


    $('#kab').change(function(){
        var kec = $(this).val();    

        if(kec){
            $.ajax({
                type:"GET",
                url: '/getKab/'+kec,
                dataType: 'JSON',
                success:function(data){        

                    if(data){
                        $("#kec").empty();
                        $("#kec").append('<option>-- Pilih Kecamatan --</option>');

                        $.each(data,function(key, kec){
                            $("#kec").append('<option value="'+kec.kec+'">Kecamatan '+kec.kec+'</option>');
                        });
                    }else{
                        $("#kec").empty();
                    }
                }
            });
        }else{
            $("#kec").empty();
        } 
        
    });
 
</script>
