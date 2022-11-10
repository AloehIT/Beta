@extends('layouts.userslayouts.apps')
@extends('layouts.userslayouts.navsub')
@section('main', 'Kiano Travel')
@section('title', 'Cart Travel')
@section('judul', 'Keranjang Travel')
@section('content')

    <main class="content">
        <div class="slider mt-5">
            <ul class="slides">
                <li data-background="{{ URL::to('assets/apps.assets/content/cart.png') }}" class="slider">

                    <div class="container">
                        <div class="slide-caption bg-transparent col-md-12 p-auto mb-0">
                            <p class="slide-title text-white text-center mb-0" style="font-weight: 800;">{{ __('label.cart') }}</p>
                            <p class="text-white text-center" style="font-size: 20px;">Kiano Wisata Tour</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

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
                                                class="img-fluid" width="200">
                                       
                                        @elseif($item->types == 'paket')
                                            <img src="{{ asset('library/paket/' . $item->image) }}"
                                                alt="Travel image" width="200" class="" alt="{{$item->types}}">
                                        @endif
                                    </div>

                                    <div class="d-flex justify-content-between col-md-9 pt-4">
                                        <div class="col-md-10">
                                            <h2 class="mb-0">{{ $item->name }}</h2>
                                            <div class="col-12 d-flex">
                                                <p>@currency($item->harga)</p>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="text-center">
                                                <form action="/delete_cart" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <button type="submit" class="text-danger btn" style="font-size: 30px;">
                                                        <i class="fa-solid fa-xmark "></i>
                                                    </button>
                                                </form>
                                            </div>
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
