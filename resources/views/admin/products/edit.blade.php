@extends('layouts.app')
@section('content')
<h1>Atualizar Produto</h1>
<form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST">
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PUT"> --}}
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="name">Nome do produto</label>
        <input class="form-control" name="name" type="text" value="{{ $product->name }}">
    </div>
    <div class=" form-group">
        <label for="description">Descricao</label>
        <input class="form-control" name="description" type="text" value="{{ $product->description }}">
    </div>
    <div class=" form-group">
        <label for="body">Conteúdo</label>
        <textarea class="form-control" name="body" id="" cols="30" rows="10">{{ $product->body }}"</textarea>
    </div>
    <div class="form-group">
        <label for="price">Preço</label>
        <input class="form-control" name="price" type="text" value="{{ $product->price }}">
    </div>
    <div class=" form-group">
        <label for="slug">Slug</label>
        <input class="form-control" name="slug" type="text" value="{{ $product->slug }}">
    </div>

    <div>
        <button type=" submit" class="btn btn-lg btn-success">Atualizar Produto</button>
    </div>
</form>
@endsection
