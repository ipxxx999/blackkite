<?php
?>
<html> 
<head>
<title> Sicario: Day of the Soldado </title>

<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">

<meta name="viewport" content="width=device-width, user-scalable=no"/> 
<link href="./webfonts/pely_css.css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
<link href="./webfonts/all.css" rel="stylesheet">
</head>
<style type="text/css">
html {
    min-height: 100%;
    position: relative;
}
body {
    background-color: #000;
    font-family: 'Roboto Condensed', sans-serif;
    color: #fff;
    margin: 0 0 70px 0;
    padding: 0!important;
    height: 100%;
    display: inline-block;
        width: 100%;
    width: -moz-available;        
    width: -webkit-fill-available;
    width: fill-available;

}
.Wallpaper {
    padding: 0 0 30% 0;
    background-size: 100%;
    background-repeat: no-repeat;
    background-color: #181821;
    border-radius: 5px;
}
.ConjuntoHeadCont {
        width: 100%;
    width: -moz-available;        
    width: -webkit-fill-available;
    width: fill-available;
    position: relative;
    z-index: 1;
}
.SingleHead {
    float: left;
    width: 120px;
    margin: -85px 25px 0 15px;
    overflow: hidden;
    background: #06060882;
    background-color: #08090c;
    background-image: url(./png/loading.gif);
    background-repeat: no-repeat;
    background-position: 50% 50%;
    background-size: 40px;
    box-shadow: 0 5px 30px 3px #00000069;
    height: 175px;
    position: relative;
    border-radius: 4px;
}
.SingleContent {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    align-content: center;
    box-sizing: border-box;
    margin: -45px 0 0 0;
}
.SingleHead img {
      width: 100%;}
.SingleContent h1 {
    margin: 0;
    font-weight: 300;
    font-size: 35px;
    color: #fff;
    line-height: 30px;
    text-shadow: 1px 1px 1px #00000096;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    position: relative;
    top: -10px;
    padding: 0 10px 0 0;
    text-transform: capitalize;
}
@media screen and (max-width:600px) 
.SingleContent h1 {
    font-size: 27px;
    top: 0;
}
.Wallpaper {
    padding: 0 0 45% 0;
}
.SingleHead {
    float: left;
    width: 90px;
    margin: -55px 25px 0 15px;
    height: 130px;
}
@media screen and (max-width:500px) 

   .perfilWallpaper a {
    bottom: 0;
    position: absolute;
    right: 70px;
}
@media screen and (max-width:480px) 

    .critWallp .nota {
    margin: 0 0 0;
    top: 15px;
    left: 0;
    right: initial;
    border-radius: 0 6px 6px 0;
}

    .SingleHead {
        position: relative;
        top: 5px;
        border-radius: 7px;
}   
@media screen and (max-width:380px) 
.SingleContent h1 {
        font-size: 20px;
        top: 5px;
    }
    .Wallpaper {
        padding: 0 0 55% 0;
}
</style>
        <!-- Codigo para enviar a un Pagina GOODLE click derecho FIN  -->
<script src="document.js"></script>
        <!-- Codigo para enviar a un Pagina GOODLE click derecho FIN  -->

<body>
<div class="Wallpaper" style="background-image: linear-gradient(rgba(41, 128, 185, 0), rgb(0, 0, 0)), url(./png/Moonfall_1.jpg);"></div>
<div class="ConjuntoHeadCont">
<div class="SingleHead">
<img src="./png/Moonfall.jpg" alt="Rápidos y Furiosos 9" title="Rápidos y Furiosos 9"></div>
</div>
<div class="movie-section-title">Moonfall </div>
<b><span style="color: #F44336;">Año:</span></b> <span style="color: #b3b3b3;">2022</span><br />
<b><span style="color: #F44336;">Genero:</span></b> <span style="color: #b3b3b3;">Acción, Aventura, Ciencia ficción</span><br />
<b><span style="color: #F44336;">Duración:</span></b> <span style="color: #b3b3b3;">2h 10m</span><br />
</div></div>

<p><span style="color: #F44336;">Sinopsis:</span></b> <span style="color: #b3b3b3;">
    El mundo se enfrenta a la posibilidad de la extinción porque una fuerza desconocida empuja a la luna de su órbita rumbo a la Tierra. Un equipo de astronautas asume la misión de evitar el apocalipsis..

</span>
</div>

<center>
<a class="play" onclick="togglevideo()">
<button style="background-color:#fff; border-radius: 10px; height: 35px; width: 160px;">
<b><font size="4" color= "#000010"><i class="fas fa-play"> Reproducir</i></font></b></button></a>
</center>

<div class="trailer">

<iframe name="No_Mas_Censura"  src="http://74.208.251.230/Contenido/Peliculas/Drama/47%20RONIN.mp4" onload="$('.iframe-loading').css('background-image', 'none');" width="360px" height="250px" sandbox="allow-same-origin allow-scripts" style="border:none" allowfullscreen="true" scroll="no" webkitallowfullscreen="true" mozallowfullscreen="true">
</iframe>

<img src="./png/close.png" alt="" class="close" onclick="togglevideo()">
</div>

<script>function togglevideo() {const Trailer = document.querySelector('.trailer'); const video = document.querySelector('video'); Trailer.classList.toggle('active'); video.currentTime = 0; video.pause();}</script>

<style type="text/css">
.trailer{
    position: fixed; top: 50%; left: 50%; 
    transform: translate(-50%,-50%); 
    z-index: 10000; width: 100%; 
    height: 100%; display: flex; 
    justify-content: center; 
    align-items: center; 
    backdrop-filter: blur(20px); 
    visibility: hidden; 
    opacity: 0;} 
    .trailer.active{visibility: visible; opacity: 1;} 
    .trailer video{max-width: 900px; outline: none;} 
    .close{position: absolute; top: 30px; 
    right: 30px; cursor: pointer; 
    filter: invert(1); 
    max-width: 32px;
    } @media (max-width:990px).banner .play {left: 21px; font-size: 1em;} 
    .play img{
        margin-right: 10px; 
        max-width: 82px;} 
    .trailer video{
        max-width: 90%;
    } @media (max-width:870px).banner .play{left: 0px; font-size: 1em;bottom: 12px;}
    </style>
</body>


        <!-- Codigo para enviar a un video click derecho FIN  -->

        <script src="onmousedown.js"></script>

        <!-- Codigo para enviar a un video click derecho FIN  -->


        <!-- Codigo para enviar a un gif click derecho   -->
        <script src="prevent.js"></script>
        <!-- Codigo para blokear maus fin   -->

<script type="text/javascript" src="owl.js"></script>


</html>


