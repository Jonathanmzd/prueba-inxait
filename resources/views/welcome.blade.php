@extends('layout')

@section('title', 'Bienvenidos al Concurso - Prueba Inxait')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-6" style="background-image: url('{{ asset('img/logo-inicial.jpg') }}'); background-size: cover; background-position: center; padding: 50px;">
            <h1 class="letter-white m-5">Concurso</h1>
            <h2 class="letter-white m-5">Solo los primeros cinco inscritos podrán participar.</h2>

            @if($totalUsers >= 5)
            <div class="card m-4 d-flex justify-content-center align-items-center" style="width: 18rem;">
                <img src="{{ asset('img/win.jpg') }}" class="card-img-top" alt="Ganador" style="width: 150px;">
                <div class="card-body">
                    <h5 class="card-title"><b>Ganador del Concurso</b></h5>
                    <p class="card-text">{{ $randomUser->name }} {{ $randomUser->last_name }}</p>
                    <a href="#" class="btn btn-primary">{{ $randomUser->email }}</a>
                </div>
            </div>
            @else
            <br>
            <div class="mt-4 mb-5 mt-5 p-5">
                <a href="{{ route('registro.index') }}" class="btn btn-dark p-4 mr-2">Registrar</a>
                <a href="{{ route('resultado.index') }}" class="btn btn-dark p-4">Resultados</a>
            </div>
            @endif
            <i class="fa fa-user-circle-o" style="font-size: 80px; color:#fff"></i>
            <span class="count">
                {{ $totalUsers }}
            </span>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/detalle_prueba.jpg') }}" alt="imagen detalle prueba" style="width: 80%;">
        </div>
    </div>
</div>
@endsection
