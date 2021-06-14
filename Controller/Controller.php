<?php
  abstract class Controller
  {
      protected $Model;

      public function __construct($model) {
          $this->Model = $model;
      }
  }
 ?>
