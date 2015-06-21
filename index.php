<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cómito Olímpico</title>
    <link rel="stylesheet" href="css/slider.css"/>
    <link rel="stylesheet" href="style.css"/>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jssor.slider.mini.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = { 
                $AutoPlay: true,
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $ChanceToShow: 2,
                    $SpacingX: 10,
                    $SpacingY: 10,
                    $AutoCenter: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $ChanceToShow: 2,
                    $AutoCenter: 2                } 
            };
            var jssor_slider1 = new $JssorSlider$('slider1_container', options);
        });
    </script>
  </head>
  <body>
    <div class="header">
        <div class="container">
            <div class="top-bar">
                <ul class="social">
                        <li class="twitter"><a href=""></a></li>
                        <li class="facebook"><a href=""></a></li>     
                        <li class="instagram"><a href=""></a></li>        
                        <li class="youtube"><a href=""></a></li>        
                        <li class="linkedin"><a href=""></a></li> 
                </ul>
                <ul class="share">
                        <li class="share-icon"><a href=""></a></li>
                        <li class="email-icon"><a href=""></a></li>     
                        <li class="chat-icon"><a href=""></a></li>   
                </ul>
                <div class="search">
                    <input type="text"/>
                    <input id="search" value="search"/>
                </div>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="">COV</a></li>
                    <li><a href="">JJOO</a></li>
                    <li><a href="">Ciclo Olímpico</a></li>
                    <li><a href="">Disciplinas</a></li>
                    <li><a href="">Atletas</a></li>
                    <li><a href="">Federaciones</a></li>
                    <li><a href="">Fotos</a></li>
                    <li><a href="">Videos</a></li>
                    <li><a href="">Noticias</a></li>
                </ul>
            </nav>
            <div class="logo">
                <img src="./img/logo.png"/>
            </div>
        </div> 
        <div class="clear"></div>
    </div>   
    <div class="body">
        <div class="container">
            <div class="row">
                <div id="slider1_container" class="noticias-slider" style="position: relative; top: 0px; left: 0px; width: 645px; height: 389px;">
                    <!-- Slides Container -->
                    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 645px; height: 389px;">
                        <div><img u="image" src="image1.jpg" /></div>
                        <div><img u="image" src="image2.jpg" /></div>
                        <div><img u="image" src="image3.jpg" /></div>
                        <div><img u="image" src="image4.jpg" /></div>
                        <div><img u="image" src="image5.jpg" /></div>
                        <div><img u="image" src="image6.jpg" /></div>
                        <div><img u="image" src="image7.jpg" /></div>
                        <div><img u="image" src="image8.jpg" /></div>
                    </div>
                    <!-- Arrow Left -->
                    <span u="arrowleft" class="jssora10l" style="top: 123px; left: 8px;">
                    </span>
                    <!-- Arrow Right -->
                    <span u="arrowright" class="jssora10r" style="top: 123px; right: 8px;">
                    </span>
                    <!-- bullet navigator container -->
                    <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                        <!-- bullet navigator item prototype -->
                        <div u="prototype"></div>
                    </div>
                </div>
                <div class="twitter-box">
                    <a class="twitter-timeline" href="https://twitter.com/PuntoOlimpico" data-widget-id="612438112430653445">Tweets por el @PuntoOlimpico.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="actions">
                     <div class="posiciones sq"><a href=""></a></div>
                     <div class="olimpismo sq"><a href=""></a></div>
                     <div class="oficiales sq"><a href=""></a></div>
                     <div class="boletin"><a href=""></a></div>
                     <div class="media"><a href=""></a></div>
                     <div class="calendario"><a href=""></a></div>
                     <div class="toronto"><a href=""></a></div>
                     <div class="contacto"><a href=""></a></div>
                     <div class="ubicanos"><a href=""></a></div>
                </div>
                <div class="clear"></div>
            </div>
             <div class="row">
                   <div class="noticias">
                        <h1>Noticias</h1>
                        <p>Blah blah algun texto irá aquí sobre las noticias más importantes. bli bli
                        blu blu. Blah blah algun texto irá aquí sobre las noticias.</p>
                        <p class="plus"><img src='./img/plus.png'/></p>
                 </div>
                 <div class="atletas">
                    <div class="toronto_atletas"><a href=""></a></div>
                     <div class="punto_olimpico"><a href=""></a></div>
                 </div>
                 <div class="jug">
                    <img src="./img/jugador.png" class="jugador"/>
                 </div> 
             <div class="clear"></div>
             </div>
             <div class="row">
                 <div class="banner">Publicidad</div>
             </div>
             <div class="row">
                 <div class="videos"></div>
                 <div class="galeria"></div>
                 <div class="clear"></div>
             </div>
             <div class="row">
                 <div class="redes">
                    <span>Redes Sociales</span>
                    <ul class="social-bottom">
                        <li class="twitter-b"><a href=""></a></li>
                        <li class="facebook-b"><a href=""></a></li>
                        <li class="instagram-b"><a href=""></a></li>
                        <li class="youtube-b"><a href=""></a></li>
                        <li class="linkedin-b"><a href=""></a></li>
                    </ul>
                 </div>
                 <div class="clear"></div>
             </div>
              <div class="row">
                 <div class="map">
                    <div class="r9">
                        <span>COV</span>
                        <ul class="map-cov">
                            <li><a href="">Historia del COV</a></li>
                            <li><a href="">Autoridades</a></li>
                            <li><a href="">El organismo</a></li>
                            <li><a href="">Patrocinantes</a></li>
                        </ul>
                    </div>
                    <div class="r9">
                        <span>JJOO</span>
                        <ul class="map-jjoo">
                            <li><a href="">Participación</a></li>
                            <li><a href="">Olímpicos Juveniles</a></li>
                        </ul>
                    </div>
                    <div class="r9">
                        <span>Ciclo Olímpico</span>
                        <ul class="map-co">
                            <li><a href="">Panamericanos</a></li>
                            <li><a href="">Centroamericanos</a></li>
                            <li><a href="">Suramericanos</a></li>
                            <li><a href="">Puntos para JJOO</a></li>
                        </ul>
                    </div>
                    <div class="r9">
                        <span>Disciplinas</span>
                        <ul class="disciplinas">
                            <li><a href="">JJOO</a></li>
                            <li><a href="">Ciclo Olímpicos</a></li>
                        </ul>
                    </div>
                    <div class="r9">
                        <span>Atletas</span>
                        <ul class="map-atletas">
                            <li><a href="">Registrados</a></li>
                            <li><a href="">Participación Ciclo</a></li>
                            <li><a href="">Participación JJOO</a></li>
                        </ul>
                    </div>
                    <div class="r9">
                        <span>Federación</span>
                        <ul class="map-federacion">
                            <li><a href="">Asociadas</a></li>
                        </ul>
                    </div>
                    <div class="r9">
                        <span>Fotos</span>
                        <ul class="map-fotos">
                            <li><a href="">Eventos deportivos</a></li>
                        </ul>
                    </div>
                    <div class="r9">
                        <span>Vídeos</span>
                        <ul class="map-videos">
                            <li><a href="">Eventos deportivos</a></li>
                        </ul>
                    </div>
                    <div class="r9">
                        <span>Noticias</span>
                        <ul class="map-fotos">
                            <li><a href="">Notas</a></li>
                            <li><a href="">Eventos</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                 </div>
             </div>
        </div> 
    </div>   
    <div style="height: 40px;"></div>
  </body>
</html>