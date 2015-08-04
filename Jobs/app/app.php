<?php

  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/JobOpening.php";
  require_once __DIR__."/../src/contactInfo.php";

  $app = new Silex\Application();

  $app->get("/", function(){
    //return "Hello world!";
    $contact1 = new contactInfo("John", "John@aol.com", "503-555-5555");
    $job1 = new JobOpening("Burger flipper", "You flip burgers", $contact1);


  });

return $app;
?>
