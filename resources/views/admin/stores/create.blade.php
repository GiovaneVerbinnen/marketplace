@extends('layouts.app')
@section('content')
<h1>Criar Loja</h1>
<form action="{{ route('admin.stores.store') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="name">Nome da Loja</label>
        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
            value="{{ old('name')}}">
        @error('name')
        <span class="invalid-feedback"> {{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descricao</label>
        <input class="form-control @error('description') is-invalid @enderror" name="description" type="text"
            value="{{ old('description')}}">
        @error('description')
        <span class="invalid-feedback"> {{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="tel"
            value="{{ old('phone')}}">
        @error('phone')
        <span class="invalid-feedback"> {{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="mobile_phone">Telefone celular</label>
        <input class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone" type="text"
            value="{{ old('mobile_phone')}}">
        @error('mobile_phone')
        <span class="invalid-feedback"> {{$message}}</span>
        @enderror
    </div>


    <div class="formgroup">
        <label>Logo</label><input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
    </div>
    @error('logo')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label for="slug">Slug</label>
        <input class="form-control @error('slug') is-invalid @enderror" name="slug" type="text"
            value="{{ old('slug')}}">
        @error('slug')
        <span class="invalid-feedback"> {{$message}}</span>
        @enderror
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
