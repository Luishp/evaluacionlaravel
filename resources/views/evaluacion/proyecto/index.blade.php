<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Gob</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">BIENVENID@  <b>Usuario</b></span>
                <div class="mdl-layout-spacer"></div>
                <span class="mdl-layout-title"><?php echo date("d-M-Y");?></b></span>              
            </div>
        </header>
        <!-- Sidebar menu-->
        <!-- main content-->
        <main class="mdl-layout__content">
            
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
            
        </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>