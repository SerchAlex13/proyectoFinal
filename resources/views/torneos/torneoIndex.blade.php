<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Listado de Torneos</h1>

    <a href="/torneo/create">Crear Nuevo Torneo</a>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Sede</th>
            <th>Organizador</th>
            <th>Fundación</th>
            <th>Número de ediciones</th>
            <th>Formato</th>
            <th>Número de equipos</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($torneos as $torneo)
            <tr>
                <td>
                    <a href="/torneo/{{ $torneo->id }}">
                        {{ $torneo->nombre }}
                    </a>
                </td>
                <td>{{ $torneo->sede }}</td> 
                <td>{{ $torneo->organizador }}</td> 
                <td>{{ $torneo->fundacion }}</td> 
                <td>{{ $torneo->numero_ediciones }}</td> 
                <td>{{ $torneo->formato }}</td>
                <td>{{ $torneo->numero_equipos }}</td> 
                <td>
                    <a href="/torneo/{{ $torneo->id }}/edit">Editar</a>
                </td>
                <td>
                    <form action="/torneo/{{ $torneo->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>