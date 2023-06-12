<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Gob</title>
</head>
<body>
    <h1>Listado de proyectos gubernamentales</h1>
    
    <a 
        class="btn btn-outline-success pull-right" 
        href="{{ route('proyecto.create') }}">
        <i class="fa fa-plus"></i>
        Crear Nuevo Proyecto
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Proyecto</th>
                <th scope="col">Fuente de Financiamiento</th>
                <th scope="col">Monto Planificado</th>
                <th scope="col">Monto Patrocinado</th>
                <th scope="col">Monto Fondos Propios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->nombreproyecto }}</td>
                    <td>{{ $proyecto->fuentefondos }}</td>
                    <td>{{ $proyecto->montoplanificado }}</td>
                    <td>{{ $proyecto->montopatrocinado }}</td>
                    <td>{{ $proyecto->montofondospropios }}</td>
                    <td>
                        <a href="{{ route('proyecto.edit', $proyecto->id) }}">Editar</a>
                        <a href="{{ route('proyecto.destroy', $proyecto->id) }}">Eliminar</a>
                        <a href="{{ route('proyecto.pdf', $proyecto->id) }}">Reporte</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>