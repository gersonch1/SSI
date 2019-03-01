
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css') }}">
   
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<style>
html {
  min-height: 100%;
  position: relative;
}
body {
 
  background:#8ba987 url('/images/fondo/fondo-archivo.jpg') no-repeat center center;
background-size:100% 100%;
}
</style>
</head>

<header>
        <div style="width:100%; max-width:1100px;  margin: 0px auto 0px;">

            <div class="menu_bar">
                <a href="#" class="bt_menu" style="color:#fff;">
                 <center><img src="/images/png/lineas.png" style="width:30px;" alt="">  Menú</center>   
                </a>
            
            </div>
          
            <nav>
                
                <ul class="mover">
                <li><img src="images/png/logo.png" class="logo" style="width:150px;  opacity:0.8; " alt=""></li>  
                  <div style="float:right;">
                       
                    <li><a href="/" >Inicio</a></li>
                    <li><a href="/nosotros">Nosotros</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                    <li><a href="/login">Intranet</a></li>
                </div>
                </ul>
            </nav>
        </div>
           <!-- <div style="width:500px; height:80px; opacity: 0.7; float:right;">
                                <div style="margin-top: 30px; color:#5B9600;">
                                    <div style="width:200px; float:left;">
                                    <img src="images/png/fono.png"  style="width:40px; float: left;" alt="">
                                    <div style="margin-top: 20px;">
                                    <h4><em>041-2950458</em></h3>
                                    </div>
                                    </div>  
                                    <div style="width:300px; float: right;">
                                        <img src="images/png/ubicacion.png"  style="width:40px; float: left;" alt="">
                                    <div style="margin-top: 20px;">
                                    <h4><em>Bellavista #1427 Concepción</em></h3>
                                    </div>  
                                </div> 
                                </div>
                            </div>-->
        </header>
<body>
  <link rel="shortcut icon" href="/images/png/logo.png">
    @yield('contenido')

</body>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/menu.js"></script>
<br>

<!--<footer style="margin-top:300px;">
 



    <div class="mascara_footer">
        
        <div class="contenedor_footer">

        
                            <div style="width:100% max-width:200px;float:left;  display: flex; flex-flow: row nowrap; justify-content: space-between; ">

                                <div>
                                <img src="images/png/logo.png" style="width:150px;  margin-top:20px; " alt="">
                                </div>

                                <div>
                                <p style=" width: 100%;font-size:14px; font-family:'PT Sans Narrow', sans-serif;"><strong>1460 Bellavista</strong> </p>
                                <p ><font face="Source Sans Pro" style="width: 100%;">Concepción, Región del Bío Bío</font></p>  <p><font face="Source Sans Pro" style="width: 100%;">(56-9) 98264859</font></p>
                                </div>    
                                </div>
                       
                                <div style="width:100% max-width:700px;;float:right; margin:30px auto;">
                                <a href="http://www.petroquim.cl/"> <img src="https://www.latmeco.com/wp-content/uploads/2014/01/petroquim.jpg" style="width:200px; margin-right:50px;" alt=""></a>
                                <a href="http://www.capacero.cl/"><img src=" http://www.capacero.cl/cap_acero/site/artic/20171107/imag/foto_0000000120171107150744.png" style="width:125px; margin-right:50px;" alt=""></a>
                                <a href="http://www.abastible.cl/"><img src="http://www.abastible.cl/wp-content/themes/abastible/images/logo-abastible.png" style="width:200px;margin-right:50px;" alt=""></a>
                                </div>
                
             
       
        </div>
        
    </div>
</footer>-->

<footer class="section footer-classic context-dark bg-image" style="background: #00262f; opacity:0.8;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>Somo una empresa dedicada a su rubro, con un personal dedicado y especializado, garantizando al 100% un trabajo efectivo</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">{{date('Y')}}</span><span> </span><span></span><span>. </span><span>Todos los derechos reservados.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h4><strong>Contacto:</strong> </h5>
              <dl class="contact-list">
                <dt>Dirección:</dt>
                <dd>Calle Bellavista 1427 Concepción</dd>
              </dl>
              <dl class="contact-list">
                <dt>Gmail:</dt>
                <dd><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=ingenieria.ventas@gmail.com">ingenieria.ventas@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Telefono:</dt>
                <dd><a href="tel:#">(+56-9) 98264859</a> 
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h4><strong>Links:</strong> </h5>
              <ul class="nav-list">
                <li><a href="/">Inicio</a></li>
                <li><a href="/nosotros">Nosotros</a></li>
                <li><a href="/contacto">Contacto</a></li>
                <li><a href="/login">Intranet</a></li>
               
              </ul>
            </div>
          </div>
        </div>
       <!-- <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>-->
      </footer>
</html>
