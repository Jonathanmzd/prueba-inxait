@extends('layout')

@section('title', 'Resultados')

@section('content')
<div class="row mb-5">
    <div class="col-md-6">
        <h1>Resultados</h1>
    </div>
    <div class="col-md-6 text-md-end">
        <a href="/" class="btn btn-secondary">Regresar</a>
    </div>
</div>
<table class="table table-striped">
    <a href="{{ route('export') }}" class="btn btn-success">Descargar Excel</a>

    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Departamento ID</th>
            <th>Ciudad ID</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Habeas Data</th>
            <th>Fecha de Creación</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->cedula }}</td>
            <td>{{ $user->department->name }}</td>
            <td>{{ $user->city->name }}</td>
            <td>{{ $user->cellphone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->habeas_data == 0 ? 'No' : 'Sí' }}</td>
            <td>{{ $user->created_at->format('Y/m/d H:i:s') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<nav aria-label="Paginación" class="mt-4">
    <ul class="pagination justify-content-center pagination-sm">
        @if ($users->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">Anterior</span>
        </li>
        @else
        <li class="page-item">
            <a href="{{ $users->previousPageUrl() }}" class="page-link" aria-label="Anterior">Anterior</a>
        </li>
        @endif

        @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
        @if ($page == $users->currentPage())
        <li class="page-item active">
            <span class="page-link">{{ $page }}</span>
        </li>
        @else
        <li class="page-item">
            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
        </li>
        @endif
        @endforeach

        @if ($users->hasMorePages())
        <li class="page-item">
            <a href="{{ $users->nextPageUrl() }}" class="page-link" aria-label="Siguiente">Siguiente</a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link">Siguiente</span>
        </li>
        @endif
    </ul>
</nav>
@endsection
