
@extends('menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="shortcut icon" href="/images/png/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.mod.css" />
 
    
</head>

<body >

        @section('contenido')
       
        <!-- Slider responsive -->
        <div id="wowslider-container1">
                <div class="ws_images"><ul>

                <li><img src="/images/slider/Imagen4.png" alt="2" title="" id="wows1_1"/></li>
                <li><img src="/images/slider/Imagen1.png" alt="2" title="" id="wows1_1"/></li>
                <li><img src="/images/slider/Imagen2.png" alt="2" title="" id="wows1_1"/></li>
                <li><img src="/images/slider/Imagen3.png" alt="2" title="" id="wows1_1"/></li>
                </ul></div>
                <div class="ws_bullets"><div>
                <a href="#" title="2"><span><img src="tooltips/Imagen4.png" alt="2"/>2</span></a>
                <a href="#" title="2"><span><img src="tooltips/Imagen1.png" alt="2"/></span></a>
                <a href="#" title="2"><span><img src="tooltips/Imagen2.png" alt="2"/></span></a>
                <a href="#" title="2"><span><img src="tooltips/Imagen3.png" alt="2"/></span></a>
                </div></div>
                
              
        </div>



        <div class="contenedor">
                    
                <div class="marcos">   
                  
                        <center><p class="titulo">Nosotros</p></center> 
                        <div class="panel-body" >
                        <p align="justify" class="texto"><img src="/images/png/abrircomillas.png" style="width:20px;" alt=""> Actualmente "Sociedad Servicio de Ingeniería LTDA" es una PYME dedicada a la metalurgia, radicada en la ciudad de Concepción, en la VIII region de Chile. Contamos con personales calificados en su rubro y maquinarias de ultima generación especiales para distintos tipos de trabajos.
                         <img src="/images/png/cerrarcomillas.png" style="width:20px;" alt=""></p> 
                        <center>  <a href="/nosotros#nosotros" style="color:#fff; text-align: center;"><img src="http://www.aptyer.org.ar/graficos/flechagris.png" style="width:50px ;" alt=""></a></center>   
                        </div>   
                      
                    </div>
                    
                    
                    
                <div class="marcos">
                            <div >
                                    <center><p class="titulo">Misión</p></center> 
                                <div class="panel-body" >
                                    <p align="justify" class="texto"><img src="/images/png/abrircomillas.png" style="width:20px;" alt=""> Como empresa proveedora de Servicios de Ingeniería Mecánica y 
                                                                                con experiencia en el mercado de la metalmecánica es proveer a 
                                                                                nuestros clientes con la confección, reparación y/o modificación 
                                                                                de diversas piezas industriales <img src="/images/png/cerrarcomillas.png" style="width:20px;" alt=""></p> 
                                <center>  <a href="/nosotros#mision" style="color:#fff; text-align: center;"><img src="http://www.aptyer.org.ar/graficos/flechagris.png" style="width:50px ; margin-top:45px;" alt=""></a></center>   
                            
                                </div>   
                            </div>
                    </div>

                    
                    
                    
                <div class="marcos">
                            <div>
                                <center><p class="titulo">Visión</p></center> 
                                <div class="panel-body">
                                    <p align="justify" class="texto"> <img src="/images/png/abrircomillas.png" style="width:20px;" alt=""> Proyectase en el mediano y largo plazo como una empresa integrada 
                                        al desarrollo en la industria metalmecánica regional contribuyendo 
                                        con la producción de piezas, partes y componentes que requiere la misma, en forma capacitada a costos competitivos y comprometidos <img src="/images/png/cerrarcomillas.png" style="width:20px;" alt=""></p> </p> 
                                    <center> <a href="/nosotros#vision" style="color:#fff; text-align: center; " ><img src="http://www.aptyer.org.ar/graficos/flechagris.png" style="width:50px ; margin-top:20px;" alt=""></a></center> 
                            
                                </div>   
                            </div>
                    </div>
                    
        </div>
        


        <div class="contenedor2">
 
            
       
                <ul class="hoverbox">
                        <li>
                      
                        <a href="#"><img src="img/photo01.jpg" alt="description" /><img src="img/photo01.jpg" alt="description" class="preview" /></a>
                        </li>
                        <li>
                        <a href="#"><img src="img/photo02.jpg" alt="description" /><img src="img/photo02.jpg" alt="description" class="preview" /></a>
                        </li>
                        <li>
                        <a href="#"><img src="img/photo03.jpg" alt="description" /><img src="img/photo03.jpg" alt="description" class="preview" /></a>
                        </li>
                        <li>
                        <a href="#"><img src="img/photo04.jpg" alt="description" /><img src="img/photo04.jpg" alt="description" class="preview" /></a>
                        </li>      
                </ul>
                <div class="contenedor_color">
                <p class="titulo2">    
                        <img src="/images/png/abrircomillas.png" style="width:30px;" alt=""> 
                        Recientemente con Maquinas de ultima generación <img src="/images/png/cerrarcomillas.png" style="width:30px;" alt="">
                        </p> 
                    </div>
                <img src="/images/inicio/image1.jpg" class="imagen_inicio1" alt="">
            

                            
       
            
                        
            
     
        </div>
        
            
               
    <script type="text/javascript" src="js/wowslider.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
        @endsection
                
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

</html>