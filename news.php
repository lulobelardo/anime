<?php 

include "islogged.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles/styles.css" type="text/css" />
    <link rel="stylesheet" href="styles/slider.css" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- ??? -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Font Days One -->
    <link
      href="https://fonts.googleapis.com/css2?family=Days+One&display=swap"
      rel="stylesheet"
    />
    <title>Manganime</title>
    <style>
      .fondo {
        background-image: url("img/BackGround.png");
        background-color: #0e0e5a;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center center;
      }
    </style>
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
</head>
<body class="fondo">
  <!-- Header, se mantiene-->
  <?php include "header.php"; ?>

  <div class="medio">
    <div class="w3-col" style="width: 10%"><p></p></div>
    <section class="w3-panel w3-half w3-center">
      <p class="h2">NOTICIAS</p>
      <div class="textsection">
        <ul>
          <li>Autor de Tokyo Ghoul revela arte visual de su nueva obra.</li>
          <br />
          <li>Overlord regresa con una cuarta temporada y una película.</li>
          <br />
          <li>
            Final Fantasy VII Remake Intergrade nos deja su tráiler final para
            lucir bondades.
          </li>
          <br />
          <li>
            El manga Tokyo Revengers alcanza las 15 millones de copias
            vendidas.
          </li>
          <br />
          <li>
            La nueva película de Dragon Ball Super se estrenará el próximo
            año.
          </li>
          <br />
          <li>
            El nuevo anime de Spriggan de Netflix revela una nueva imagen
            promocional.
          </li>
          <br />
          <li>
            Castlevania: Netflix promociona la Temporada Final con un
            impactante arte de Drácula.
          </li>
          <br />
          <li>
            Artistas de manga, personalidades de la industria y fans rinden
            tributo a Kentaro Miura.
          </li>
          <br />
          <li>El autor de Berserk, Kentaro Miura, muere con 54 años.</li>
          <br />
          <li>
            El juego Fate/Grand Order da un adelanto de los primeros 15
            minutos de su nueva película.
          </li>
          <br />
          <li>
            Hatsune Miku se una a la línea de figuras My Little Pony Bishoujo.
          </li>
          <br />
          <li>
            El comediante Hiroyuki Yabe se une al reparto de Sayonara, Watashi
            no Cramer - First Touch.
          </li>
          <br />
          <li>
            El anime de steampunk y vampiros Vanitas no Karute tiene nuevo
            tráiler.
          </li>
          <br />
          <li>
            El anime Slow Loop pesca fecha de estreno para enero de 2022.
          </li>
        </ul>
      </div>
    </section>
    <div class="w3-col" style="width: 5%"><p></p></div>
    <aside class="w3-panel w3-quarter w3-center">
      <div class="contenedor-aside w3-margin">
        <p class="a1">COMENTARIOS DE LA COMUNIDAD</p>
        <img class="asideimg" src="img/uno.jpeg" />
        <p class="w3-left">Usuario</p>
        <p class="w3-right">Fecha</p>
        <p class="op">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/dos.jpeg" />
        <div class="w3-row">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha</p>
        </div>
        <p class="op w3-row">Opinión y comentario sobre el manga</p>
      </div>
    </aside>
  </div>

  <?php include "footer.php"; ?>
</body>
</html>