@extends("alumno.layout")

@section("opciones")
    <div class="d-grid gap-2">
        <a class="btn btn-lg btn-block btn-outline-success mx-2" href="{{route("alumno.create")}}">Insertar</a>
    </div>

@endsection

@section("contenido")
    <div class="mx-2">
        <table class="table table-striped table-hover" style="background-color: white">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Dni</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th class="text-primary">Editar</th>
                <th class="text-danger">Borrar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumnos as $alumno)
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->dni}}</td>
                <td>{{$alumno->direccion}}</td>
                <td>{{$alumno->telefono}}</td>
                <td>
                <!--
                    <a href="{{route("alumno.edit", $alumno)}}" class="btn-primary">Editar</a></td>
                    -->
                    <form action="{{route("alumno.edit", $alumno)}}" method="GET">
                        @csrf
                        <button class="btn-info">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="{{route("alumno.destroy", $alumno)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn-danger">Borrar</button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

