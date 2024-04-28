@extends('layout')

@section('title', 'Registro')

@section('content')
<div class="row mb-5">
    <div class="col-md-6">
        <h1>Registro</h1>
    </div>
    <div class="col-md-6 text-md-end">
        <a href="/" class="btn btn-secondary">Regresar</a>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <img src="{{ asset('img/carro.jpg') }}" alt="Imagen de Registro" class="img-reg">
    </div>
    <div class="col-md-6">
        <form action="{{ route('registro.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombres:</label>
                <input type="text" class="form-control" id="name" name="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="last_name">Apellidos:</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="cedula">Cédula:</label>
                <input type="number" class="form-control" id="cedula" name="cedula">
                @error('cedula')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="department_id">Departamento:</label>
                <select class="form-control" id="department_id" name="department_id">
                    <option value="">Selecciona un departamento</option>
                    @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
                @error('department_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group" id="cityDropdown" style="display: none;">
                <label for="city_id">Ciudad:</label>
                <select class="form-control" id="city_id" name="city_id">
                </select>
                @error('city_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="cellphone">Celular:</label>
                <input type="number" class="form-control" id="cellphone" name="cellphone">
                @error('cellphone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="habeas_data" name="habeas_data">
                <label class="form-check-label" for="habeas_data">Acepto la política de tratamiento de datos</label>
                @error('habeas_data')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('department_id').addEventListener('change', function() {
        var departmentId = this.value;
        if (departmentId) {
            fetch('/get-cities/' + departmentId)
                .then(response => response.json())
                .then(data => {
                    var cityDropdown = document.getElementById('cityDropdown');
                    var citySelect = document.getElementById('city_id');
                    citySelect.innerHTML = '';
                    data.forEach(city => {
                        var option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        citySelect.appendChild(option);
                    });
                    cityDropdown.style.display = 'block';
                })
                .catch(error => console.error(error));
        } else {
            document.getElementById('cityDropdown').style.display = 'none';
        }
    });
</script>
@endsection
