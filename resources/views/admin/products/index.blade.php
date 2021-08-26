@extends('layouts.app')
@section('content')
<h1 class="display-4">Produtos</h1>

<a href="{{ route('admin.products.create') }}" class="btn btn-lg btn-primary my-2">Criar Produto</a>

<table class="table table-sriped my-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>R$ {{ number_format($p->price, 2, ',', '.') }}</td>
            <td>{{ $p->store->name }}</td>
            <td>
                <div class="btn-group">
                    <a href="{{ route('admin.products.edit', ['product' => $p->id]) }}"
                        class="btn btn-sm btn-warning mr-2">Editar</a>
                    <form action=" {{ route('admin.products.destroy', ['product' => $p->id]) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm btn-danger ">Remover</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $products->links() }}
@endsection
