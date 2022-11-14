<div class="container row mt-5">

    <div class="col-lg-9 col-md-12">
        <div class="row justify-content-between mb-3">
            <div class="mb-3 col-md-9" style="font-weight: 500;">
                <h5>Produk Ditambahkan</h5>
            </div>           
            
            <div class="col-md-3">
                <select class="form-select" id="filterByProduk" onchange="searchFilter()">
                    <option value="" selected>Filter Produk</option>
                    <option value="hotel">Tiket Hotel</option>
                    <option value="pesawat">Tiket Pesawat</option>
                    <option value="bus">Tiket Bus</option>
                    <option value="kereta">Tiket Kereta</option>
                </select>
            </div>
        </div>

        <div class="row">
            @if(isset($produk))
                @if($produk->count() > 0)
                    @foreach($produk as $data)
                        @if($data->tipe_produk == "hotel")
                            <div class="col-lg-4 col-md-3 mb-4 col hotel">
                                <div class="card" >
                                    <div class="card-header">
                                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt="" style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    </div>
                                    <div class="card-body produk p-3">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i class="bi bi-geo-alt"></i> {{ $data->countries }} | {{ $data->district }}</h6>
                                                <div class="mt-2">
                                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">{!! Str::words($data->nama_brand, 4, ' ...') !!}</h4>

                                                    @include('admin.stars.stars')

                                                    <div class="row mb-4 mt-4">
                                                        <div class="col-12">
                                                            <span class="mb-0" style="font-size: 11px;"><i class="fa-solid fa-bed"></i> {{ $data->nilai }} Tempat tidur</span>
                                                        </div>
                                                    </div>

                                                    <div style="min-height: 8em;">
                                                        <p class="mb-0" style="font-size: 12px;">Alamat</p>
                                                        <article class="text-dark mb-4 keterangan"
                                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                            {!! Str::words($data->alamat, 10, ' ...') !!}
                                                        </article>
                                                    </div>

                                                    <div>
                                                        <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">@currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}} hari</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 mt-4">
                                            <form action="{{ route('produk.destroy', $data->kode_produk) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a data-bs-toggle="modal" data-kodeh="{{ $data->kode_produk }}" data-logoh="{{ $data->logo }}" data-img1h="{{ $data->img1 }}"
                                                    data-img2h="{{ $data->img2 }}" data-img3h="{{ $data->img3 }}" data-img4h="{{ $data->img4 }}" data-img5h="{{ $data->img5 }}" 
                                                    data-brandh="{{ $data->nama_brand }}" data-alamat="{{ $data->alamat }}" data-kategori="{{ $data->nama_kategori }}" data-idkat="{{ $data->id_kategori }}"
                                                    data-sub1="{{ $data->sub_kategori1 }}" data-sub2="{{ $data->sub_kategori2 }}" data-nation="{{ $data->countries }}" 
                                                    data-district="{{ $data->district }}" data-subdistrict="{{ $data->subdistrict }}" data-nilai="{{ $data->nilai }}" data-rating="{{ $data->ranting }}" data-harga="{{ $data->harga }}"
                                                    data-promoh="{{ $data->harga_promo }}" data-durasi="{{ $data->durasi_waktu }}" data-keterangan="{{ $data->keterangan }}" data-desc="{{ $data->description }}" data-fa1="{{ $data->fasilitas1 }}" 
                                                    data-fa2="{{ $data->fasilitas2 }}" data-fa3="{{ $data->fasilitas3 }}" data-fa4="{{ $data->fasilitas4 }}" data-fa5="{{ $data->fasilitas5 }}" 
                                                    data-fa6="{{ $data->fasilitas6 }}" class="passHotel">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#uphotel" class="btn text-white mb-0" style="background: #1592E6;">
                                                        Detail
                                                    </button>
                                                </a>

                                                
                                                <button class="btn btn-danger mb-0">
                                                    Hapus
                                                </button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        @elseif($data->tipe_produk == "pesawat")
                            <div class="col-lg-4 col-md-3 mb-4 col pesawat">
                                <div class="card" >
                                    <div class="card-header">
                                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt="" style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    </div>
                                    <div class="card-body produk p-3">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 3, ' ...') !!}</h6>
                                                <div class="mt-2">
                                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">{!! Str::words($data->nama_brand, 4,' ...') !!}</h4>

                                                    @include('admin.stars.stars')

                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">Keberangkatan</p>
                                                            <p style="font-size: 13px;"><i class="fa-solid fa-plane-departure"></i> {!! Str::words($data->keberangkatan, 1,' ...') !!}</p>
                                                        </div>
        
                                                        <div class="mx-3 mt-2">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>
        
                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">Tujuan</p>
                                                            <p style="font-size: 13px;"><i class="fa-solid fa-plane-arrival"></i> {!! Str::words($data->tujuan, 1,' ...') !!}</p>
                                                        </div>
                                                    </div>

                                                    <div style="min-height: 8em;">
                                                        <p class="mb-0" style="font-size: 12px;">Keterangan</p>
                                                        <article class="text-dark mb-4 keterangan"
                                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                            {!! Str::words($data->keterangan, 10,' ...') !!}
                                                        </article>
                                                    </div>                    

                                                    <div>
                                                        <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">@currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}} hari</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 mt-4">
                                            <form action="{{ route('produk.destroy', $data->kode_produk) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a data-bs-toggle="modal" data-kode="{{ $data->kode_produk }}" data-logo="{{ $data->logo }}" data-img1="{{ $data->img1 }}"
                                                    data-img2="{{ $data->img2 }}" data-img3="{{ $data->img3 }}" data-img4="{{ $data->img4 }}" data-img5="{{ $data->img5 }}" 
                                                    data-brand="{{ $data->nama_brand }}" data-tiket="{{ $data->nilai }}" data-terminal1="{{ $data->terminal1 }}" 
                                                    data-terminal2="{{ $data->terminal2 }}" data-locstart="{{ $data->keberangkatan }}" data-locend="{{ $data->tujuan }}" 
                                                    data-rating="{{ $data->ranting }}" data-durasi="{{ $data->durasi_waktu }}" data-fasilitas="{{ $data->fasilitas2 }}" 
                                                    data-harga="{{ $data->harga }}" data-promo="{{ $data->harga_promo }}" data-keterangan="{{ $data->keterangan }}" data-desc="{{ $data->description }}"
                                                    data-kategori="{{ $data->nama_kategori }}" data-sub1="{{ $data->sub_kategori1 }}" data-sub2="{{ $data->sub_kategori2 }}" data-idkat="{{ $data->id_kategori }}"
                                                    class="passPesawat">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#uppesawat" class="btn text-white mb-0" style="background: #1592E6;">
                                                        Detail
                                                    </button>
                                                </a>

                                                
                                                <button class="btn btn-danger mb-0">
                                                    Hapus
                                                </button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        @elseif($data->tipe_produk == "bus")
                            <div class="col-lg-4 col-md-3 mb-4 col bus">
                                <div class="card" >
                                    <div class="card-header">
                                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt="" style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    </div>
                                    <div class="card-body produk p-3">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 2, ' ...') !!} | Kab. {{ $data->keberangkatan }}</h6>
                                                <div class="mt-2">
                                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">{!! Str::words($data->nama_brand, 4,' ...') !!}</h4>

                                                    @include('admin.stars.stars')

                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">Keberangkatan</p>
                                                            <p style="font-size: 13px;"><i class="fa-solid fa-bus"></i> {{ $data->keberangkatan }}</p>
                                                        </div>
        
                                                        <div class="mx-3 mt-2">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>
        
                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">Tujuan</p>
                                                            <p style="font-size: 13px;"><i class="fa-solid fa-bus"></i> {{ $data->tujuan }}</p>
                                                        </div>
                                                    </div>

                                                    <div style="min-height: 8em;">
                                                        <p class="mb-0" style="font-size: 12px;">Keterangan</p>
                                                        <article class="text-dark mb-4 keterangan"
                                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                            {!! Str::words($data->keterangan, 10,' ...') !!}
                                                        </article>
                                                    </div> 

                                                    <div>
                                                        <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">@currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}} hari</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 mt-4">
                                            <form action="{{ route('produk.destroy', $data->kode_produk) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a data-bs-toggle="modal" data-kode="{{ $data->kode_produk }}" data-logo="{{ $data->logo }}" data-img1="{{ $data->img1 }}"
                                                    data-img2="{{ $data->img2 }}" data-img3="{{ $data->img3 }}" data-img4="{{ $data->img4 }}" data-img5="{{ $data->img5 }}" 
                                                    data-brand="{{ $data->nama_brand }}" data-tiket="{{ $data->nilai }}" data-terminal1="{{ $data->terminal1 }}" 
                                                    data-terminal2="{{ $data->terminal2 }}" data-locstart="{{ $data->keberangkatan }}" data-locend="{{ $data->tujuan }}" 
                                                    data-rating="{{ $data->ranting }}" data-durasi="{{ $data->durasi_waktu }}" data-fasilitas="{{ $data->fasilitas2 }}" 
                                                    data-harga="{{ $data->harga }}" data-promo="{{ $data->harga_promo }}" data-keterangan="{{ $data->keterangan }}" data-desc="{{ $data->description }}"
                                                    data-kategori="{{ $data->nama_kategori }}" data-sub1="{{ $data->sub_kategori1 }}" data-sub2="{{ $data->sub_kategori2 }}" data-idkat="{{ $data->id_kategori }}"
                                                    class="passBus">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#upbus" class="btn text-white mb-0" style="background: #1592E6;">
                                                        Detail
                                                    </button>
                                                </a>

                                                
                                                <button class="btn btn-danger mb-0">
                                                    Hapus
                                                </button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        @elseif($data->tipe_produk == "kereta")
                            <div class="col-lg-4 col-md-3 mb-4 col kereta">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt="" style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                    </div>
                                    <div class="card-body produk p-3">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i class="bi bi-geo-alt"></i> {!! Str::words($data->terminal1, 2,' ...') !!} | Kab. {{ $data->keberangkatan }}</h6>
                                                <div class="mt-2">
                                                    <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">{!! Str::words($data->nama_brand, 4, ' ...') !!}</h4>

                                                    @include('admin.stars.stars')

                                                    <div class="d-flex">
                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">Keberangkatan</p>
                                                            <p style="font-size: 13px;"><i class="fa-solid fa-train"></i> {{ $data->keberangkatan }}</p>
                                                        </div>
        
                                                        <div class="mx-3 mt-2">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </div>
        
                                                        <div>
                                                            <p class="mb-0" style="font-size: 12px;">Tujuan</p>
                                                            <p style="font-size: 13px;"><i class="fa-solid fa-train"></i> {{ $data->tujuan }}</p>
                                                        </div>
                                                    </div>

                                                    <div style="min-height: 8em;">
                                                        <p class="mb-0" style="font-size: 12px;">Keterangan</p>
                                                        <article class="text-dark mb-4 keterangan"
                                                            style=" font-size: 13px; text-align: left; line-height: 18px;">
                                                            {!! Str::words($data->keterangan, 10,' ...') !!}
                                                        </article>
                                                    </div>                    

                                                    <div>
                                                        <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">@currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}} hari</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-0 mt-4">
                                            <form action="{{ route('produk.destroy', $data->kode_produk) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a data-bs-toggle="modal" data-kode="{{ $data->kode_produk }}" data-logo="{{ $data->logo }}" data-img1="{{ $data->img1 }}"
                                                    data-img2="{{ $data->img2 }}" data-img3="{{ $data->img3 }}" data-img4="{{ $data->img4 }}" data-img5="{{ $data->img5 }}" 
                                                    data-brand="{{ $data->nama_brand }}" data-tiket="{{ $data->nilai }}" data-terminal1="{{ $data->terminal1 }}" 
                                                    data-terminal2="{{ $data->terminal2 }}" data-locstart="{{ $data->keberangkatan }}" data-locend="{{ $data->tujuan }}" 
                                                    data-rating="{{ $data->ranting }}" data-durasi="{{ $data->durasi_waktu }}" data-fasilitas="{{ $data->fasilitas2 }}" 
                                                    data-harga="{{ $data->harga }}" data-promo="{{ $data->harga_promo }}" data-keterangan="{{ $data->keterangan }}" data-desc="{{ $data->description }}"
                                                    data-kategori="{{ $data->nama_kategori }}" data-sub1="{{ $data->sub_kategori1 }}" data-sub2="{{ $data->sub_kategori2 }}" data-idkat="{{ $data->id_kategori }}"
                                                    class="passKereta">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#upkereta" class="btn text-white mb-0" style="background: #1592E6;">
                                                        Detail
                                                    </button>
                                                </a>

                                                
                                                <button class="btn btn-danger mb-0">
                                                    Hapus
                                                </button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        @endif
                    @endforeach
                @else
                    <div class="col-lg-12 col-md-9">
                        <div class="card">
                            <div class="card-body noneproduk d-flex justify-content-center">
                                <div>
                                    <img src="{{ URL::to('assets/apps.assets/icons/noproduct.png') }}" alt="">
                                    <p>Belum ada product ditambahkan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif

        </div>
    </div>



    <div class="col-lg-3 col-md-12">
        <div class="card mb-3" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">                    
            <div class="card-body p-4">
                
                <div class="pt-3 text-center">
                    <h6>Tambah Produk</h6>
                    <div class="mb-3">
                        <img src="{{ URL::to('assets/admin.assets/icon/addtravel.png') }}" alt="" width="120"
                            style="border-radius: 20px;">
                    </div>
                </div>

                <div class="pt-2 d-flex justify-content-center">
                    <div class="text-center">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#addhotel" class="btn col-8" style="color: white; font-weight: 600; background: #1592E6;">Tiket Hotel</a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#addpesawat" class="btn col-8" style="color: white; font-weight: 600; background: #1592E6;">Tiket Pesawat</a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#addbus" class="btn col-8" style="color: white; font-weight: 600; background: #1592E6;">Tiket Bus</a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#addkereta" class="btn col-8" style="color: white; font-weight: 600; background: #1592E6;">Tiket Kereta</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>


<script>
    var searchFilter = () => {
        let selectedProduk = document.getElementById("filterByProduk").value;
        const input = document.querySelector(".form-control");
        let textBox= input.value;
        const cards = document.getElementsByClassName("col");
        for (let i = 0; i < cards.length; i++) {
            let title = cards[i].querySelector(".produk");

            if ((cards[i].classList.contains(selectedProduk) || selectedProduk=="") && title.innerText.toLowerCase().indexOf(textBox.toLowerCase()) > -1) {
                cards[i].classList.remove("d-none");
            } else {
                cards[i].classList.add("d-none");
            }
        }
    }
</script>