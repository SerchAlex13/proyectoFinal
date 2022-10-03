<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Torneo</title>
</head>
<body>
    <h1>Crear Torneo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/torneo" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="sede">Sede</label>
        <input type="text" name="sede" id="sede">
        <br>
        <label for="organizador">Organizador</label>
        <input type="text" name="organizador" id="organizador">
        <br>
        <label for="fundacion">Fundación</label>
        <input type="date" name="fundacion" id="fundacion">
        <br>
        <label for="numero_ediciones">Número de ediciones</label>
        <input type="number" name="numero_ediciones" id="numero_ediciones">
        <br>
        <label for="formato">Formato</label>
        <input type="text" name="formato" id="formato">
        <br>
        <label for="numero_equipos">Núumero de equipos</label>
        <input type="number" name="numero_equipos" id="numero_equipos">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>