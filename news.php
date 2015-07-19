<?php 
include("./common/functions.php");

$id = $_GET["id"];
$news = getNewsDetail($id);
$month = getMonthName(strftime("%m", $news["fecha"]));
$fecha = strftime("%d de ".$month." de %Y", $news["fecha"]);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Comit&eacute; Ol&iacute;mpico</title>
    <link rel="stylesheet" href="css/slider.css"/>
    <link rel="stylesheet" href="style.css"/>
    <script src="js/jquery-1.11.3.min.js"></script>
  </head>
  <body id="news">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=199975960099979";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="wrapper-news">
        <div class="header">
            <div class="container">
                <div class="top-bar">
                    <ul class="social">
                            <li class="twitter"><a target="_blank"  href="https://twitter.com/officialCOV"></a></li>
                            <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/Comit%C3%A9-Ol%C3%ADmpico-Venezolano/489886661036281"></a></li>     
                            <li class="instagram"><a  target="_blank" href="http://instagram.com/covofficial"></a></li>        
                            <li class="youtube"><a target="_blank"  href="https://www.youtube.com/channel/UCm7DUK_V4KB-NNvxYVrTWyg"></a></li>      
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
            <div class="col large-1">
                <div class="noticia-img">
                    <img src="./admin/<?= $news["path"] ?>" />
                </div>
               <div class="noticias">
                    <h1><?=$news["titulo"] ?></h1>
                    <h3><?=$news["subtitulo"] ?></h3>
                    <?= $news["contenido"] ?>
                    <div class="share-btns">
                    <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet" data-count="none">
Tweet</a>
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"></div>
                </div>
                <div style="clear: both;"></div>
                </div>
                <div>
                    <ul class="nav">
                        <li><a href="">Galer&iacute;a</a></li>
                        <li><a href="">Noticias</a></li>
                        <li><a href="">Eventos</a></li>
                    </ul>
                </div>
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
                        <div class="clear"></div>
                     </div>
            </div> 
            <div class="col large-2">
                <div class="actions">
                     <div class="posiciones sq"><a href="http://results.toronto2015.org/IRS/es/general/multimedallistas.htm" target="_blank"></a></div>
                     <div class="olimpismo sq"><a href=""></a></div>
                     <div class="oficiales sq"><a href=""></a></div>
                     <div class="boletin"><a href=""></a></div>
                     <div class="media"><a href=""></a></div>
                     <div class="calendario"><a href="http://results.toronto2015.org/IRS/es/general/horario-general.htm" target="_blank"></a></div>
                     <div class="toronto"><a href="http://results.toronto2015.org/IRS/es/general/conteo-de-medallas.htm" target="_blank"></a></div>
                     <div class="contacto"><a href=""></a></div>
                     <div class="ubicanos"><a href=""></a></div>
                </div>
                <div class="twitter-box">   
                    <h1>Twitter <img src="./img/twitter-news.png" alt="Twitter" style="vertical-align: middle;"/></h1>
                    <a class="twitter-timeline" href="https://twitter.com/OfficialCOV" data-widget-id="617727791954558976">Tweets por el @OfficialCOV.</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="videos">                    
                    <iframe id="ytplayer" type="text/html" width="289" height="162.5625"
                    src="https://www.youtube.com/embed/?playlist=jPaMeWZ80RI,KY1-ss-z8yI,DhxdGUiH7GE"
                    frameborder="0" allowfullscreen></iframe>
                 </div>
                 <div class="banner">
                    <img src="img/toronto-banner.png" />
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
                        <li class="solidaridad"><img src="./img/solidaridad.png" alt="Solidaridad"/></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="cred">
                    <p><img src="./img/right.png" alt="Flecha" style="padding-right: 50px;"/> Comit&eacute; Ol&iacute;mpico Venezolano <?= date('Y')?>. Todos los derechos reservados <img src="./img/sello.png" class="sello" />    Desarrollado por XXX imagen: ADDOMO</p>
                    <div class="right">siga nuestras redes <img src="./img/right.png" alt="Flecha" style="padding-right: 20px;"/>
                        <ul>
                            <li><a target="_blank"  href="https://twitter.com/officialCOV"><img src="./img/twitter_hover.png" alt="Twitter"/></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/pages/Comit%C3%A9-Ol%C3%ADmpico-Venezolano/489886661036281"><img src="./img/facebook_hover.png" alt="Facebook"/></a></li>
                            <li><a  target="_blank" href="http://instagram.com/covofficial"><img src="./img/instagram_hover.png" alt="Instagram"/></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCm7DUK_V4KB-NNvxYVrTWyg"><img src="./img/youtube_hover.png" alt="Facebook"/></a></li>
                        </ul>                   
                        <img src="./img/right.png" alt="Flecha" class="up"/>     
                    </div>
                    <div class="clear"></div>
                </div>
             </div>            
        </div>   
    </div>
    <script>
        $( document ).ready(function() {
            var $span = '<span>(<?=$news["fuente"] ?>. <?= $fecha ?>. <?= utf8_encode($news["autor"]) ?>).</span>';
            $(".noticias p:first-of-type").prepend($span);
        });
    </script>
  </body>
</html>