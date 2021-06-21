<?php
  include_once('User.php') ;
  class Employee extends User
  {
    function __construct()
    {
      $err = false;
    }

    public function Feed($Name,$Email,$Password,$Type,$Picture)
    {
      $this->Name=$Name;
      $this->Email=$Email;
      $this->Password=$Password;
      $this->Type=$Type;
      $this->Picture=$Picture;
    }

  }
 ?>
