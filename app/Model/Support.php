<?php
  include_once('Employee.php');
  class Support extends Employee
  {

    function __construct()
    {

    }
    public function GetMessages()
    {
      $result=$this->DB->fetchAll('contact_messages');
      return $result;
    }
}
