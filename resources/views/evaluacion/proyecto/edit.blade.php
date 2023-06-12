<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Gob</title>
</head>
<body>
    
</body>
</html>

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
            <h1>Editar proyecto gubernamental</h1>
            {!! Form::model($proyecto, ['route'=>['proyecto.update', $proyecto->id ], 'method'=>'PUT', 'id'=> 'formProyecto', 'class'=>'form-horizontal']) !!}
            {{ csrf_field() }}
                <fieldset>
                    <legend><p><b>Formulario </b></p></legend>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="tile-body">
                                <div class="form-group row">
                                  <label class="control-label col-md-3">Nombre del proyecto <i class="fa fa-asterisk"></i></label>
                                  <div class="col-md-8">
                                    {!! Form::text('nombreproyecto', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del proyecto . . .','id'=>'nombreproyecto', 'autofocus'=>'autofocus']) !!}
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-3">Fuente de financiamiento <i class="fa fa-asterisk"></i></label>
                                  <div class="col-md-8">
                                    {!! Form::text('fuentefondos', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la fuente de los fondos . . .','id'=>'fuentefondos', 'autofocus'=>'autofocus']) !!}
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-3">Monto Planificado <i class="fa fa-asterisk"></i></label>
                                  <div class="col-md-8">
                                    {!! Form::number('montoplanificado', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el monto planificado . . .','id'=>'montoplanificado', 'autofocus'=>'autofocus']) !!}
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-3">Monto Patrocinado <i class="fa fa-asterisk"></i></label>
                                  <div class="col-md-8">
                                    {!! Form::number('montopatrocinado', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el monto planificado . . .','id'=>'montopatrocinado', 'autofocus'=>'autofocus']) !!}
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-3">Monto Fondos Propios <i class="fa fa-asterisk"></i></label>
                                  <div class="col-md-8">
                                    {!! Form::number('montofondospropios', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el monto planificado . . .','id'=>'montofondospropios']) !!}
                                  </div>
                                </div>

                            </div>
                            <div class="tile-footer">
                                <div align="center">
                                    <a class="btn btn-outline-danger" href="{{ route('proyecto.index') }}">
                                    <i class="fa fa-fw fa-lg fa-times-circle"></i>CANCELAR
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <button class="btn btn-outline-primary" type="submit" id="guardar">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>GUARDAR
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            {!! Form::close() !!}
        </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>