@extends('menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosotros</title>
    <link rel="shortcut icon" href="/images/png/logo.png">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive_nosotros.css') }}">


</head>
<body>
  @section('contenido')
      
  
    <div class="contenedor_principal">
       
<img src="/images/png/nosotros.jpg" style="width:100%;" alt="">
<div  class="contenedor_textos">  
   
        
    
        <div class="fondo">
            <img src="http://www.maestranzasanmarco.cl/images/5.jpg" class="imagen_principal"  alt="">
            <div class="textos">
            <A name="nosotros"></a>
            <p class="titulo">Nosotros</p>
                <p class="texto">Actualmente "Sociedad Servicio de Ingeniería LTDA" es una PYME dedicada a la metalurgia, 
                    radicada en la ciudad de Concepción, en la VIII region de Chile.
                   La empresa se inicio en el año 2012, y desde es momento empezamos a surgir a nivel nacional, realizando trabajos
                con gran eficacia y puntualiad. Los clientes que tenemos actualmente se encuentran satisfechos con nosotros y nuestros servicios.
                </p>
            </div>
        </div>



        <div class="fondo">
            <div class="textos">
                    <A name="mision"></a>
            <p class="titulo">Misión</p> 
                <p class="texto">Nuestra misión, como empresa proveedora de Servicios 
                    de Ingeniería Mecánica y con experiencia en el mercado de la 
                    metalmecánica es proveer a nuestros clientes con la confección, 
                    reparación y/o modificación de piezas industriales diversas, además 
                    de cubrir las necesidades de nuestros clientes ya sea en el área de 
                    la Industria Siderúrgica, Petroquímica, Pesquera, Maderera y movimiento 
                    de tierras, con los estándares de calidad que nuestros clientes requieren, 
                    en los plazos solicitados y a precios competitivos respecto de la competencia.
                </p>          
            </div>
        </div>


        <div class="fondo">
            <div class="textos">
                    <A name="vision"></a>
            <p class="titulo">Visión</p>
                <p class="texto"> Proyectarnos en el mediano y largo plazo como una empresa 
                        integrada al desarrollo en la industria metalmecánica regional contribuyendo 
                        con la producción de piezas, partes y componentes que requiere la misma, en 
                        forma capacitada a costos competitivos y comprometidos con los procesos de 
                        mejoramiento continuo y de calidad, que se traduzca en políticas y procedimientos 
                        eficientes para la fabricación de piezas, máquinas u otros elementos que aporten 
                        soluciones integrales a la región y país. De esta forma generar instancia para abrirse 
                        a nuevos mercados, además perfeccionar y optimizar los procesos, innovando con mayor 
                        facilidad y siendo capaz de enfrentar una mayor demanda, como también visualizar las 
                        nuevas oportunidades que se puedan generar.
                </p>
                
            </div>
        </div>


                    
        <div class="fondo">
            <div class="textos">
            <p class="titulo">Principales Clientes</p> 
                <p class="texto">Nuestros principales clientes como empresa, son:</p>  
                <div class="imagenes_clientes">
                <a href="http://www.abastible.cl/"><img src="https://i.vimeocdn.com/video/306283862_780x439.jpg"  style="width:200px;" alt=""></a> 
                <a href="http://www.cap.cl/">  <img src="https://s03.s3c.es/imag/_v0/770x420/7/6/2/logo-abastible.png"  style="width:200px;" alt=""></a>  
                <a href="http://www.petroquim.cl/"> <img src="https://www.latmeco.com/wp-content/uploads/2014/01/petroquim.jpg"  style="width:300px;" alt="">    </a>   
                </div>
                <br>
            </div>
        </div>
       
</div>
    </div>
    @endsection
</body>
</html>