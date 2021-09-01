@extends('layouts.front')

@section('content')

<div class="row">
    <div class="col-6">
        <h2>
            {{$product->name}}
        </h2>
        @if ($product->photos->count())
        <figure> <img src="{{ asset('storage/' . $product->photos->first()->image) }}" alt="img" class="img-fluid">
            <figcaption class="py-2">

                <span class="text-secondary ">Loja: {{ $product->store->name }}</span>

            </figcaption>
        </figure>
        @else
        <img src="{{ asset('assets/img/no-image.png') }}" alt="" class="card-img-top mx-auto" style="max-width: 200px;">
        @endif
    </div>
    <div class="col-6 mt-5">
        <div>
            <p>
                {{$product->description}}
            </p>

        </div>

        <div class="d-flex justify-content-between">
            <h4>
                R$ {{ number_format($product->price, '2', ',', '.') }}
            </h4>
            <div class="product-add col-md-12">
                <form action="{{ route('cart.add') }}" method="post">
                    @csrf
                    <input type="hidden" name="product[name]" value="{{ $product->name }}">
                    <input type="hidden" name="product[price]" value="{{ $product->price }}">
                    <input type="hidden" name="product[slug]" value="{{ $product->slug }}">
                    <p>slug: {{$product->slug}}</p>
                    <div class="form-group">
                        <label for="">Quantidade</label>
                        <div class="input-group inline-group">
                            <div class="input-group-prepend">
                                <button onclick="event.preventDefault();" class="btn btn-outline-dark btn-minus">
                                    <i class="fa fa-minus text-danger"></i>
                                </button>
                            </div>
                            <input class="form-control quantity text-center btn-outline-dark" min="0" value="1"
                                type="number" name="product[amount]">
                            <div class="input-group-append">
                                <button onclick="event.preventDefault();" class="btn btn-outline-dark btn-plus">
                                    <i class="fa fa-plus text-success"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success">Comprar</button>
                </form>
            </div>
        </div>
        <div class="row">
            {{$product->body}}
        </div>

    </div>

</div>


@endsection
