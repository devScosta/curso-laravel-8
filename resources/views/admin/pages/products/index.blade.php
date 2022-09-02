@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')
    


@section('content')

<h1>Exibindo os produtos</h1>
<a href="{{ route('products.create')}}">Cadastrar</a>
<hr>

@component('admin.components.card')
    @slot('title')
        <h2>Título Card</h2>
    @endslot
    Um card de exemplo
@endcomponent

<hr>

@include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

<hr>


@if (isset($products))

    @foreach ($products as $product)

        <p class="@if ($loop->first) last @endif">{{ $product }}</p>

    @endforeach

@endif


<hr>


@forelse ($products as $product)

    <p class="@if ($loop->last) last @endif">{{$product}}</p>

@empty

    <p>Não existe produtos cadastrados</p>

@endforelse


<hr>


    @if($teste === '123')

        É igual

    @elseif($teste == 123)

        É igual a 123

    @else

        É diferente
        
    @endif



    @unless ($teste === '123')

        dsadasda

    @endunless



    @isset($teste2)

        <p>{{ $teste2 }}</p>

    @endisset



    @empty($teste3)

        <p>Vazio...</p>    

    @endempty



    @auth
        
        <p>Autenicado</p>

        @else

        <p>Não Autenicado</p>

    @endauth




    @guest
        
        <p>Não Autenicado</p>
    
    @endguest



    @switch($teste)

        @case(1)

            Igual a 1

            @break

        @case(2)

            Igual a 2

            @break

        @case(3)

            Igual a 3

            @break

        @case(123)

            Igual a 123

            @break

        @default

            Default

    @endswitch

@endsection



@push('styles')
    <style>
        .last{background: #ccc}
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = "#998"
    </script>
@endpush