@extends('layouts.app')
@section('content')
<h1>Editar Loja</h1>
<form action="{{ route('admin.stores.update', ['store' => $store->id]) }}" method="POST">
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="name">Nome da Loja</label>
        <input class="form-control" name="name" type="text" value="{{ $store->name }}">
    </div>
    <div class="form-group">
        <label for="description">Descricao</label>
        <input class="form-control" name="description" type="text" value="{{ $store->description }}">
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input class="form-control" name="phone" type="tel" value="{{ $store->phone }}">
    </div>
    <div class="form-group">
        <label for="mobile_phone">Telefone celular</label>
        <input class="form-control" name="mobile_phone" type="text" value="{{ $store->mobile_phone }}">
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input class="form-control" name="slug" type="text" value="{{ $store->slug }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary">Atualizar Loja</button>
    </div>
</form>
@endsection
