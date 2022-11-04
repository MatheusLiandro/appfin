@extends('template')

@section('titulo','Extrato')

@section('conteudo')
<header class="text-center">
    EXTRATO - Saldo: R$ 9.9999,00
</header>
<div class="row">
    
    <div class="col-md-6 p-3">
        <h2>Receitas</h2>
    </div>
    <div class="col-md-6 p-3">
        <h2>Despesas</h2>
    </div>
</div>
@endsection

@section('nav-complementar')
<li class="nav-item">
<a class="nav-link" href="#">Entenda seu gastos</a>
</li>
@endsection