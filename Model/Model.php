<?php
include 'PHP/DB.php';
  abstract class Model{
      protected $DB;

      public function connect(){
          if(null === $this->DB ){
              $this->DB = new DB();
          }
          return $this->DB;
      }
  }
 ?>
