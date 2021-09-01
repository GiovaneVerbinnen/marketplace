@extends('layouts.front')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>Carrinho</h2>

    </div>
    <div class="col-12">
        @if($cart)
        <table class="table striped">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>R$ {{ $item['price'] }}</td>
                    <td>{{ $item['amount'] }}</td>
                    @php
                    $subtotal = $item['price'] * $item['amount'];
                    $total += $subtotal;
                    @endphp
                    <td>R$ {{ number_format($subtotal, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('cart.remove', ['slug' => $item['slug']]) }}"
                            class="btn btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
                @endforeach
                <tr class="font-weight-bold lead">
                    <td colspan="4">TOTAL: </td>
                    <td colspan="2">R$ {{ number_format($total, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="col-md-12">
            {{-- {{ route('cart.checkout') }} --}}
            <a class="btn btn-lg btn-success float-right" href="">Concluir Compra</a>
            <a class="btn btn-lg btn-danger float-left" href="{{ route('cart.clean') }}">Cancelar Compra</a>
        </div>

        @else
        <div class="alert alert-warning">Carrinho Vazio :( </div>
        @endif

    </div>
</div>


@endsection
