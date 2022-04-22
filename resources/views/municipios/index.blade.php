@extends('layout.template')
@section('content')
    <div class="container">
        <h1>Listar municipios</h1>
    </div>
    <div class="divider"></div>
    <div class="row">
        <table class="bordered centered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CODIGO</th>
                    <th>ESTADO</th>
                    <th>DEPARTAMENTO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipio as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->codigo }}</td>
                        <td>
                            <?php
                            if ($item->estado == 0) {
                                echo 'Inactivo';
                            }
                            if ($item->estado == 1) {
                                echo 'Activo';
                            }
                            ?>
                        </td>
                        <td>
                        <?php
                        if ($item->departamento_id == 1){
                            echo "Sonsonate";
                        }if ($item->departamento_id == 2){
                            echo "";
                        }
                        ?>
                        </td>
                        <td>
                            <form action="{{ route('municipios.destroy', $item->id) }}" method="POST">
                                <a href="{{ route('municipios.edit', $item->id) }}" class="btn green darken-2">Editar</a>
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn red darken-2" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
