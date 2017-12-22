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
