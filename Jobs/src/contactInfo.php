<?php
class contactInfo
{

  private $email;
  private $phone;
  private $name;

  function __construct($contact_name, $contact_email, $contact_phone)
  {
    $this->name = $contact_name;
    $this->email = $contact_email;
    $this->phone = $contact_phone;
  }

    function getEmail()
    {
    return $this->email;
    }
    function getPhone()
    {
      return $this->phone;
    }
    function getName()
    {
      return $this->name;
    }

  function setEmail($new_email)
    {
      $this->email = $new_email;
    }
  function setPhone($new_phone)
    {
      $this->phone = $new_phone;
    }

  function setName($new_name)
    {
       $this->name = $new_name;
    }

}

?>
