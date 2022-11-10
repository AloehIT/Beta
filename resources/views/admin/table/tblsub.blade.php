

@foreach($kategori as $kat)
<div class="modal fade" id="viewsubkategori{{ $kat->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-5">
                <div class="d-flex justify-content-between mb-4">
                    <h5 class="modal-title text-secondary" id="staticBackdropLabel" style="font-size: 15px;">
                        Sub-Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times text-danger"></i></button>
                </div>

                <div class="mb-2">
                    <label for="kategori" class="form-label text-secondary">Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="kategori" readonly
                        placeholder="Nama Kategori" value="{{ $kat->nama_kategori }}">
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <div class="row justify-content-between">
                                    <div class="col-md-12">
                                        <a data-bs-toggle="modal" data-idk="{{ $kat->id_kategori }}"
                                            data-tipe="{{ $kat->tipe }}" class="passingKat">
                                            <button type="button" class="btn btn-sm text-white col-12" data-bs-toggle="modal"
                                                data-bs-target="#Myaddsub" style="background: #1592E6;">
                                                Tambah Sub Kategori
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0 pb-3">
                                <div class="d-flex col-md-6 pb-2">
                                    <span class="btn btn-sm btn-secondary">Kategori 1</span>
                                </div>
                                <div class="table-responsive p-0 kategori">
                                    <div id="kategori1">
                                        @if ($subkategori1->count() > 0)
                                        <table class="table align-items-center table-striped">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        No
                                                    </th>

                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Kode
                                                    </th>

                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Kategori
                                                    </th>

                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Sub
                                                    </th>

                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Aksi
                                                    </th>

                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php $no = 1 ?>
                                                @foreach($subkategori1 as $data)
                                                @if($data->id_kategori == $kat->id_kategori)
                                                <tr>
                                                    <input type="hidden" class="delete_id" value="{{ $data->id }}">
                                                    <td class="align-middle text-center text-sm col-1">
                                                        <span class="text-secondary text-xs font-weight-bold">{{ $no++
                                                            }}</span>
                                                    </td>

                                                    <td>
                                                        <span class="text-secondary text-xs font-weight-bold mb-0">{{
                                                            $data->id_subkategori }}</span>
                                                    </td>

                                                    <td>
                                                        <span class="text-secondary text-xs font-weight-bold mb-0">{{
                                                            $data->subkategori }}</span>
                                                    </td>

                                                    <td>
                                                        <span class="text-secondary text-xs font-weight-bold mb-0">{{
                                                            $data->sub }}</span>
                                                    </td>

                                                    <td>
                                                        <form action="{{ route('subkategori.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')

                                                            <a data-bs-toggle="modal" data-subcategory="{{$data->subkategori}}" data-sub="{{$data->sub}}" data-ids="{{$data->id}}" data-kode="{{$data->id_subkategori}}" class="passingsub">
                                                                <button type="button" data-bs-toggle="modal" data-bs-target="#Myeditsub" class="pt-1 pb-1 px-2 text-white" style="border-radius: 5px; font-size: 12px; border: none; background:#1592E6;">
                                                                    <i class="bi bi-pencil-fill"></i>
                                                                </button>
                                                            </a>

                                                            <button class="bg-danger pt-1 pb-1 px-2 text-white"
                                                                style="border-radius: 5px; font-size: 12px; border: none;"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach

                                            </tbody>
                                        </table>
                                        @else
                                        <div class="card mb-3">
                                            <div align="center">
                                                <span class="text-secondary text-xs font-weight-bold mb-0">Tidak ada
                                                    kategori tersedia</span>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0 pb-2">
                                <div class="d-flex col-md-6 pb-2">
                                    <span class="btn btn-sm btn-secondary">Kategori 2</span>
                                </div>

                                <div class="table-responsive p-0 kategori">
                                    <div id="kategori2">
                                        @if ($subkategori2->count() > 0)
                                        <table class="table align-items-center  table-striped">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        No
                                                    </th>

                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Kode
                                                    </th>

                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Kategori
                                                    </th>

                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Sub
                                                    </th>

                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Aksi
                                                    </th>

                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php $no = 1 ?>
                                                @foreach($subkategori2 as $data)
                                                @if($data->id_kategori == $kat->id_kategori)
                                                <tr>
                                                    <input type="hidden" class="delete_id" value="{{ $data->id }}">
                                                    <td class="align-middle text-center text-sm col-1">
                                                        <span class="text-secondary text-xs font-weight-bold">{{ $no++
                                                            }}</span>
                                                    </td>

                                                    <td>
                                                        <span class="text-secondary text-xs font-weight-bold mb-0">{{
                                                            $data->id_subkategori }}</span>
                                                    </td>

                                                    <td>
                                                        <span class="text-secondary text-xs font-weight-bold mb-0">{{
                                                            $data->subkategori }}</span>
                                                    </td>

                                                    <td>
                                                        <span class="text-secondary text-xs font-weight-bold mb-0">{{
                                                            $data->sub }}</span>
                                                    </td>

                                                    <td>
                                                        <form action="{{ route('subkategori.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')

  
                                                            <a data-bs-toggle="modal" data-subcategory="{{$data->subkategori}}" data-sub="{{$data->sub}}" data-ids="{{$data->id}}" data-kode="{{$data->id_subkategori}}" class="passingsub">
                                                                <button type="button" data-bs-toggle="modal" data-bs-target="#Myeditsub" class="pt-1 pb-1 px-2 text-white" style="border-radius: 5px; font-size: 12px; border: none; background:#1592E6;">
                                                                    <i class="bi bi-pencil-fill"></i>
                                                                </button>
                                                            </a>

                                                            <button class="bg-danger pt-1 pb-1 px-2 text-white"
                                                                style="border-radius: 5px; font-size: 12px; border: none;">
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
                                        <div class="card mb-3">
                                            <div align="center">
                                                <span class="text-secondary text-xs font-weight-bold mb-0">Tidak ada
                                                    kategori tersedia</span>
                                            </div>
                                        </div>
                                        @endif
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script> 
{{-- <script>
    $(document).ready(function() {
        $('#kategorisubb').on('change', function() {
            let kategori = $(this).val();

            console.log('hello')
            
            if (kategori === "kat1") {
                let kategori1 = document.getElementById("kategori1");
                kategori1.style.display="block";

                let kategori2 = document.getElementById("kategori2");
                kategori2.style.display="none";                
            }
            
            
            else if(kategori === "kat2" ) {
                let kategori1 = document.getElementById("kategori2");
                kategori1.style.display="block";

                let kategori2 = document.getElementById("kategori1");
                kategori2.style.display="none";                
                
            }

        });
    });
</script> --}}
