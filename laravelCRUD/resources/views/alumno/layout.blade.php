<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}"><!-- Carga bootstrap -->
    <script src="{{asset("js/app.js")}}"></script><!-- Jquery -->

</head>
<body style="background-color: #fbfafb">
<!-- Titulo -->
<div class="d-flex bd-highlight">
    <div class="p-2 flex-fill bd-highlight"></div>
    <div class="p-2 flex-fill bd-highlight text-info"><h1>CRUD de Alumnos</h1></div>
</div>


<!-- Muestra el mensaje si existe -->
@isset($msj)
    <div class="d-flex bd-highlight">
        <div class="p-2 flex-fill bd-highlight"></div>
        <div class="p-2 flex-fill bd-highlight text-info"><h2>{{$msj}}</h2></div>
    </div>
@endisset


<!-- opciones -->
@yield("opciones")


<!-- contenido -->
@yield("contenido")

<!-- Volver -->
@yield("volver")

<footer class="footer text-center d-flex bd-highlight font-monospace">
    <div class="p-2 flex-fill bd-highlight">©2021 Copyright</div>
    <div class="p-2 flex-fill bd-highlight">Author: Mario S Pérez</div>
    <div class="p-2 flex-fill bd-highlight">Class: 2ºDAW Desarrollo Web en entorno Servidor</div>

    <!--
    ©2021 Copyright Author: Mario S Pérez Class: 2ºDAW Desarrollo Web en entorno Servidor
    -->
</footer>


</body>
</html>
