<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Site web de Jean-François Mougnot</title>
  <meta name="theme-color" content="rgba(94, 53, 177, 0.85)">
  <meta name="msapplication-navbutton-color" content="rgba(94, 53, 177, 0.85)">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="shortcut icon" href="favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:100|Roboto:300" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <div class="wrapper">
    <header>
      <h1 class="header-title">Jean-François Mougnot</h1>
    </header>
    <div class="text-wrapper">
        <h2>Product Owner <span>chez Radio France</span></h2>
        <p>Depuis que j'ai rejoins la direction technique du numérique en mars 2015, je me suis investit dans l'amélioration continue de la production du plateau en participant à la mise en place de methodes, outils & techniques. <br> Tour à tour en charge de refontes partielles sur franceinfo / fip ou totales sur franceinter, responsable technique du player audio binaural, responsable technique du site franceculture.fr, scrummaster d'une équipe et product owner de l'infrastructure, j'aime le changement, la pluridisplinarité et les quotidiens variés. <br>
        </p>
        <h5>💓 le design thinking, la qualité, l'agile et l'a11y <br>(mais aussi 🎶 🏍️ 📷 🌐 🔬)</h5>
        <div class="btn-wrapper">
          <a class="btn" href="https://fr.linkedin.com/in/jfmougnot" target="_blank" title="Découvrir mon profil complet sur LinkdeIn">Découvrir mon parcours complet</a>
        </div>
    </div>
    <footer>
      <p>Pictures and code with ♥ by me.</p>
      <p><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a></p>
    </footer>
  </div>

  <script type="text/javascript">
  <?php
    $dir = 'img/';
    $files = array_diff(scandir($dir), array('..', '.', '.DS_Store'));

    foreach ($files as $key => $link) {
        if(is_dir($dir.$link)){
            unset($files[$key]);
        }
    }

    function array_addstuff($a, $i) {
        foreach ($a as &$e)
            $e = $i . $e;
        return $a;
    }

    $files = array_addstuff($files, $dir);

    echo('var imgUrls=' . json_encode($files) . ';');
  ?>

    function _getRandomBackground(urls) {
      var randIdx;
      var count = 0;

      for (var prop in urls) {
        if (Math.random() < 1/++count) {
          randIdx = prop;
        }
      }

      return urls[randIdx];
    }

    function _addImageAsBgOfElement(elem, imageUrl) {
      elem.style.backgroundImage =  'url(' + imageUrl + ')';

      return elem;
    }

    document.addEventListener("DOMContentLoaded", function() {
      _addImageAsBgOfElement(document.body, _getRandomBackground(imgUrls));
    });
  </script>
</body>
</html>
