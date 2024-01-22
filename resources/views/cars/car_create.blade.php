@extends('master')

@section('content')

<div class="container my-3">
    <h2>Cadastrar Novo Carro</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('cars.store') }}" method="post" class="form-control">
        @csrf
        <div class="my-3">
            <label for="iMarca">Marca: </label>
            <input type="text" name="marca" id="iMarca" placeholder="Marca do veiculo">
        </div>
        <div class="my-3">
            <label for="iModelo">Modelo: </label>
            <input type="text" name="modelo" id="iModelo" placeholder="Modelo do veiculo">
        </div>
        <div class="my-3">
            <label for="iValor">Valor: </label>
            <input type="text" name="valor" id="iValor" placeholder="Valor do veiculo">
        </div>
        <div class="my-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>


@endsection
