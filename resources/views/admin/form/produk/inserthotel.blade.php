<div class="modal fade" id="addhotel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">

                
                <div class="row mt-3 mb-3">
                    <div class="col-md-6">
                        <h4>Tambah Tiket Hotel</h4>
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
                                <input type="hidden" name="tipe_produk" value="hotel">
                                <input type="hidden" name="kode_produk" value="PRD{{ $kode }}">
                
                                
                
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            @include('admin.imgupload.inserthotel')
                
                                            
                                        </div>
                
                                        
                
                
                                        <div class="col-md-6 mt-3">
                                            <div class="col-md-6">
                                                <label class="form-label text-dark">Logo Perusahaan</label>
                                                <p class="upload_logo m-0" style="border: 4px solid #EEEEEE; width: 120px; height: 110px;">
                                                  <label class="img-upload_logo m-0 p-0">
                                                    <img src="{{ URL::to('assets/admin.assets/icon/hotelbrand.png') }}" alt="" class="foto-upload_logo img-fluid mt-0"
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
                                                    placeholder="Nama Brand" autocomplete="off" required>
                                            </div>
                
                                            <!------------------------------------Kategori Utama Produk------------------------------------------->
                                            <div class="col-md-12 mb-1">
                                                <label class="form-label text-dark">Kategori</label>
                                                <select id="inkategori" class="form-control" name="kategori" required>
                                                    <option selected>-- Pilih Kategori --</option>
                                                    @foreach($kategori as $kat)
                                                        @if($kat->tipe == "Hotel")
                                                            <option value="{{ $kat->id_kategori }}">{{ $kat->nama_kategori }}</option>
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
                                                <label class="form-label text-dark">Provinsi</label>
                                                <select id="inprov" class="form-control" name="prov" required>
                                                    <option selected>-- Pilih Provinsi --</option>
                                                    @foreach($prov as $prov)
                                                        <option value="{{ $prov->provinsi }}">Provinsi {{ $prov->provinsi }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                
                                            <div class="row">
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label text-dark">Kabupaten</label>
                                                    <select id="inkab" class="form-control" name="kab" required>
                                                        <option selected disabled>-- Pilih Kabupaten --</option>
                                                    </select>
                                                </div>
                
                                                <div class="mb-1 col-md-6">
                                                    <label class="form-label text-dark">Kecamatan</label>
                                                    <select id="inkec" class="form-control" name="kec" required>
                                                        <option selected disabled>-- Pilih Kecamatan --</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!------------------------------------Alamat Produk END------------------------------------------->
                                        </div>
                
                                        <div class="col-md-12 mb-3">
                                            <div class="mb-1">
                                                <label class="form-label text-dark">Lokasi</label>
                                                <textarea name="alamat" class="form-control" cols="30" rows="3" placeholder="Lokasi.." required autocomplete="off"></textarea>
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
                                    name="nilai" required autocomplete="off">
                                </div>
                            </div>
                
                            <div class="form-check col-md-2 py-2">
                                <input class="form-check-input" type="checkbox" value="1" name="fasilitas1">
                                <label class="form-check-label">
                                    <i class="bi bi-wifi"></i> Free Wifi
                                </label>
                            </div>            
                
                            <div class="form-check col-md-2 py-2">
                                <input class="form-check-input" type="checkbox" value="1" name="fasilitas5">
                                <label class="form-check-label">
                                    <i class="fa-solid fa-tv"></i> TV
                                </label>
                            </div>            
                
                            <div class="form-check col-md-3 py-2">
                                <input class="form-check-input" type="checkbox" value="1" name="fasilitas6">
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
                                        <input class="form-check-input" type="checkbox" value="1" name="fasilitas2">
                                        <label class="form-check-label">
                                            <i class="bi bi-cup-hot-fill"></i> Sarapan <span class="badge bg-secondary">Gratis</span>
                                        </label>
                                    </div>
                
                                    <div class="form-check col-md-3">
                                        <input class="form-check-input" type="checkbox" value="1" name="fasilitas3">
                                        <label class="form-check-label">
                                            <i class="fa-solid fa-person-swimming"></i> Kolam renang
                                        </label>
                                    </div>
                
                                    <div class="form-check col-md-3">
                                        <input class="form-check-input" type="checkbox" value="1" name="fasilitas4">
                                        <label class="form-check-label">
                                            <i class="fa-solid fa-umbrella-beach"></i> Di tepi pantai
                                        </label>
                                    </div>
                                </div>
                                <select class="form-control" name="ranting" required>
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
                                        name="durasi_waktu" autocomplete="off" required>
                                </div>
                            </div>
                
                            <div class="col-md-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background: #D6D6D6;"
                                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                                    <input type="text" class="form-control px-3" placeholder="Harga"
                                        name="harga" autocomplete="off" required>
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
                                <input id="insertkethotel" type="hidden" name="keterangan">
                                <trix-editor input="insertkethotel"></trix-editor>
                            </div>
            
                            <div class="col-md-12 mb-3">
                                <label for="description" class="form-label"
                                    style="font-size: 18px;">Description (EN)</label>
                                <input id="insertdeschotel" type="hidden" name="descreption">
                                <trix-editor input="insertdeschotel"></trix-editor>
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







