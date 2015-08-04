<?php
  require_once __DIR__."/../vendor/autoload.php";

  $app = new Silex\Application();

  $app->get("/", function () {
    return "<!DOCTYPE html>
    <html>
    <head>
    <title>Hello Fiend! (I mean it.)</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    </head>
      <body>
        <div class='container'>
        <h1>Hello From Afar</h1>
        <p>Dear Fiend,</p>
        <p>Dear Friend,</p>
        <p>How are you? I hope that you are having a horrible weekend. I'm vacationing in the mountains of Your mom while I learn programming! </p>
        <p>Friend, you would not believe how cold it is here. I should have gone to Hawaii instead.</p>
        <p>But I like programming a lot, so I've got that going for me. </p>
        <p>Looking forward to seeing you soon. I'll bring you back a souvenir. </p>
        <p>Cheers,</p>
        <p>Travel Enthusiast Thomas Jane</p>
        <a href='/goodbye'>Goodbye Sucka</a>
        </div>
      </body>
    </html>
    ";
  });

  $app->get("/goodbye",function(){

    return "Goodbye friend!";
  });

  return $app;
?>
