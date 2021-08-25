@extends('layouts.app')
@section('content')
<h1>Criar Loja</h1>
<form action="{{ route('admin.stores.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="name">Nome da Loja</label>
        <input class="form-control" name="name" type="text">
    </div>
    <div class="form-group">
        <label for="description">Descricao</label>
        <input class="form-control" name="description" type="text">
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input class="form-control" name="phone" type="tel">
    </div>
    <div class="form-group">
        <label for="mobile_phone">Telefone celular</label>
        <input class="form-control" name="mobile_phone" type="text">
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input class="form-control" name="slug" type="text">
    </div>
    <div class="form-group">
        <label for="">Usuario</label>
        <select name="user" id="user" class="form-control">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
    </div>
</form>
@endsection
