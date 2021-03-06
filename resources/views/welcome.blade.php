@extends('layouts.front')

@section('content')

<div class="row my-4">
    <div class="col-12">
        <h2>Lojas Destaque</h2>
        <hr>
    </div>
    @foreach ($stores as $store)
    <div class="col-4">
        @if ($store->logo)
        <img src="{{ asset('storage/' . $store->logo) }}" class="img-fluid">
        @else
        <img src="https://via.placeholder.com/250X100.png?text=logo" alt="" class="img-fluid">
        @endif
        <h3>{{$store->name}}</h3>
        <p>{{$store->description}}</p>
        <a href="{{route('store.single', ['slug' => $store->slug])}}" class="btn btn-sm btn-primary">Ver Loja</a>
    </div>
    @endforeach
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 row-cols-1 row-cols-md-3">
    @foreach ($products as $key => $product)
    <div class="col-xs-12 col-md-6 col-lg-4 mb-4">
        <div class="card mx-auto" style="width: 100%;">
            @if ($product->photos->count())
            <img src="{{ asset('storage/' . $product->photos->first()->image) }}" alt="" class="card-img-top mx-auto"
                style="max-width: 200px;">
            @else
            <img src="{{ asset('assets/img/no-image.png') }}" alt="" class="card-img-top mx-auto"
                style="max-width: 200px;">
            @endif
            <div class="card-body  ">
                <h2 class="card-title">{{ $product->name }}</h2>
                <p class="card-test">{{ $product->description }}</p>
                <h4>
                    R$ {{ number_format($product->price, '2', ',', '.') }}
                </h4>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('product.single', ['slug' => $product->slug]) }}"
                        class="btn btn-block btn-lg btn-success">Ver
                        Produto</a>
                    {{-- <a href="#" class="btn btn-danger ">Comprar</a> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- @if(($key + 1) % 3 == 0) </div>
<div class="row"> @endif --}}
    @endforeach
</div>


@endsection
