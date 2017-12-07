<?php


require 'bdd copie.php';

$resultat = $bdd->query('SELECT Faculte, Fac FROM ZFac');



?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
    <link href="static/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="static/script.js"></script>
     <script src="https://www.w3schools.com/lib/w3.js"></script>
  </head>
  <body>
    <div id="sidedrawer" class="mui--no-user-select">
      <div id="sidedrawer-brand" class="mui--appbar-line-height">
         <input id="searchunit" oninput="w3.filterHTML( '#myUL','strong', this.value)" placeholder="Que cherchez-vous ?">
      </div>
      <div class="mui-divider"></div>
      <ul id="myUL">       <?php
            while($donnee = $resultat->fetch())
            {

      echo '
                <li><strong class="faculte_nav" data-linkfac='.htmlspecialchars($donnee["Fac"]).' id='.htmlspecialchars($donnee['Fac']).'>'. htmlspecialchars($donnee['Faculte']).'</strong>
                  <ul id="unitderoulant">
                    <li><a href="#">Projet X</a></li>
                    <li><a href="#">Projet Y </a></li>
                    <li><a href="#">Projet...</a></li>
                  </ul>
                </li>
             ' ;

            }
            $resultat->closeCursor();
            ?>
      </ul>
    </div>
    <header id="header">
      <div class="mui-appbar mui--appbar-line-height">
        <div class="mui-container-fluid">
          <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer">☰</a>
          <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer">☰</a>
          <span class="mui--text-title mui--visible-xs-inline-block mui--visible-sm-inline-block">ULB </span>
        </div>
      </div>
    </header>
    <div id="content-wrapper">
      <div class="mui--appbar-height"></div>
      <div class="mui-container-fluid">
        <br>
       <div id="main">

        </div>


      </div>
    </div>

    <footer id="footer">
      <div class="mui-container-fluid">
        <br>

      </div>
    </footer>
    <script src="jquery-2.2.4.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.faculte_nav').click(function () { //class strong
            var link = $(this).attr('data-linkfac');
            console.log(link);
            var url = 'faculte.php';
            console.log(url);
            $('#main').load(url, {fac: link});
            return false;
        });

    });
  </script>
  </body>
</html>
