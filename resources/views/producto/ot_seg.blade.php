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
                    <h4>Lista de Seguimiento Trabajo</h4>
                </div>
   
                <div class="panel-body">
                        <div class="table-responsive">  
                  <table class="table" id="example">
                      <thead>
                          <tr>
                              
                            <th>Código Seguimiento</th>
                            <th>Código Orden trabajo</th>
                            <th>Estado</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <td>Acciones</td>
                          </tr>
                      </thead>
                      <tbody>
                            @foreach($seguimiento as $seguir)
                              <tr>
                                
                                <td>{{ $seguir->ID_SEGUIMIENTO }}</td>
                               
                                <td>{{ $seguir->ID_OT }}</td>
                                <td>{{ $seguir->ESTADO }}</td>
                                <td>{{ $seguir->DESCRIPCION }}</td>
                                <td>{{ $seguir->FECHA }}</td>
  
                                  
                                  <td>
                                        {!! Form::open(['route' =>['producto.destroy', $seguir->ID_SEGUIMIENTO],
                                        'method'=>'DELETE', 'onsubmit' => 'return confirm("¿Estas Seguro si desea ELIMINAR?")'])!!}
                                      <input type="hidden" name="idcoti" value=" {{$seguir->ID_SEGUIMIENTO}}">
                                     
                                    
                                   
                                   
                                     {!!Form::close()!!}
                                      
                                  </td>
                              </tr>
                              @endforeach
                      </tbody>
                     
                  </table>
                        </div>
                  
               
                  
                
                </div>
            </div>

          
                     
           
            @if( !empty($ot->ID_OT))
            
            <form  action="{{ action('ProductoController@store_seg_coti')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
               
                        <input type="hidden" name="ID_OT" value="{{$ot->ID_OT}}">     
                  
                           <br><div class="panel panel-success" style="width:100%;"> 
                                   <div class="panel-heading">
                                   <h4>Agregar Nuevo Seguimiento</h4>
                                       </div>
                                   <div class="panel-body">
                                               
                                   <div class="form-group">
                                        <div class="table-responsive">  
                                       <table class="table">
                                                               <thead>
                                                     
                                                                    <th>Estado</th>
                                                                    <th>Descripción</th>
                                                                   
                                                                    <th>Acciones</th>
                                                                       <!--<input type="button" value="Agregar" class="addRow"/>-->
                                                                   
                                                               </thead>
                                                               <tbody>
                                                                   <tr>
                                                                      
                                                                   
                                                                   
                                                                   <td> <select name="estado" class="form-control forma_pago"  style="height:35px;" id="forma_pago" required>
                                                                         <option value="" disable="true" selected="true">Seleccione Seguimiento</option>    
                                                                         <option value="En cotización">En cotización</option>
                                                                         <option value="En espera de materiales">En espera de materiales</option>
                                                                         <option value="En fabricación">En fabricación</option>
                                                                         <option value="En despacho">En despacho</option>
                                                                         <option value="Entregado">Entregado</option>
                                                                          </select>
                                                                     <td><input type="text" name="desc" style="width: 250px;" class="form-control desc"  maxlength="50" required></td>
                                                                     
                                                                        
                                                                        <td> <input type="submit" value="Guardar" class="btn btn-success"></td>
                                                                    </tr>
               
                                                               </tbody>
        
                                                           </table>
                                        </div>
                                                       </div>
                             
                                           </div>
                                       
                               
                               
                                   
                    
                                           
                       </div>
      
                     
                   </form>
                   <div style=" display: flex; 
                   flex-flow: row nowrap; 
                   ">
                   <form  action="{{ route('producto.update_ot',  $producto->ID_PRODUCTO)  }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <input type="submit" value="Terminar Trabajo" class="btn btn-success">
                    </form>
                    @if (!empty($producto->ESTADO_CONV)) 
                   <form  action="{{ route('producto.ver_orden_trabajo2',  $producto->ID_PRODUCTO)  }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <input type="submit" value="Listar Orden de Trabajo" class="btn btn-success"style="margin-left:30px;" class="btn btn-default">
                  
                    </form>

                    @else
                    <form  action="{{ route('producto.ver_orden_trabajo',  $producto->ID_PRODUCTO)  }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <input type="submit" value="Listar Orden de Trabajo" class="btn btn-success"style="margin-left:30px;" class="btn btn-default">
                  
                    </form>
                    @endif
                   @else
                 @if (!empty($producto->ESTADO_CONV))
                 <form  action="{{ route('producto.orden_trabajo',  $producto->ID_PRODUCTO)  }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div style="display:flex; flex-flow:row nowrap;">
                <input type="submit" value="Generar Orden de trabajo" class="btn btn-success">
                        
                <input type="text" name="cantidad" style="width:200px; margin-left:20px;" class="form-control" placeholder="Ingrese cantidad de productos" required>
            </div>
                </form>
                  
              
                     
                 @else
                 <form  action="{{ route('producto.orden_trabajo2',  $producto->ID_PRODUCTO)  }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div style="display:flex; flex-flow:row nowrap;">
                <input type="submit" value="Generar Orden de trabajo " class="btn btn-success">

               
            </div>
                </form>
               
                    @endif
                 @endif
                      
              
           
           
    </div>
  
</body>
</html>