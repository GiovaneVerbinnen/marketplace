@extends('layouts.app')
@section('content')

@if (!$store)
<a href="{{ route('admin.stores.create') }}" class="btn btn-lg btn-primary my-2">Criar Loja</a>
@else
<table class="table table-sriped my-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Total de Produtos</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->name }}</td>
            <td>{{ $store->products->count() }}</td>
            <td>
                <div class="btn-group">
                    <a href="{{ route('admin.stores.edit', ['store' => $store->id]) }}"
                        class="btn btn-sm btn-warning mr-2" method="post">Editar</a>

                    <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                    </form>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endif

@endsection
