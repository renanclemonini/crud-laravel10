@extends('master')

@section('content')

<div class="container my-3">
    <h2>Editar Carro</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route("cars.update", ['car'=>$car->id])}} " method="post" class="form-control">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="my-3">
            <label for="iMarca">Marca: </label>
            <input type="text" name="marca" id="iMarca" value="{{ $car->marca }}">
        </div>
        <div class="my-3">
            <label for="iModelo">Modelo: </label>
            <input type="text" name="modelo" id="iModelo" value="{{ $car->modelo }}">
        </div>
        <div class="my-3">
            <label for="iValor">Valor: </label>
            <input type="text" name="valor" id="iValor" value="{{ $car->valor }}">
        </div>
        <div class="my-3">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>


@endsection
