@foreach($kab as $item)
<div class="modal fade" id="tblkec{{ $item->idkab }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-5">
                <div class="d-flex justify-content-between mb-4">
                    <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Tambah
                        Kecamatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times text-danger"></i></button>
                </div>

                <div class="mb-3">
                    <input type="hidden" name="idkab" value="{{ $item->idkab }}">
                    <label class="form-label text-secondary">Kabupaten</label>
                    <input type="text" name="prov" value="{{ $item->kab }}" class="form-control text-capitalize" placeholder="Kabupaten" autocomplete="off" readonly>
                </div>

                <div class="col-12">
                    <a data-bs-toggle="modal" data-idp="{{$item->idprov}}" data-prov="{{$item->provinsi}}" data-idk="{{$item->idkab}}" data-kab="{{$item->kab}}" class="addKec">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#addkec" class="col-12 btn btn-sm btn-dark text-white">
                            Tambah
                        </button>
                    </a>
                </div>

                <div class="table-responsive p-0 location">
                    @if ($kec->count() > 0)
                        <table class="table align-items-center mb-5 table-striped">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kabupaten
                                    </th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ditambahkan
                                    </th>

                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Aksi
                                    </th>

                                </tr>
                            </thead>

                            <tbody>
                            
                                <?php $no = 1 ?>
                                @foreach($kec as $data)
                                    @if($data->idkab == $item->idkab)
                                    <tr>
                                        <input type="hidden" class="delete_idkec" value="{{ $data->idkec }}">
                                        <td class="align-middle text-center text-sm col-1">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $no++ }}</span>
                                        </td>


                                        <td class="align-middle text-center text-sm">
                                            <span class="text-dark text-capitalize">Kecamatan {{ $data->kec }}</span>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ date('d F Y',
                                                strtotime($data->created_at)) }}</span>
                                        </td>

                                        <td>
                                            <form action="{{ route('kec.destroy', $data->idkec) }}" method="POST">
                                                @csrf
                                                @method('delete')


                                                <a data-bs-toggle="modal" data-kec="{{$data->kec}}" data-idkec="{{$data->idkec}}" class="editKec">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editkec" class="pt-1 pb-1 px-2 text-white" style="border-radius: 5px; font-size: 12px; border: none; background:#1592E6;">
                                                        <i class="bi bi-pencil-fill"></i>
                                                    </button>
                                                </a>

                                                <button class="bg-danger pt-1 pb-1 px-2 text-white" style="border: none; border-radius: 5px; font-size: 12px;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            
                            </tbody>
                        </table>
                    @else
                        <div class="card">
                            <div class="card-body" align="center">
                                <div class="mb-0">
                                    <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt="" width="100" class="img-fluid">
                                </div>
                                <p class="text-secondary font-weight-bold mb-0" style="font-size: 20px;">Tidak ada kabupaten tersedia</p>
                            </div>
                        </div>
                    @endif
                </div>

                
            </div>
        </div>
    </div>
</div>





<!-- START::CRUD KABUPATEN-->
@include('admin.form.wilayah.crudkec')
<!-- END::CRUD KABUPATEN-->
@endforeach