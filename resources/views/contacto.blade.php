@extends('menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="shortcut icon" href="/images/png/logo.png">
    
    
</head>
<body>
    @section('contenido')
  <div  style="width: 100%; max-width:500px; margin: 50px auto;">
        
    <form  action="/enviar" method="post">
            {{csrf_field()}}
                
               <div style="width:100%; max-width:500px;">
                @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
            @endif
            <br>
                <label>Nombre:</label><br />
                <input   name="nombre" class="form-control" type="text"  required size="30" /><br />
                <label>Email:</label><br />
                <input name="email" class="form-control" type="email"  required size="30" /><br />
                <label >Mensaje:</label><br />
                <textarea class="form-control" name="mensaje" required rows="7" cols="30"></textarea><br />
          
            
                <input type="submit" class="btn btn-success" value="Enviar Email" />

            </div>
    </form>
            </div>   
      
            
            
     
        
           
   
      
    
            
          
   
    <div id="googleMap" style="width:100%;max-width:1000px;height:400px; margin: 0px auto;"></div>
    <script>
    function myMap() {
        var mapProp= {
        zoom:18,
        center: new google.maps.LatLng(-36.8041307,-73.0521895)
        ,mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        new google.maps.Marker({
                position: map.getCenter()
                , map: map
                , title: 'Pulsa aquí'
                , icon: 'http://gingerheadmoscowmule.com/wp-content/uploads/2017/05/markerimage.png'
                , cursor: 'default'
                , draggable: false
            });
        }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWJtORFuyD1EjuTYZjl5vfS1RyzpwBgrU&callback=myMap"></script>
            @endsection
        </body>

</html>
