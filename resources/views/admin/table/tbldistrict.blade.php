@foreach($nation as $item)
<div class="modal fade" id="tbldistrict{{ $item->idnation }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-5">
                <div class="d-flex justify-content-between mb-4">
                    <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">Data
                        Wilayah Travel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times text-danger"></i></button>
                </div>

                <div class="mb-3">
                    <input type="hidden" name="idnation" value="{{ $item->idnation }}">
                    <label class="form-label text-secondary">Negara</label>
                    <input type="text" name="nation" value="{{ $item->nation }}" class="form-control text-capitalize" placeholder="Provensi" autocomplete="off" readonly>
                </div>

                <div class="col-12">
                    <a data-bs-toggle="modal" data-idn="{{$item->idnation}}" data-nation="{{$item->nation}}" class="passDistrict">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#adddistrict" class="col-12 btn btn-sm btn-dark text-white">
                            Tambah
                        </button>
                    </a>
                </div>

                <div class="table-responsive p-0 location">
                    @if ($district->count() > 0)
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
                                @foreach($district as $data)
                                    @if($item->idnation == $data->idnation)
                                    <tr>
                                        <input type="hidden" class="delete_idkab" value="{{ $data->iddistrict }}">
                                        <td class="align-middle text-center text-sm col-1">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $no++ }}</span>
                                        </td>


                                        <td class="align-middle text-center text-sm">
                                            <span class="text-dark text-capitalize">{{ $data->district }}</span>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ date('d F Y',
                                                strtotime($data->created_at)) }}</span>
                                        </td>

                                        <td>
                                            <form action="{{ route('district.destroy', $data->iddistrict) }}" method="POST">
                                                @csrf
                                                @method('delete')

                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#tblsubdistrict{{ $data->iddistrict }}"
                                                    class="pt-1 pb-1 px-2 text-dark"
                                                    style="border-radius: 5px; font-size: 13px; background: #FFFF00; font-weight: 800;"><i
                                                        class="bi bi-sort-down-alt"></i>
                                                </a>


                                                <a data-bs-toggle="modal" data-district="{{$data->district}}" data-idd="{{$data->iddistrict}}" class="editdistrict">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editdistrict" class="pt-1 pb-1 px-2 text-white" style="border-radius: 5px; font-size: 12px; border: none; background:#1592E6;">
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
@include('admin.form.wilayah.cruddistrict')
<!-- END::CRUD KABUPATEN-->

<!-- START::Table KECAMATAN-->
@include('admin.table.tblsubdistrict')
<!-- END::Table KECAMATAN-->
@endforeach