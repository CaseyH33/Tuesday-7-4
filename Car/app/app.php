<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Car.php";

  $app = new Silex\Application();

  $app->get("/", function(){

    $porsche = new Car("2014 Porsche 911", 114991, 7864, "img/porsche.jpg");
    $ford = new Car("2011 Ford F450", 55995, 14241, "img/ford.jpg");
    $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "img/lexus.jpg");
    $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "img/mercedes.jpg");
    $random = new Car();
    $cars = array($porsche, $ford, $lexus, $mercedes, $random);
    $cars_matching_search = array();

    foreach ($cars as $car) {
      if ( ($car->getPrice() <= $_GET["price"]) && ($car->getMiles() <= $_GET["mileage"]) ) {
        array_push($cars_matching_search, $car);
      }
    };//end for each
    $output = "";

    if(empty($cars_matching_search)){
      $output = "<h1>No cars matched you search!</h1>";
    }

    foreach ($cars_matching_search as $car){

      $output .= "<div class = 'row'>";
      $output .= "<div class='col-md-6'>";
      $output .= "<p>Model: " . $car->getModel() . "</p>";
      $output .= "<p>Price: " . $car->getPrice() . "</p>";
      $output .= "<p> Miles: " . $car->getMiles() . "</p>";
      $output .= "<div class='col-md-6'> <img src=" . $car->getImage() . " width='25%'></div>";
      $output .= "</div>";
      $output .= "</div>";
    };
    return $output;
  });

  $app->get("/car-form", function(){
    return "
    <!DOCTYPE html>
    <html>
    <head>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
      <title>Find a Car</title>
    </head>
    <body>
      <div class='container'>
        <h1>Find a Car!</h1>
        <form action='/'>
          <div class='form-group'>
            <label for='price'>Enter Maximum Price:</label>
            <input id='price' name='price' class='form-control' type='number'>
            <label for='mileage'>Enter Maximum Mileage:</label>
            <input id='mileage' name='mileage' class='form-control' type='number'>
          </div>
          <button type='submit' class='btn-success'>Submit</button>
        </form>
      </div>
    </body>
    </html>
    ";
  });

return $app;

?>
