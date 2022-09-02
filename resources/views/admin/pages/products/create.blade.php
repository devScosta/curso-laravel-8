@extends('admin.layouts.app')

@section('tilte', 'Cadastrar Novo Produtos')

@section('content')

    <h1>Cadastrar Novo Produto</h1>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="descripition" placeholder="Descrição:"> 
        <input type="file" name="photo" >
        <button type="submit">Enviar</button>
    </form>
@endsection