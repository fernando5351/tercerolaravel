@extends('layout.template')
@section('content')
    <div class="container">
        <h2>EDITAR UN MUNICIPIO</h2>
    </div>
    <div class="divider"></div>
    <form action="">
        <div class="row">
            <div class="input-field col s12 l12">
                <input type="text" placeholder="Ej: Sonsacate">
                <label for="first_name">Nombre del municipio:</label>
            </div>
            <div class="input-field col s12 l12">
                <input type="number" placeholder="Ej: 380">
                <label for="last_name">Codigo:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-fiel col s5">
                <form action="">
                    <select name="" id="">
                        <option value="" disabled selected>ESTADO</option>
                        <option value="">Activo</option>
                        <option value="">Inactivo</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="row">
            <a type="submit" class="btn blue darken-2" href="">ACTUALIZAR</a>
            <a type="reset" class="btn red darken-2" href="{{ route('municipios.index') }}">CANCELAR</a>
        </div>
    </form>
@endsection