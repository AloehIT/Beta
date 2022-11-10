<div class="row mt-5">

    <div class="col-lg-9 col-md-12 row">
        <div class="row justify-content-between mb-3">
            <div class="mb-3 col-md-9" style="font-weight: 500;">
                <h5>Produk Ditambahkan</h5>
            </div>

            <div class="col-md-3">
                <select class="form-control" id="filterByProduk" onchange="searchFilter()">
                    <option value="" selected>Tipe Kendaraan</option>
                    @foreach($tipe_kendaraan as $tipes)
                    <option value="{{ $tipes->tipe }}" >{{ $tipes->tipe }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        @if(isset($produk))
        @if($produk->count() > 0)
        @foreach($produk as $data)

        <div class="col-lg-4 col-md-3 mb-4 col {{ $data->tipe_kendaraan }}">
            <div class="card">
                <div class="card-header">
                    <img src="{{ asset('library/produk/'.$data->img1) }}" class="card-img-top img-fluid img" alt=""
                        style="max-height: 150px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                </div>
                <div class="card-body produk p-3">
                    <div class="d-flex flex-row align-items-center">
                        <div class="ms-2 c-details">
                            <h6 class="mb-0 text-secondary text-capitalize" style="font-size: 10px;"><i
                                class="bi bi-geo-alt"></i>{{ $data->prov }} | {{ $data->kab }}</h6>
                            <div class="mt-2">
                                <h4 class="mb-0 heading col-12 text-dark text-capitalize" style="font-size: 15px;">{!!
                                    Str::words($data->nama_brand, ' ...') !!}</h4>
                                <h6 class="mb-3 text-secondary text-capitalize" style="font-size: 10px;"><i
                                    class="fa fa-car"></i> {{ $data->tipe_kendaraan }}</h6>

                                @include('admin.stars.stars')

                                <div class="row mb-3">

                                    <div class="col-12 mb-0">
                                        <span class="" style="font-size: 12px;"><i class="bi bi-clock"></i> {{
                                            $data->durasi_waktu }} Max Sewa</span>
                                    </div>

                                    <div class="col-12">
                                        <span class="mb-2" style="font-size: 12px;"><i class="bi bi-people-fill"></i> Max {{
                                            $data->nilai }} Orang</span>
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
                                    <p class="text-dark mb-0" style="font-size: 20px; font-weight: 500;">
                                        @currency($data->harga)<span style="font-size: 12px;">/{{$data->durasi_waktu}}
                                            hari</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-0 mt-4">
                        <form action="{{ route('rental.destroy', $data->kode_produk) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a data-bs-toggle="modal" data-kodeh="{{ $data->kode_produk }}"
                                data-logoh="{{ $data->logo }}" data-img1h="{{ $data->img1 }}"
                                data-img2h="{{ $data->img2 }}" data-img3h="{{ $data->img3 }}"
                                data-img4h="{{ $data->img4 }}" data-img5h="{{ $data->img5 }}"
                                data-brandh="{{ $data->nama_brand }}" data-tipe="{{ $data->tipe_kendaraan }}" data-alamath="{{ $data->alamat }}"
                                data-provh="{{ $data->prov }}" data-kabh="{{ $data->kab }}" data-kech="{{ $data->kec }}"
                                data-kategorih="{{ $data->nama_kategori }}" data-idkat="{{ $data->id_kategori }}" data-subkategori1h="{{ $data->sub_kategori1 }}"
                                data-subkategori2h="{{ $data->sub_kategori2 }}" data-nilaih="{{ $data->nilai }}"
                                data-ratingh="{{ $data->ranting }}" data-hargah="{{ $data->harga }}"
                                data-promoh="{{ $data->harga_promo }}" data-durasih="{{ $data->durasi_waktu }}"
                                data-keteranganh="{{ $data->keterangan }}" data-desc="{{ $data->description }}" class="passrental">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#Myedit"
                                    class="btn text-white mb-0" style="background: #1592E6;">
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



    <div class="col-md-3">
        <div class="text-center pt-5 mt-5">
            <div class="mb-3">
                <img src="{{URL::to('assets/admin.assets/icon/addmobil.png')}}" class="img-fluid" alt="" width="120"
                    style="border-radius: 20px;">
            </div>

            <button type="button" data-bs-toggle="modal" data-bs-target="#Myadd" class="btn"
                style="background: #1592E6; color: white;">Tambah Produk</button>
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