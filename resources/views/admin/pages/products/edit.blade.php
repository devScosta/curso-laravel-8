@extends('admin.layouts.app')

@section('tilte', 'Editar Produto')

@section('content')

    <h1>Editar Produto {{$id}} </h1>

    <form action="{{ route('products.update', $id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="descripition" placeholder="Descrição:"> 
        <button type="submit">Enviar</button>
    </form>
@endsection