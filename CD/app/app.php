<?php

  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/CD.php";

  $app = new Silex\Application();

  $app->get("/",function()
  {
    $first_cd = new CD("Master of Reality","Black Sabbath","images/sabbath.jpg",10.99);
    $second_cd = new CD("Electric Larryland","Butthole Surfers", "images/larryland.jpg",10.99);
    $third_cd = new CD("Neveryoumind","Nirvana","images/nirvana.jpg",10.99);
    $fourth_cd = new CD("Pork Lion", "Snoop Pork","images/pork.jpg",49.99);

$cds = array($first_cd,$second_cd,$third_cd,$fourth_cd);

    $output = "";
    foreach ($cds as $album){

      $output .= "<div class='row'>
      <div class='col-md-6'>
      <img src=" . $album->getCoverArt() . " width='25%' >
      </div>
      <div class ='col-md-6'>
      <p>" . $album->getTitle() . "</p>
      <p>By " . $album->getArtist() . "</p>
      <p>$" . $album->getPrice() . "</p>
    </div>
    </div>
    ";


    }

  return $output;

  });
return $app;

?>
