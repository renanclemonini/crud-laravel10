@extends('master')

@section('content')

<div class="container">
    <h1 class="text-center">Veiculos</h1>
    <div class="mb-3"> <a href="{{ route('cars.create') }}">Cadastrar Veiculo</a> </div>
    <div class="row">
        <div class="col-12">
            <ul class="list-group">
                @foreach ($cars as $car)
                <li class="list-group-item">{{ $car->marca }} {{$car->modelo}}: {{$car->valor}} | <a href="{{ route('cars.edit', ['car' => $car->id])}}">Edit</a> - <a href="{{ route('cars.show', ['car'=> $car->id])}}">Show</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


@endsection
