@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navsub')
@section('main', 'Kiano Travel')
@section('title', 'Cart Travel')
@section('judul', 'Keranjang Travel')
@section('content')

    <main class="content">
        <div class="fullwidth-block mt-2 d-none d-lg-block d-md-block"></div>
        <div class="fullwidth-block mt-0 d-lg-none d-md-none"></div>
        <div class="fullwidth-block">
            <div class="container">
                <div class="col-lg-12">
                    <h1 class="mb-0">{{ __('label.cart_anda') }}</h1>
                    <p>{{ __('label.desc_cart') }}</p>
                </div>

                @forelse ($carts as $item)
                    <div class="col-lg-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        @if ($item->types == 'produk'||$item->types == 'rental')
                                            <img src="{{ asset('library/produk/' . $item->image) }}" alt="{{$item->types}}"
                                                class="img-fluid">
                                       
                                        @elseif($item->types == 'paket')
                                            <img src="{{ asset('library/paket/' . $item->image) }}"
                                                alt="Travel image" class="img-fluid" alt="{{$item->types}}">
                                        @endif
                                    </div>

                                    <div class="d-flex justify-content-between col-md-9 pt-4">
                                        <div class="col-md-10 mb-4">
                                            @if ($item->type == 'bus')
                                                <span class="mb-0">{{ __('label.bus') }} <i class="fa-solid fa-bus"></i></span>
                                                <h2 class="mb-0">{{ $item->name }}</h2>
                                                @if($item->oldharga == "")
                                                <span class="text-dark"
                                                    style="font-size: 23px;">@currency($item->harga)</span>
                                                @else
                                                <span class="text-dark" style="font-size: 23px;">@currency($item->harga)</span>
                                                <span class="badge bg-success" style="font-size: 15px;">Promo</span><br>
                                                <span style="font-size: 18px; text-decoration: line-through;">@currency($item->oldharga)</span>
                                                @endif

                                            @elseif($item->type == 'pesawat')
                                                <span class="mb-0">{{ __('label.pesawat') }} <i class="fa-solid fa-plane"></i></span>
                                                <h2 class="mb-0">{{ $item->name }}</h2>
                                                @if($item->oldharga == "")
                                                <span class="text-dark"
                                                    style="font-size: 23px;">@currency($item->harga)</span>
                                                @else
                                                <span class="text-dark" style="font-size: 23px;">@currency($item->harga)</span>
                                                <span class="badge bg-success" style="font-size: 15px;">Promo</span><br>
                                                <span style="font-size: 18px; text-decoration: line-through;">@currency($item->oldharga)</span>
                                                @endif
                                                
                                            @elseif($item->type == 'hotel')
                                                <span class="mb-0">{{ __('label.hotel') }} <i class="fa-solid fa-bed"></i></span>
                                                <h2 class="mb-0">{{ $item->name }}</h2>
                                                @if($item->oldharga == "")
                                                <span class="text-dark"
                                                    style="font-size: 23px;">@currency($item->harga)</span>
                                                @else
                                                <span class="text-dark" style="font-size: 23px;">@currency($item->harga)</span>
                                                <span class="badge bg-success" style="font-size: 15px;">Promo</span><br>
                                                <span style="font-size: 18px; text-decoration: line-through;">@currency($item->oldharga)</span>
                                                @endif 
                                                
                                            @elseif($item->type == 'kereta')
                                                <span class="mb-0">{{ __('label.kereta') }} <i class="fa-solid fa-train"></i></span>
                                                <h2 class="mb-0">{{ $item->name }}</h2>
                                                @if($item->oldharga == "")
                                                <span class="text-dark"
                                                    style="font-size: 23px;">@currency($item->harga)</span>
                                                @else
                                                <span class="text-dark" style="font-size: 23px;">@currency($item->harga)</span>
                                                <span class="badge bg-success" style="font-size: 15px;">Promo</span><br>
                                                <span style="font-size: 18px; text-decoration: line-through;">@currency($item->oldharga)</span>
                                                @endif 

                                            @elseif($item->type == 'rental')
                                                <span class="mb-0">{{ __('label.navrent') }} <i class="fa-solid fa-car"></i></span>
                                                <h2 class="mb-0">{{ $item->name }}</h2>
                                                @if($item->oldharga == "")
                                                <span class="text-dark"
                                                    style="font-size: 23px;">@currency($item->harga)</span>
                                                @else
                                                <span class="text-dark" style="font-size: 23px;">@currency($item->harga)</span>
                                                <span class="badge bg-success" style="font-size: 15px;">Promo</span><br>
                                                <span style="font-size: 18px; text-decoration: line-through;">@currency($item->oldharga)</span>
                                                @endif 

                                            @elseif($item->type == 'paket')
                                                <span class="mb-0">{{ __('tour.nav_tour') }} <i class="bi bi-map-fill"></i></span>
                                                <h2 class="mb-0">{{ $item->name }}</h2>
                                                @if($item->oldharga == "")
                                                <span class="text-dark"
                                                    style="font-size: 23px;">@currency($item->harga)</span>
                                                @else
                                                <span class="text-dark" style="font-size: 23px;">@currency($item->harga)</span>
                                                <span class="badge bg-success" style="font-size: 15px;">Promo</span><br>
                                                <span style="font-size: 18px; text-decoration: line-through;">@currency($item->oldharga)</span>
                                                @endif 
                                            @endif
                                        </div>

                                        <div class="col-md-2">
                                            <form action="/delete_cart" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <div class="row justify-content-center">
                                                    <button type="submit" class="btn text-danger">
                                                        <i class="fa-solid fa-trash py-4" style="font-size: 25px;"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="px-4"><i class="fa-solid fa-cart-shopping"></i> {{__('label.cart_empty')}}</h1>
                            </div>
                        </div>
                    </div>
                @endforelse

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h2 class="pt-3 px-3">Total</h2>
                                <h2 class="pt-3 px-3">@currency($carts->sum('harga'))</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection
