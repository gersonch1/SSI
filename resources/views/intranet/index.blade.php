
@include('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    
</head>

    <style>
   


table  {
  text-align: center;
}

    </style>
</head>
<body>
		<div style="width:100%; max-width: 1100px; margin:0px auto;">
		@include('intranet.menu')
                <div class="table-responsive">
                <table class="table"   style="background:#8ba987 url('/images/inicio_intranet/fondo1.png');  border:none;">
                        <tbody style="border:none;">
                        <tr style="border:none;">
                        <td style="border:none;"> <img src="/images/inicio_intranet/herramientas.png" style="width:200px;" alt=""><h4>Maquinas en Uso </h4> <h5><strong>{{$inventario->Cantidad}}</strong></h5></td>
                        <td style="border:none;"><img src="/images/inicio_intranet/trabajosencurso.png" alt="" style="width:200px ;"><h4>Trabajos en Curso</h4> <h5><strong>{{$trabajoscurso->cantidad}}</h5> </td>
                        <td style="border:none;"><img src="/images/inicio_intranet/materialesenespera.png" alt="" style="width:200px ;"><h4>Materiales en espera</h4> <h5><strong>{{$materialenespera->cantidad}}</h5> </td>
                        </tr>
                        <tr style="border:none;">
                                <td style="border:none;"><img src="/images/inicio_intranet/clientes.png" style="width:200px ;" alt=""><h4>Clientes</h4> <h5><strong>{{$clientes->cantidad}}</h5>  </td>
                                <td style="border:none;"><img src="/images/inicio_intranet/inventario.png" style="width: 200px;" alt=""><h4>Cotizaciones Aceptadas</h4> <h5><strong>{{$cotizaciones->cantidad}}</h5></td>
                        <td style="border:none;"><img src="/images/inicio_intranet/convenio.png" alt="" style="width:200px;"><h4>Cantidad de Convenios</h4> <h5><strong>{{$convenios->cantidad}}</h5> </td>
                        </tr>
                        <tr style="border:none;">
                                <td style="border:none;"></td>
                        <td style="border:none;">  <img src="/images/inicio_intranet/personal.png" style="width:200px ;" alt=""><h4>Cantidad de personal</h4> <h5><strong>{{$personal->cantidad}}</h5></td>
                                <td style="border:none;"></td>
                        </tr>
                </tbody>
                </table>
                
            
      
                      
                </div>
                </div> 
                
                
        
                  
        

        
        
</body>
</html>