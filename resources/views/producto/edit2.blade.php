@include('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal</title>
</head>
<style>
.btn-file {
  position: relative;
  overflow: hidden;

  }
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}</style>
</head>
<body >
        <div style="width:100%; max-width: 1100px; margin:0px auto;">
            @include('intranet.menu')
            
        <div style="width:100%; max-width: 1100px; float: right; position:relative;">
        <div class="panel panel-success" style="margin-top:20px;">
                <div class="panel-heading">
                    <h4>Modificar Producto</h4>
                </div>
               
                <div class="panel-body">
                <form action="{{ route('producto.update2', $producto->ID_PRODUCTO)}}" method="POST" enctype="multipart/form-data">
               
                          {{ csrf_field() }}
                          <input name="_method" type="hidden" value="PUT">
                          
                          <p>
                            <strong><h5>Descripción</h6></strong><input type="text" name="descripcion" value="{{$producto->DESCRIPCION}}" placeholder="Descripción" class="form-control" maxlength="50"  required>
                        </p>
                        <p>
                            <strong><h5>Unidad</h6></strong><input type="text" name="unidad" value="{{$hola->UNIDAD}}" placeholder="Unidad" class="form-control" maxlength="50"  required>
                        </p>
                        <p>
                            <strong><h5>Cantidad</h6></strong> <input type="text" name="cantidad" value="{{$chao->CANTIDAD}}" placeholder="Cantidad" class="form-control" maxlength="50"  required>
                        </p>  
                          
                          
                          <p>

                                <span class="btn-file">
                                   
                                    <p>
                                        <a href="/producto/subir_plano/{{$producto->ID_PRODUCTO}}" class="btn btn-primary">Subir o Modificar Plano</a>
                                           
                                        </p>
                            </span>
                            </p>
                           
            
                            <p>
                                <input type="submit" value="Actualizar" class="btn btn-success">
                                <a href="javascript:history.back(-1);" class="btn btn-default" title="Ir la página anterior">Regresar</a>
                      </p>
                      
               
              </div>
          </div>

          @if(Session::has('message'))
          <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
      @endif
  </form>
</div>
</div>
</body>
</html>