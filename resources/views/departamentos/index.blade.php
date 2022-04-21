@extends('layout.template')
@section('content')
    <div class="row">
        <h1>LISTAR DEPARTAMENTOS</h1>
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
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->codigo }}</td>
                        <td>
                            <?php
                            if ($item -> estado == 0){
                                echo "Inactivo";
                            } if ($item -> estado == 1) {
                                echo "Activo";
                            }
                            ?>
                        </td>
                        <td>
                            
                            <form action="{{ route('departamentos.destroy', $item->id) }}" method="POST">
                                <a href="{{ route('departamentos.edit', $item->id) }}" class="btn green darken-2">EDITAR</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn red darken-2">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection