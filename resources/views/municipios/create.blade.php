@extends('layout.template')
@section('content')
    <div class="container">
        <h2>CREAR UN MUNICIPIO</h2>
    </div>
    <div class="divider"></div>
    <form action="{{ route('municipios.store') }}">
        <div class="row">
            <div class="input-field col s12 l12">
                <input type="text" name="nombre" placeholder="Ej: Sonsacate">
                <label for="nombre">Nombre del municipio:</label>
            </div>
            <div class="input-field col s12 l12">
                <input type="number" name="codigo" placeholder="Ej: 380">
                <label for="codigo">Codigo:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select name="estado" id="estado">
                    <option value="" disabled selected>Escoge tu opcion</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
            <div class="input-field col s6">
                <select name="id_departamento">
                    <option value="" disabled selected>Escoge tu departamento</option>
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento['id'] }}">{{ $departamento['nombre'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row" hidden>
        </div>
        <div class="row">
            <input type="submit" class="btn blue darken-2" value='ENVIAR'>
            <input type="reset" class="btn red darken-2" value='LIMPIAR'>
        </div>
    </form>
@endsection
