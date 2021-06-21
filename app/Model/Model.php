<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/DS/PHP/DB.php');
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
