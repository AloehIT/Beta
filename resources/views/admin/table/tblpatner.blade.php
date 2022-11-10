<div class="row mt-5">
    <div class="mb-3" style="font-weight: 500;">
        <h5>Patner Travel</h5>
    </div>

    <div class="col-lg-9 col-md-12">
        <div class="row">
            @if(isset($patner))
                @if($patner->count() > 0)
                    @foreach($patner as $data)
                        <div class="col-lg-4 col-md-3">
                            <div class="card" style="border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
                                <img src="{{ asset('library/patner/'.$data->img_patner) }}" class="card-img-top" alt="" style="max-height: 200px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="card-body p-3">
                                    <div class="mt-2 text-center">
                                        <h4 class="heading col-12 text-dark mb-3 text-capitalize" style="font-size: 15px; text-align: center;">{{ $data->nama_patner }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a type="button" data-bs-toggle="modal"
                                data-bs-target="#Mydeleted{{ $data->id }}" class="btn col-md-12 col-12 p-2 text-white" style="border-top-left-radius: 0; border-top-right-radius: 0; 
                                border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; font-size: 20px; background: #FF0027;">Hapus</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body d-flex justify-content-center">
                                <div>
                                    <img src="{{ URL::to('assets/apps.assets/icons/noproduct.png') }}" alt="">
                                    <p>Belum ada patner ditambahkan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif


            <div class="pagination-block mt-3">
                {{ $patner->links('paginations.paginate') }}
            </div>
        </div>
    </div>



    <div class="col-lg-3">
       <div class="text-center pt-5 mt-5">
            <div class="mb-3">
                <img src="{{URL::to('assets/admin.assets/background/bgkonten.png')}}" alt="" width="120" style="border-radius: 20px;">
            </div>

            <button data-bs-toggle="modal" data-bs-target="#Myadd" class="btn" style="background: #1592E6; color: white;">Tambah Patner</button>
       </div>
    </div>
</div>