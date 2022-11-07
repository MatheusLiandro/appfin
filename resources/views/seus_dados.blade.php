@extends('template')

@section('titulo','Seus Dados')

@section('conteudo')
<header class="text-center">
    SEUS DADOS
</header>
<div class="row">
    <div class="col-md-12 p-3">
        <h2>Olá Fulano</h2>
    </div>
</div>
@endsection

@section('nav-complementar')
<li class="nav-item">
<a class="nav-link" href="{{route('seus_gastos')}}">Entenda seu gastos</a>
</li>
@endsection