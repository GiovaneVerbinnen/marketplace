@extends('layouts.front')

@section('content')

<div class="row row-cols-1 row-cols-md-3 g-4 row-cols-1 row-cols-md-3 ">

    <div class="col-6">
        @if ($store->logo)
        <img src="{{ asset('storage/' . $store->logo) }}" class="img-fluid">
        @else
        <img src="https://via.placeholder.com/250X100.png?text=logo" alt="" class="img-fluid">
        @endif
        <h2>{{ $store->name}}</h2>
    </div>
    <div class="col-6">
        <p>{{ $store->description}}</p>

        <p>
            <strong>Contatos: </strong>
            <span>{{ $store->phone . '|' . $store->mobile_phone}}</span>
        </p>
    </div>


    <div class="col-12">
        <h4>Produtos desta loja</h4>
    </div>
    @forelse ($store->products as $key => $product)
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

    @empty
    <div class="col-12">
        <p class="alert alert-warning">
            Sem produtos para essa loja.
        </p>
    </div>
    @endforelse
</div>


@endsection
