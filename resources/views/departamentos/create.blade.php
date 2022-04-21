@extends('layout.template')
@section('content')
    <div class="container">
        <h2>Editar el departamento</h2>
    </div>
    <div class="divider"></div>
    <div class="row">
        <form action="{{ route('departamentos.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s6 l12">
                    <input type="text" id="nombre" name="nombre" placeholder="Ej: Sonsonate">
                    <label for="nombre">Nombre del departamento</label>
                </div>
                <div class="input-field col s6 l12">
                    <input type="text" id="codigo" name="codigo" placeholder="Ej: 404">
                    <label for="codigo">Codigo del departamento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5">
                    <select name="estado" id="estado">
                        <option value="" disabled selected>ESCOGE TU OPCION</option>
                        <option value="1">ACTIVO</option>
                        <option value="0">INACTIVO</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <input type="submit" class="btn blue darken-2" value="GUARDAR">
                <input type="reset" class="btn red darken-2" value="LIMPIAR">
            </div>
        </form>
    </div>
@endsection
