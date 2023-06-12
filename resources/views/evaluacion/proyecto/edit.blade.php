<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Gob</title>
</head>
<body>
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
</body>
</html>