<?php
  include_once('Employee.php');
  class Manager extends Employee
  {

    function __construct()
    {

    }
    public function GetEmployees()
    {

      $this->DB->query = "SELECT user.ID ,user.Name , user.Type , penalty.description FROM user LEFT JOIN penalty ON user.ID = penalty.EID Where Type!=3";
      $result = $this->DB->query();
      return $result;
    }
    public function AddPenalty($id,$desc)
    {
      $this->DB->query = "INSERT into penalty (EID,description) VALUES('$id','$desc')";
      $result = $this->DB->query();
      
    }
}
