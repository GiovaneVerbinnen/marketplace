@extends('layouts.app')
@section('content')
<h1 class="display-4">Lojas</h1>

<a href="{{ route('admin.products.create') }}" class="btn btn-lg btn-primary my-2">Criar Produto</a>

<table class="table table-sriped my-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>R$ {{ $p->price }}</td>
            <td>
                <a href="{{ route('admin.products.edit', ['product' => $p->id]) }}"
                    class="btn btn-sm btn-warning">Editar</a>
                <a href="{{ route('admin.products.destroy', ['product' => $p->id]) }}"
                    class="btn btn-sm btn-danger">Remover</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $products->links() }}
@endsection