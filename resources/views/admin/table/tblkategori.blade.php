<div class="row mt-4">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-3 d-flex justify-content-between">
                <h6>Tabel Kategori</h6>
                <a type="button" data-bs-toggle="modal" data-bs-target="#Myadd"
                    class="btn text-white" style="background: #1592E6;">Tambah Kategori</a>
            </div>
            <div class="card-body pt-0 pb-2">
                <div class="table-responsive p-0 ">
                    @if ($kategori->count() > 0)
                        <table class="table align-items-center mb-5 table-striped">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>

                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        ID Kategori
                                    </th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kategori
                                    </th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Employed
                                    </th>

                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Aksi
                                    </th>

                                </tr>
                            </thead>

                            
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach($kategori as $data)
                                <tr>
                                    <input type="hidden" class="delete_id" value="{{ $data->id_kategori }}">
                                    <td class="align-middle text-center text-sm col-1">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $no++ }}</span>
                                    </td>

                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold mb-0">{{
                                            $data->id_kategori }}</span>
                                    </td>

                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            @if($data->tipe == "Hotel")
                                            <div>
                                                <i class="fa-solid fa-hotel avatar avatar-sm me-2 pt-1 text-dark" style="font-size: 25px"></i>
                                            </div>
                                            @elseif($data->tipe == "Pesawat")
                                            <div>
                                                <i class="fa-solid fa-plane avatar avatar-sm me-2 pt-1 text-dark" style="font-size: 25px"></i>
                                            </div>
                                            @elseif($data->tipe == "Bus")
                                            <div>
                                                <i class="fa-solid fa-bus avatar avatar-sm me-2 pt-1 text-dark" style="font-size: 25px"></i>
                                            </div>
                                            @elseif($data->tipe == "Kereta")
                                            <div>
                                                <i class="fa-solid fa-train avatar avatar-sm me-2 pt-1 text-dark" style="font-size: 25px"></i>
                                            </div>
                                            @elseif($data->tipe == "Rental")
                                            <div>
                                                <i class="fa-solid fa-car-side avatar avatar-sm me-2 pt-1 text-dark" style="font-size: 25px"></i>
                                            </div>
                                            @elseif($data->tipe == "Travel")
                                            <div>
                                                <i class="fa-solid fa-cart-flatbed-suitcase avatar-sm me-2 pt-1 text-dark" style="font-size: 25px"></i>
                                            </div>
                                            @endif
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $data->nama_kategori }}</h6>
                                                <p class="text-xs text-secondary mb-0">Kiano Travel</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        @if($data->status_ktgr == "1")
                                        <span class="text-success">Aktif</span>
                                        @else
                                        <span class="text-success">Nonaktif</span>
                                        @endif
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ date('d F Y',
                                            strtotime($data->created_at)) }}</span>
                                    </td>

                                    <td>
                                        <form action="{{ route('kategori.destroy', $data->id_kategori) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a type="button" data-bs-toggle="modal"
                                                data-bs-target="#viewsubkategori{{ $data->id }}"
                                                class="pt-1 pb-1 px-2 text-dark"
                                                style="border-radius: 5px; font-size: 13px; background: #FFFF00; font-weight: 800;"><i
                                                    class="bi bi-sort-down-alt"></i>
                                            </a>


                                            <a data-bs-toggle="modal" data-category="{{$data->nama_kategori}}" data-id="{{$data->id}}" data-tipe="{{ $data->tipe }}" class="passingcaty">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#Myedit" class="pt-1 pb-1 px-2 text-white" style="border-radius: 5px; font-size: 12px; border: none; background:#1592E6;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </a>

                                            <button class="bg-danger pt-1 pb-1 px-2 text-white" style="border: none; border-radius: 5px; font-size: 12px;"><i
                                                class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            
                            </tbody>
                        </table>
                    @else
                        <div class="card">
                            <div class="card-body" align="center">
                                <div class="mb-0">
                                    <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt="" class="img-fluid" width="200">
                                </div>
                                <p class="text-secondary font-weight-bold mb-0" style="font-size: 20px;">Tidak ada kategori tersedia</p>
                            </div>
                        </div>
                    @endif


                    <div class="pagination-block mt-3">
                        {{ $kategori->links('paginations.paginate') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



