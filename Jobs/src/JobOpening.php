<?php

class jobOpening
{
  private $title;
  private $description;
  private $contact_info;

  function __construct($job_title, $job_description,$contact_info)
  {
    $this->title = $job_title;
    $this->description = $job_description;
    $this->contact_info = $contact_info;
  }

  function setTitle($job_title)
  {
      $this->title = $job_title;
  }

  function setDescription($job_description)
  {
    $this->description = $job_description;
  }

  function setContactInfo($new_contact_info)
    {
      $this->contact_info = $new_contact_info;
    }

  function getTitle()
  {
    return $this->title;
  }

  function getDescription()
  {
    return $this->description;
  }

  function getContactInfo()
  {
    return $this->contact_info;
  }
}

?>
