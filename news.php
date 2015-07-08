<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Comit&eacute; Ol&iacute;mpico</title>
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
            
            $("div[u='navigator']").children('div').each(function(i){
                $(this).addClass("background"+i);
            });
        });
    </script>
  </head>
  <body>
    <div class="wrapper-news">
        <div class="header">
            <div class="container">
                <div class="top-bar">
                    <ul class="social">
                            <li class="twitter"><a target="_blank"  href="https://twitter.com/officialCOV"></a></li>
                            <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/Comit%C3%A9-Ol%C3%ADmpico-Venezolano/489886661036281"></a></li>     
                            <li class="instagram"><a  target="_blank" href="http://instagram.com/covofficial"></a></li>        
                            <li class="youtube"><a target="_blank"  href=""></a></li>      
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
                    <li><a href="">Ciclo Ol&iacute;mpico</a></li>
                    <li><a href="">Disciplinas</a></li>
                    <li><a href="">Atletas</a></li>
                    <li><a href="">Federaciones</a></li>
                    <li><a href="">Fotos</a></li>
                    <li><a href="">Videos</a></li>
                    <li><a class="current" href="">Noticias</a></li>
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
                        <div class="1">
                            <span class="title">
                                <h2>Toronto <span>2015</span></h2>
                                <h3>Juegos Panamericanos Toronto 2015</h3>
                            </span>
                            <span class="noti-plus"><a href="#"><img src="img/plus.png" /></a></span>
                            <img u="image" src="image1.jpg" />
                        </div>
                        <div>
                            <span class="title">
                                <h2>Toronto <span>2015</span></h2>
                                <h3>Juegos Panamericanos Toronto 2015</h3>
                            </span>
                            <span class="noti-plus"><a href="#"><img src="img/plus.png" /></a></span>
                            <img u="image" src="image2.jpg" />
                        </div>
                        <div>
                            <span class="title">
                                <h2>Toronto <span>2015</span></h2>
                                <h3>Juegos Panamericanos Toronto 2015</h3>
                            </span>
                            <span class="noti-plus"><a href="#"><img src="img/plus.png" /></a></span>
                            <img u="image" src="image3.jpg" />
                        </div>
                        <div>
                            <span class="title">
                                <h2>Toronto <span>2015</span></h2>
                                <h3>Juegos Panamericanos Toronto 2015</h3>
                            </span>
                            <span class="noti-plus"><a href="#"><img src="img/plus.png" /></a></span>`
                            <img u="image" src="image4.jpg" />
                        </div>
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
                    <p>Aquí irían las noticias más importantes con una pequeña descripción.</p>
             </div>
                <div class="twitter-box">   
                    <h1>Twitter <img src="./img/twitter_hover.png" alt="Twitter" style="vertical-align: middle;"/></h1>
                    <a class="twitter-timeline" href="https://twitter.com/OfficialCOV" data-widget-id="617727791954558976">Tweets por el @OfficialCOV.</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
         <div class="clear"></div>
         </div>
         <div class="row">
              <div class="videos">
                    <iframe id="ytplayer" type="text/html" width="576" height="324"
                    src="https://www.youtube.com/embed/?listType=user_uploads&list=araymoisesramon&theme=light"
                    frameborder="0" allowfullscreen></iframe>
                 </div>
             <div class="galeria"></div>
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
                                <li><a href="">Participaci&oacute;n</a></li>
                                <li><a href="">Ol&iacute;mpicos Juveniles</a></li>
                            </ul>
                        </div>
                        <div class="r9">
                            <span>Ciclo Ol&iacute;mpico</span>
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
                                <li><a href="">Ciclo Ol&iacute;mpicos</a></li>
                            </ul>
                        </div>
                        <div class="r9">
                            <span>Atletas</span>
                            <ul class="map-atletas">
                                <li><a href="">Registrados</a></li>
                                <li><a href="">Participaci&oacute;n Ciclo</a></li>
                                <li><a href="">Participaci&oacute;n JJOO</a></li>
                            </ul>
                        </div>
                        <div class="r9">
                            <span>Federaci&oacute;n</span>
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
                            <span>V&iacute;deos</span>
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
                         <div class="redes">
                            <span>Redes Sociales</span>
                            <ul class="social-bottom">
                                <li class="twitter-b"><a  target="_blank" href="https://twitter.com/officialCOV"></a></li>
                                <li class="facebook-b"><a target="_blank" href="https://www.facebook.com/pages/Comit%C3%A9-Ol%C3%ADmpico-Venezolano/489886661036281"></a></li>
                                <li class="instagram-b"><a target="_blank" href="http://instagram.com/covofficial"></a></li>
                                <li class="youtube-b"><a target="_blank"  href=""></a></li>
                            </ul>
                         </div>
                        <div class="clear"></div>
                     </div>
                 </div>
                
            </div> 
             <div class="row last">
                <div class="pat-ofic">Patrocinantes Oficiales</div>
                <div class="pat-loc">
                    <span>Patrocinantes Locales</span>
                    <ul>
                        <li class="cristo"><img src="./img/cristo.png" alt="Cristo"/></li>
                        <li class="rio2016"><img src="./img/rio2016.png" alt="Rio"/></li>
                        <li class="rio2016_2"><img src="./img/rio2016_2.png" alt="Rio"/></li>
                        <li class="toronto2015"><img src="./img/toronto2015.png" alt="Rio"/></li>
                        <li class="coi"><img src="./img/coi.png" alt="Rio"/></li>
                        <li class="solidaridad"><img src="./img/rio2016.png" alt="Rio"/></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="cred">
                    <p><img src="./img/right.png" alt="Flecha"/> Comit&eacute; Ol&iacute;mpico Venezolano <?= date('Y')?>. Todos los derechos reservados. Desarrollador por: XXX. Imagen ADDOMO.</p>
                    <div class="right">Siga nuestras redes sociales <img src="./img/right.png" alt="Flecha"/>
                        <ul>
                            <li><a target="_blank"  href="https://twitter.com/officialCOV"><img src="./img/twitter_hover.png" alt="Twitter"/></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/pages/Comit%C3%A9-Ol%C3%ADmpico-Venezolano/489886661036281"><img src="./img/facebook_hover.png" alt="Facebook"/></a></li>
                            <li><a  target="_blank" href="http://instagram.com/covofficial"><img src="./img/instagram_hover.png" alt="Instagram"/></a></li>
                            <li><img src="./img/youtube_hover.png" alt="Facebook"/></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
             </div>            
        </div>   
    </div>
  </body>
</html>