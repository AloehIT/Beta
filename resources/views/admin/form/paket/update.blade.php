<div class="tab-pane fade show mb-3">
    <div class="card">
        <div class="card-body row mx-1">
            <input type="hidden" name="kode_paket" id="kode">

            <div class="col-md-12 mb-2">
                <h5 class="modal-title mb-2" id="staticBackdropLabel">Informasi Umum</h5>
                <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
            </div>


            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mt-1">
                        @include('admin.imgupload.updatepaket')
                    </div>

                    <div class="col-md-6 mt-3">

                        <div class=" mb-1 col-md-12">
                            <label class="form-label text-dark">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_paket"
                                placeholder="Nama Brand" autocomplete="off" required id="nama">
                        </div>

                        <!------------------------------------Kategori Utama Produk------------------------------------------->
                        <div class="col-md-12 mb-1">
                            <label class="form-label text-dark">Kategori</label>
                            <select id="upkategori" class="form-control sendkategori" required>
                                <option selected>-- Pilih Kategori --</option>
                                @foreach($kategori as $kat)
                                @if($kat->tipe == "Travel")
                                <option value="{{ $kat->id_kategori }}">{{ $kat->nama_kategori }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                            <p style="font-size: 11px;" class="mb-0">Kategori: <span id="beforekategori"></span></p>
                            <input type="hidden" class="kategori" name="kategori" id="kategori">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label class="form-label text-dark">Sub-kategori1</label>
                                <select id="upsub1" class="form-control sendsub1" name="sub1" required>
                                    <option>-- Pilih Kategori --</option>
                                </select>
                                <p style="font-size: 11px;" class="mb-0">Sub1: <span id="beforesub1"></span></p>
                                <input type="hidden" class="sub1" name="sub1" id="sub1">
                            </div>

                            <div class="col-md-6 mb-1">
                                <label for="sub2" class="form-label text-dark">Sub-kategori2</label>
                                <select id="upsub2" class="form-control sendsub2" name="sub2" required>
                                    <option selected disabled>-- Pilih Kategori --</option>
                                </select>
                                <p style="font-size: 11px;" class="mb-0">Sub2: <span id="beforesub2"></span></p>
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
                            <input type="hidden" class="nation text-capitalize" name="countries" id="nation">
                        </div>

                        <div class="mb-1 col-md-12">
                            <label class="form-label text-dark">Wilayah Destinasi</label>
                            <select id="upwilayah" class="form-control text-capitalize sendwilayah"
                                required>
                                <option selected>Pilih Destinasi</option>
                            </select>
                            <p style="font-size: 11px;" class="mb-0 text-capitalize">Negara: <span id="beforewilayah"></span></p>
                            <input type="hidden" class="wilayah text-capitalize" name="wilayah" id="wilayah">
                            <label class="text-info mb-0" style="font-size: 12px;">!Daerah sesuai dengan opsi Negara</label>
                        </div>

                        <div class="mb-1 col-md-12">
                            <label class="form-label text-dark">Destinasi</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background: #D6D6D6;"
                                    id="basic-addon1"><i class="bi bi-geo-alt-fill"></i></span>
                                <input type="text" class="form-control px-3" name="destinasi"
                                    placeholder="Tujuan destinasi" required autocomplete="off" id="destinasi">
                            </div>
                        </div>
                        <!------------------------------------Alamat Produk END------------------------------------------->

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
                <div class="mb-2">
                    <h5 class="modal-title" id="staticBackdropLabel">Pilih Akomodasi</h5>
                    <p class="text-secondary mb-0" style="font-size: 12px;">Pilih hotel untuk
                        informasi tempat beristirahat paket travel</p>
                </div>
                <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.762); "></div>
            </div>

            <div class="row">
                <label class="form-label text-dark">Akomodasi Hotel</label>
                <div class="col-md-12 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><i class="fa-solid fa-hotel text-dark"></i></span>
                        <select id="uppenginapan" 
                            class="px-3 form-control text-capitalize upcekharga sendhotel" required>
                            <option selected>Pilih Penginapan
                            <option>
                        </select>

                    </div>
                    <p style="font-size: 11px;" class="mb-0">Produk Penginapan: <span id="beforehotel"></span></p>
                    <input type="hidden" class="hotel" name="id_hotel" id="hotel">
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Kosongkan jika tidak diubah</label>
                </div>
            </div>


            <div class="row">
                <label class="form-label text-dark">Akomodasi Trannsportasi</label>
                <div class="col-md-12 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><i class="fa-solid fa-plane text-dark"></i></span>
                        <select id="uptransportasi" class="px-3 form-control text-capitalize upcekharga1 sendtransport" required>
                            <option selected>Pilih Transportasi
                            <option>
                        </select>
                    </div>
                    <p style="font-size: 11px;" class="mb-0">Produk Transportasi: <span id="beforetransport"></span></p>
                    <input type="hidden" class="transport" name="id_transport" id="transport">
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Kosongkan jika tidak diubah</label>
                </div>
            </div>


            <div class="row mb-3">
                <label class="form-label text-dark">Akomodasi Kendaraan Tambahan</label>
                <div class="col-md-12 mb-1">
                    <div class="input-group">
                        <span class="input-group-text" style="background: #D6D6D6;"
                            id="basic-addon1"><i class="fa-solid fa-car text-dark"></i></span>
                        <select id="upkendaraan" class="px-3 form-control text-capitalize upcekharga2 sendrental" required>
                            <option selected>Pilih Kendaraan
                            <option>
                        </select>
                    </div>
                    <p style="font-size: 11px;" class="mb-0">Produk Kendaran: <span id="beforerental"></span></p>
                    <input type="hidden" class="rental" name="id_rental" id="rental">
                    <label class="text-info" style="font-size: 12px; font-weight: 500;">! Kosongkan jika tidak diubah</label>
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

            <div class="mb-3 col-md-12">
                <label class="form-label text-dark">Penilaian/Rating</label>
                <div class="input-group">
                    <span class="input-group-text" style="background: #D6D6D6;"
                        id="basic-addon1"><i class="bi bi-star-fill"></i>
                    </span>
                    <select class="form-control px-3" name="ranting" id="rate" required>
                        <option selected disabled>-- Pilih Rating --</option>
                        <option value="5">Bintang 5</option>
                        <option value="4">Bintang 4</option>
                        <option value="3">Bintang 3</option>
                        <option value="2">Bintang 2</option>
                        <option value="1">Bintang 1</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12 mb-1">
                <label class="form-label text-dark">Keterangan singkat (ID)</label>
                <input id="upketerangan" type="hidden" name="keterangan" class="ket">
                <trix-editor input="upketerangan" class="ket"></trix-editor>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label text-dark">
                    Short description (EN)</label>
                <input id="updesc" type="hidden" name="description" class="desc">
                <trix-editor input="updesc" class="desc"></trix-editor>
            </div>
        </div>
        <!--img upload--->
    </div>
</div>

<div class="tab-pane fade show mb-3">
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
                        placeholder="Hari/Day" required autocomplete="off" id="hari">
                </div>
            </div>


            <div class="col-md-12 mb-1">
                <label class="form-label text-dark">Runtatan Acara (ID)</label>
                <input id="upacara" type="hidden" name="acara" class="acara">
                <trix-editor input="upacara" class="acara"></trix-editor>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label text-dark">Event (EN)</label>
                <input id="upprogram" type="hidden" name="program" class="program">
                <trix-editor input="upprogram" class="program"></trix-editor>
            </div>
        </div>
        <!--img upload--->
    </div>
</div>

<div class="tab-pane fade show mb-3">
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
                        placeholder="Total Harga" autocomplete="off" required id="total">
                </div>
            </div>

            <div class="col-md-6 mt-2 mb-1">
                <div class="input-group">
                    <span class="input-group-text" style="background: #D6D6D6;"
                        id="basic-addon1"><span class="text-dark">Rp.</span></span>
                    <input type="number" class="form-control px-3" name="harga_promo"
                        placeholder="Harga Promo" autocomplete="off" id="promo">
                </div>
                <label class="text-info" style="font-size: 12px; font-weight: 500;">! Kosongkan harga
                    jika tidak disi</label>
            </div>

            
            <div class="col-md-12 text-end">
                <button type="submit" class="btn btn-success col-12">
                    <i class="bi bi-check-circle-fill"></i> Simpan 
                </button>
            </div>
        </div>
        <!--img upload--->
    </div>
</div>



<script type="text/javascript">
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
                            $("#upwilayah").append('<option value="'+district.district+'">Daerah '+district.district+'</option>');
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

    //produk
    $('#upwilayah').change(function(){
        var hotel = $(this).val();    
        if(hotel){
            $.ajax({
                type:"GET",
                url: '/getHotel/'+hotel,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#uppenginapan").empty();
                        $("#uppenginapan").append('<option>Pilih Penginapan</option>'); 
                       
                        $.each(data,function(key, hotel){
                            $("#uppenginapan").append('<option value="'+hotel.kode_produk+'">'+hotel.nama_brand+'</option>');
                        });
                    }else{
                        $("#uppenginapan").empty();    
                    }
                }
            });
        }else{
            $("#uppenginapan").empty();
        } 
        
    });
    $('#upwilayah').change(function(){
        var transport = $(this).val();    
        if(transport){
            $.ajax({
                type:"GET",
                url: '/getTransport/'+transport,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#uptransportasi").empty();
                        $("#uptransportasi").append('<option>Pilih Transportasi</option>');
                        $.each(data,function(key, transport){
                            $("#uptransportasi").append('<option value="'+transport.kode_produk+'">'+transport.nama_brand+'</option>');
                        });
                    }else{
                        $("#uptransportasi").empty();
                    }
                }
            });
        }else{
            $("#uptransportasi").empty();
        } 
    });
    $('#upwilayah').change(function(){
        var kendaraan = $(this).val();    
        if(kendaraan){
            $.ajax({
                type:"GET",
                url: '/getKendaraan/'+kendaraan,
                dataType: 'JSON',
                success:function(data){        
                    if(data){
                        $("#upkendaraan").empty();
                        $("#upkendaraan").append('<option>Pilih Kendaraan</option>');
                        $.each(data,function(key, kendaraan){
                            $("#upkendaraan").append('<option value="'+kendaraan.kode_produk+'">'+kendaraan.nama_brand+'</option>');
                        });
                    }else{
                        $("#upkendaraan").empty();
                    }
                }
            });
        }else{
            $("#kendaraan").empty();
        } 
        
    });

</script>


