@extends("alumno.layout")

@section("contenido")
    <fieldset class="container-fluid mx-1">
        <form action="{{route("alumno.update", $alumno)}}" method="POST" class="m-2">
        @csrf <!-- token para evitar ataque -->
            @method("PUT")

            <div class="input-group input-group-lg mx-2">
                <span class="input-group-text" id="inputGroup-sizing-lg">Nombre</span>
                <input type="text" name="nombre" value="{{$alumno->nombre}}" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="input-group input-group-lg mx-2">
                <span class="input-group-text" id="inputGroup-sizing-lg">DNI</span>
                <input type="text" name="dni" value="{{$alumno->dni}}" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="input-group input-group-lg mx-2">
                <span class="input-group-text" id="inputGroup-sizing-lg">direccion</span>
                <input type="text" name="direccion" value="{{$alumno->direccion}}" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="input-group input-group-lg mx-2">
                <span class="input-group-text" id="inputGroup-sizing-lg">telefono</span>
                <input type="text" name="telefono" value="{{$alumno->telefono}}" class="form-control"
                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>

            <input type="submit" name="submit" value="Editar" class="btn btn-lg btn-block btn-outline-success mx-2 mt-1">
        </form>
    </fieldset>
@endsection

@section("volver")
    <fieldset class="container-fluid">
        <a class="btn btn-lg btn btn-outline-danger mx-4 mt-1" href="{{route("alumno.index")}}">Cancelar</a>
    </fieldset>
@endsection
