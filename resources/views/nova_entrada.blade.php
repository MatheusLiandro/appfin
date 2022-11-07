@extends('template')

@section('titulo','Nova Entrada')

@section('conteudo')
<header class="text-center">
    NOVA ENTRADA
</header>
<div class="row">
    <div class="col-md-12 p-3">
        <p>Inclua uma Receita ou Despesa</p>
    </div>
</div>
@endsection

@section('nav-complementar')
<li class="nav-item">
<a class="nav-link" href="{{route('seus_gastos')}}">Entenda seu gastos</a>
</li>
@endsection