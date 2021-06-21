<?php
include_once('../../PHP/DB.php');
  abstract class Model{
      public $DB;

      public function connect(){
          if(null === $this->DB ){
              $this->DB = new DB();
          }
          return $this->DB;
      }
  }
 ?>
