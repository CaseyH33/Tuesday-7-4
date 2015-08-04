<?php

  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/JobOpening.php";
  require_once __DIR__."/../src/contactInfo.php";

  $app = new Silex\Application();

  $app->get("/job-board",function()
  {
    $input_contact = new contactInfo($_GET["name"], $_GET["email"], $_GET["phone"]);
    $input_job = new jobOpening($_GET["title"], $_GET["description"], $input_contact);
    $contact1 = new contactInfo("John", "John@aol.com", "503-555-5555");
    $job1 = new jobOpening("Burger flipper", "You flip burgers", $contact1);

    return "
    <!DOCTYPE html>
    <html>
    <head>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
      <title>Job Board!</title>
    </head>
    <body>
      <div class = 'container'>
        <h1>Here are the job postings!</h1>
    "


    /*return "<p>" . $input_job->getContactInfo()->getName() . "</p>
    <p>" . $input_job->getContactInfo()->getEmail() . "</p>
    <p>" . $input_job->getContactInfo()->getPhone() . "</p>
    <p>" . $input_job->getTitle() . "</p>
    <p>" . $input_job->getDescription() . "</p>";
*/
  });

  $app->get("/", function(){
    return "
    <!DOCTYPE html>
    <html>
    <head>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
      <title>Job Board!</title>
    </head>
    <body>
      <div class = 'container'>
        <h1>Post a new job!</h1>
        <form action = '/job-board'>
          <div class = 'form-group'>
            <label for 'title'>Job Title:</label>
            <input id='title' name='title' class='form-control' type='string'>
            <label for 'description'>Job Description:</label>
            <input id='description' name='description' class='form-control' type='string'>
            <label for 'name'>Your Name:</label>
            <input id='name' name='name' class='form-control' type='string'>
            <label for 'email'>Your E-mail:</label>
            <input id='email' name='email' class='form-control' type='string'>
            <label for 'phone'>Your Phone Number:</label>
            <input id='phone' name='phone' class='form-control' type='string'>
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
