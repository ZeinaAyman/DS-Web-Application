<?php
//include('PHP/classes.php') ;



include_once('UserController.php') ;
class SupportController extends UserController
{

  public function C_GetMessages()
 {
   $this->Model->connect();
   $res=$this->Model->GetMessages();
   return $res;

 }
}
