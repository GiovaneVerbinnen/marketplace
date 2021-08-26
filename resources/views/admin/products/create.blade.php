@extends('layouts.app')
@section('content')
<h1>Criar Produto</h1>
<form action="{{ route('admin.products.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="name">Nome do produto</label>
        <input class="form-control" name="name" type="text">
    </div>
    <div class="form-group">
        <label for="description">Descricao</label>
        <input class="form-control" name="description" type="text">
    </div>
    <div class="form-group">
        <label for="body">Conteúdo</label>
        <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Preço</label>
        <input class="form-control" name="price" type="text">
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input class="form-control" name="slug" type="text">
    </div>
    <div class="form-group">
        <label for="">Lojas</label>
        <select name="user" id="user" class="form-control">
            @foreach ($stores as $store)
            <option value="{{$store->id}}">{{$store->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
    </div>
</form>
@endsection
