@extends('master')

@section('content')

<div class="container my-3">
    <h2>Deletar - {{ $car->marca }} {{ $car->modelo }} </h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="post" class="form-control">
        @csrf
        <input type="hidden" name="id" value="{{ $car->id }}">
        <input type="hidden" name="_method" value="DELETE">
        <p> Marca: {{ $car->marca}} </p>
        <p> Modelo: {{ $car->modelo}} </p>
        <p> Valor: {{ $car->valor}} </p>
        <div class="my-3">
            <button type="submit" class="btn btn-primary">Deletar</button>
        </div>
    </form>
</div>


@endsection
