<link href="{{URL::to('assets/admin.assets/css/img.css')}}" rel="stylesheet" />

<div class="container row mt-5">

    <div class="col-md-12 d-lg-none">
        <div class="text-center mt-0 mb-5">
            <button type="button" data-bs-toggle="modal" data-bs-target="#Myadd" class="btn col-12"
                style="background: #1592E6; color: white;">Tambah Paket</button>
        </div>
    </div>


    <div class="col-lg-9 col-md-12">
        <div class="row justify-content-between mb-3">
            <div class="mb-3 col-md-9" style="font-weight: 500;">
                <h5>Paket Tour Ditambahkan</h5>
            </div>

            <div class="col-md-3 d-none">
                <select class="form-select" id="filterByPaket" onchange="searchFilter()">
                    <option value="" selected>Filter Produk</option>
                    <option value="paket">Tiket Hotel</option>
                </select>
            </div>
        </div>

        <div class="row">
            @if(isset($paket))
                @if($paket->count() > 0)
                    @foreach($paket as $data)
                    <div class="col-lg-4 col-md-3 mb-4 col paket">
                        <div class="card">
                            <div class="card-header">
                                <img src="{{ asset('library/paket/'.$data->img1) }}" class="card-img-top img-fluid img" alt="" style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                            </div>
                            <div class="card-body paket p-3">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="ms-2 c-details">
                                        <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i class="bi bi-geo-alt"></i> Paket Travel | {{ $data->wilayah }}</h6>
                                        <div class="mt-2">
                                            <h4 class="heading col-12 text-dark text-capitalize" style="font-size: 15px;">{!! Str::words($data->nama_paket, 4, ' ...') !!}</h4>

                                            @include('admin.stars.stars')


                                            <div style="min-height: 8em;">
                                                <p class="mb-0" style="font-size: 12px;">Keterangan</p>
                                                <article style="font-size: 12px;">
                                                    {!! Str::words($data->keterangan, 10, ' ...') !!}
                                                </article>
                                            </div>

                                            <div>
                                                <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">@currency($data->total_harga)<span style="font-size: 12px;">/{{$data->hari}} hari</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-0 mt-4">
                                    <form action="{{ route('paket.destroy', $data->kode_paket) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a data-bs-toggle="modal" data-kode="{{$data->kode_paket}}" data-namapaket="{{$data->nama_paket}}" 
                                            data-img1="{{$data->img1}}" data-img2="{{$data->img2}}" data-img3="{{$data->img3}}" 
                                            data-img4="{{$data->img4}}" data-img5="{{$data->img5}}" data-kategori="{{$data->nama_kategori}}" data-idkat="{{$data->id_kategori}}" 
                                            data-sub1="{{$data->sub_kategori1}}" data-sub2="{{$data->sub_kategori2}}" data-wilayah="{{$data->wilayah}}" data-nation="{{$data->countries}}"
                                            data-rate="{{$data->ranting}}" data-destinasi="{{$data->destinasi}}" data-keterangan="{{$data->keterangan}}"
                                            data-description="{{$data->description}}" data-hari="{{$data->hari}}" data-acara="{{$data->acara}}" 
                                            data-program="{{$data->program}}" data-total="{{$data->total_harga}}" data-promo="{{$data->harga_promo}}"
                                            data-rental="{{$data->id_rental}}" data-hotel="{{$data->id_hotel}}" data-transport="{{$data->id_transport}}" class="passPaket">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#Myedit" class="btn text-white mb-0" style="background: #1592E6;">
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
                    @endforeach
                @else
                    <div class="col-lg-12 col-md-9">
                        <div class="card">
                            <div class="card-body d-flex justify-content-center">
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


    <div class="col-lg-3 d-none d-lg-block">
        <div class="text-center my-5 py-5">
            <div class="mb-3">
                <img src="{{ URL::to('assets/admin.assets/icon/addtravel.png') }}" alt="" width="120"
                    style="border-radius: 20px;">
            </div>

            <button type="button" data-bs-toggle="modal" data-bs-target="#Myadd" class="btn"
                style="background: #1592E6; color: white;">Tambah Paket</button>
        </div>
    </div>
</div>


<script>
    var searchFilter = () => {
        let selectedPaket = document.getElementById("filterByPaket").value;
        const input = document.querySelector(".form-control");
        let textBox= input.value;
        const cards = document.getElementsByClassName("col");
        for (let i = 0; i < cards.length; i++) {
            let title = cards[i].querySelector(".paket");

            if ((cards[i].classList.contains(selectedPaket) || selectedPaket=="") && title.innerText.toLowerCase().indexOf(textBox.toLowerCase()) > -1) {
                cards[i].classList.remove("d-none");
            } else {
                cards[i].classList.add("d-none");
            }
        }
    }
</script>