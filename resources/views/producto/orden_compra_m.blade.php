@include('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto</title>
    <style>

		.badge {
			float: right;
		}
	</style>
</head>

<body >
	<div style="width:100%; max-width: 1100px; margin:0px auto;">
		@include('intranet.menu')
	
    <div style="width:100%; max-width: 1100px; float: right; position:relative;"> 

        
          <div class="panel panel-success" style="margin-top:20px;">
                <div class="panel-heading">
                    <h4>Lista de Productos</h4>
                </div>
     
                <div class="panel-body">
                <form  action="{{ action('ProductoController@store_ocm')}}" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 <div class="table-responsive">	
                  <table class="table" id="example">
                  <input type="hidden" name="id_producto" value="{{$ID_PRODUCTO}}">
                  <input type="hidden" name="rut" value="{{$RUT}}">
                      <thead>
                          <tr>
                            <th>Descripción</th>
                           
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Total</th>
                          
                            <th>Estado</th>
                          </tr>
                      </thead>
                      <tbody>
                       
                         @foreach ($material as $material)
                              <tr>
                              <td>{{$material->DESCRIPCION}}</td>
                              <td>{{$material->CANTIDAD}}</td>
                              <td>${{ number_format($material->PRECIO_UNITARIO, 0, ",", ".") }}</td>
                              <td>${{ number_format($material->TOTAL, 0, ",", ".") }}</td>
                              <td>{{$material->ESTADO}}</td>
                              </tr>
                              @endforeach
                            
                      </tbody>
                  </table>
                 </div>
                 
                 
                  
                  <br>
                  @if($materiall == "ESPERA-OC")
                  <div class="table-responsive">	
                  <table class="table">
                    <thead>
                        <th>Forma de pago</th>
                        <th>Acción</th>
                    </thead>
                    <tbody>
                <td><select name="forma_pago" class="form-control forma_pago"  style="height:35px;" id="forma_pago" required>
                    <option value="" disable="true" selected="true">Seleccione Forma de pago</option>	
                <option value="Efectivo">Efectivo</option>
                <option value="Credito">Credito</option>
                    </select>
                 <td> <input type="submit" value="Generar Orden de Compra" class="btn btn-success"></td>
                </tbody>  
                </table>
                  </div>
                @endif
                </form>
              
                @if($materiales == "En Espera de Material") 
                
                <form  action="{{ action('ProductoController@confirmar_llegada')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_productoo" value="{{$ID_PRODUCTO}}">
                    <input type="hidden" name="rutt" value="{{$RUT}}">
                <input type="submit" class="btn btn-success" onclick="return confirm('Desea confirmar que los materiales han llegado??');" value="Confirmar Llegada de Material">
        </form>
        @endif
        @if($materiall != "ESPERA-OC" and !empty($ID_ORDEN_COMPRA)) 
                <form  action="{{ action('ProductoController@pdfOC')}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_productoo" value="{{$ID_PRODUCTO}}">
                        <input type="hidden" name="rutt" value="{{$RUT}}">
                        <br>
                        <input type="submit" class="btn btn-default" value="Ver PDF">
                       
                </form>
               
                @endif
                
                <br>

           
    

                @if($ID_ORDEN_COMPRA != null and $FACTURA == null)
                <div class="table-responsive">	
                <table class="table">
                <form  action="{{ action('ProductoController@store_factura_p')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <thead>
                    <th>Numero de Factura</th>
                    <th>Factura</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                <input type="hidden" name="id_productoo" value="{{$ID_PRODUCTO}}">
                <input type="hidden" name="rutt" value="{{$RUT}}">

                <td><input type="text" name="numero_factura" placeholder="Numero de Factura" style="width:200px ;" class="form-control" required></td>
                <td><input type="file" name="factura" required></td>
                <td><input type="submit" value="Subir Factura" class="btn btn-success">   </td>
                </tbody>
                @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
                @endif
                </form>
                </table>
                </div>
                @endif
              
                 @if($FACTURA != null)

                <br>
                <a href="/factura/{{$RUTA}}" class="btn btn-default">Ver Factura</a> 
                @endif
               
              
               
                </div>
            </div>


           

    </div>
	</div>

</body>
</html>