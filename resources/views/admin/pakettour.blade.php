@extends('layouts.adminlayouts.admins')
@section('paket','active')
@section('title', 'Master Produk')
@section('subtitle', 'Paket Tour')
@section('content')

<style>
    .scroll-form
    {
        max-height: 90vh;
        overflow-y: scroll;
    }
</style>

<!----Sidebar pakettour::START--------->
<div class="min-height-300 bg-white position-absolute w-100" style="background: url('{{URL::to('assets/admin.assets/background/bgproduk.jpg')}}'); background-repeat: no-repeat; background-position: center;
  background-size: cover;">
    <div style="background: black; opacity: 32%;" class="min-height-300 w-100"></div>
</div>
@include('admin.sidebar.sidebar')
<!----Sidebar pakettour::END--------->



<main class="main-content position-relative border-radius-lg ">
    <link href="{{URL::to('assets/admin.assets/css/img.css')}}" rel="stylesheet" />
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-5 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">@yield('title')</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">@yield('subtitle')</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search"
                                aria-hidden="true"></i></span>
                        <input type="text" class="form-control px-2" onchange="searchFilter()"
                            placeholder="Paket..">
                    </div>
                </div>


                @include('admin.profile.navprofile')
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <style>
        .keterangan {
            display: -webkit-box;
            max-width: 200px;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>


    <div class="container-fluid py-4">
        <!-------------------------Count Paket Tour:START----------------->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body pt-3 pb-2 px-4 ">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers py-2">
                                    <p class="mb-0 pt-2 pb-2 text-uppercase"
                                        style="font-size: 14px; font-weight: 600; color: #ADADAD;">Tanggal</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        <?php echo date('d M Y') ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="bi bi-calendar-fill" style="font-size: 35px; color: #A7A7A7;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body pt-3 pb-3 px-4 ">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers py-2">
                                    <p class="mb-0 pt-2 pb-2 text-uppercase"
                                        style="font-size: 14px; font-weight: 600; color: #ADADAD;">Jumlah Paket</p>
                                    <h4 style="font-size: 23px; color: black;">
                                        {{ $paket->count() }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="py-4">
                                    <i class="fa-solid fa-route" style="font-size: 35px; color: #A7A7A7;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------Count Paket Tour:END------------------->


        <div style="min-height: 65vh;">
            @include('admin.table.tblpaket')
        </div>


        @include('admin.footer.footer')
    </div>
</main>


<!------modal::START--------->
<div class="modal fade" id="Myadd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">

                <div class="row mt-3">
                    <div class="col-md-6">
                        <h4>Paket Travel</h4>
                    </div>

                    <div class="col-md-6 text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times text-danger" style="font-size: 25px"></i></button>
                    </div>
                </div>


                <form action="{{ route('insert.pakettour') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.form.paket.insert')
                </form>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="Myedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">
                
                <div class="row mt-3">
                    <div class="col-md-6">
                        <h4>Paket Travel</h4>
                    </div>
    
                    <div class="col-md-6 text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times text-danger" style="font-size: 25px"></i>
                        </button>
                    </div>
                </div>
    
                
    
                <form action="{{ route('update.pakettour') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.form.paket.update')
                </form>

            </div>
        </div>
    </div>
</div>



<script>
    //Kategori
    //send kategori
    $('.sendkategori').on('change', function(){
        const kategori = $('.sendkategori').val();
        $('.kategori').val(kategori);
    });

    $('.sendsub1').on('change', function(){
        const subkategori = $('.sendsub1').val();
        $('.sub1').val(subkategori);
    });

    $('.sendsub2').on('change', function(){
        const subkategori = $('.sendsub2').val();
        $('.sub2').val(subkategori);
    });

    //send wilayah
    $('.sendprov').on('change', function(){
        const provinsi = $('.sendprov').val();
        $('.prov').val(provinsi);
    });


    $('.sendhotel').on('change', function(){
        const hotel = $('.sendhotel').val();
        $('.hotel').val(hotel);
    });

    $('.sendtransport').on('change', function(){
        const transport = $('.sendtransport').val();
        $('.transport').val(transport);
    });

    //send wilayah
    $('.sendrental').on('change', function(){
        const rental = $('.sendrental').val();
        $('.rental').val(rental);
    });



    $(document).on("click", ".passPaket", function () {
     var kode = $(this).data('kode');
     var namapaket = $(this).data('namapaket');
     
     //img
     var img1 = $(this).data('img1');
     var img2 = $(this).data('img2');
     var img3 = $(this).data('img3');
     var img4 = $(this).data('img4');
     var img5 = $(this).data('img5');
     //img

     //kategori
     var kategori = $(this).data('kategori');
     var idkat = $(this).data('idkat');
     var subkategori1 = $(this).data('sub1');
     var subkategori2 = $(this).data('sub2');
     var wilayah = $(this).data('wilayah');
     var destinasi = $(this).data('destinasi');
     var rate = $(this).data('rate');
     //kategori


     //deskripsi
     var description = $(this).data('description');
     var keterangan = $(this).data('keterangan');
     var hari = $(this).data('hari');
     var acara = $(this).data('acara');
     var program = $(this).data('program');
     //deskripsi


     //biaya
     var total = $(this).data('total');
     var promo = $(this).data('promo');
     //biaya


     //rental
     var rental = $(this).data('rental');
     var transport = $(this).data('transport');
     var hotel = $(this).data('hotel');
     //rental
     
    
  


     $(".modal-body #kode").val( kode );
     $(".modal-body #nama").val( namapaket );

     //produk
     $(".modal-body #gbr").val( img1 );
     $(".modal-body .img1").attr("src", "../library/paket/"+img1);

     $(".modal-body #gbr2").val( img2 );
     $(".modal-body .img2").attr("src", "../library/paket/"+img2);

     $(".modal-body #gbr3").val( img3 );
     $(".modal-body .img3").attr("src", "../library/paket/"+img3);

     $(".modal-body #gbr4").val( img4 );
     $(".modal-body .img4").attr("src", "../library/paket/"+img4);

     $(".modal-body #gbr5").val( img5 );
     $(".modal-body .img5").attr("src", "../library/paket/"+img5);
     //img


     $(".modal-body #kategori").val( idkat );
     $(".modal-body #sub1").val( subkategori1 );
     $(".modal-body #sub2").val( subkategori2 );

     $(".modal-body #beforekategori").text( kategori );
     $(".modal-body #beforesub1").text( subkategori1 );
     $(".modal-body #beforesub2").text( subkategori2 );

     $(".modal-body #wilayah").val( wilayah );     
     $(".modal-body #beforewilayah").text( wilayah );

     $(".modal-body #destinasi").val( destinasi );
     $(".modal-body #rate").val( rate );

     $(".modal-body .ket").val( keterangan );
     $(".modal-body .desc").val( description );

     $(".modal-body #hari").val( hari );
     $(".modal-body .acara").val( acara );
     $(".modal-body .program").val( program );

     $(".modal-body #total").val( total );
     $(".modal-body #promo").val( promo );


     //produk
     $(".modal-body #rental").val( rental );
     $(".modal-body #transport").val( transport );
     $(".modal-body #hotel").val( hotel );

     $(".modal-body #beforerental").text( rental );
     $(".modal-body #beforetransport").text( transport );
     $(".modal-body #beforehotel").text( hotel );
     //produk
    });
</script>
<!------modal::START--------->
@endsection