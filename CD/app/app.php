<?php

  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/CD.php";

  $app = new Silex\Application();

  $app->("/",function()
  {
    return"Home";
  });
return $app;

?>
