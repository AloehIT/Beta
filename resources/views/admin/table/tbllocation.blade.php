<div class="row mt-4">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-3 d-flex justify-content-between">
                <h6>Tabel Wilayah</h6>
                <a type="button" data-bs-toggle="modal" data-bs-target="#Myadd"
                    class="btn text-white" style="background: #1592E6;">Tambah Wilayah</a>
            </div>
            <div class="card-body pt-0 pb-2">
                <div class="table-responsive p-0">
                    @if ($prov->count() > 0)
                        <table class="table align-items-center mb-5 table-striped">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Provinsi
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
                                @foreach($prov as $data)
                                <tr>
                                    <input type="hidden" class="delete_id" value="{{ $data->id }}">
                                    <td class="align-middle text-center text-sm col-1">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $no++ }}</span>
                                    </td>


                                    <td class="align-middle text-center text-sm">
                                        <span class="text-dark text-capitalize">Provensi {{ $data->provinsi }}</span>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ date('d F Y',
                                            strtotime($data->created_at)) }}</span>
                                    </td>

                                    <td>
                                        <form action="{{ route('prov.destroy', $data->idprov) }}" method="POST">
                                            @csrf
                                            @method('delete')

                                            <a type="button" data-bs-toggle="modal"
                                                data-bs-target="#tblkab{{ $data->idprov }}"
                                                class="pt-1 pb-1 px-2 text-dark"
                                                style="border-radius: 5px; font-size: 13px; background: #FFFF00; font-weight: 800;"><i
                                                    class="bi bi-sort-down-alt"></i>
                                            </a>


                                            <a data-bs-toggle="modal" data-prov1="{{$data->provinsi}}" data-idp1="{{$data->id}}" data-kodep1="{{$data->idprov}}" class="passProv">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#Myedit" class="pt-1 pb-1 px-2 text-white" style="border-radius: 5px; font-size: 12px; border: none; background:#1592E6;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </button>
                                            </a>

                                            <button class="bg-danger pt-1 pb-1 px-2 text-white" style="border: none; border-radius: 5px; font-size: 12px;">
                                                <i class="fas fa-trash"></i>
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
                                    <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt="" width="200" class="img-fluid">
                                </div>
                                <p class="text-secondary font-weight-bold mb-0" style="font-size: 20px;">Tidak ada master wilayah tersedia</p>
                            </div>
                        </div>
                    @endif

                    <div class="pagination-block mt-3">
                        {{ $prov->links('paginations.paginate') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



