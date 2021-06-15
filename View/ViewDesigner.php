<?php

include_once("ViewUser.php") ;
class ViewDesigner extends ViewUser
{

 public function CreateProjectForm()
 {
   $html='';
   $html.="<form class='form' action='' method='post' enctype='multipart/form-data'>";
   $html.="<span class='form-title'>Create New Project</span>";
 $html.="<div class='create-form'>";
   $html.="<label class='p-input'>Project Name</label>";
   $html.="<input type='text' class='form-input' name='name' value='Project 1'>";

   $html.="<label class='p-input'>Project Description</label>";
   $html.="<input type='text' class='form-input' name='description' value='project 1 description here'>";

   $html.="<label class='p-input'>Project Budget</label>";
   $html.= "<input type='number' class='form-input' name='budget' value='32000 L.E'>";

   $html.="<label class='p-input'>Images</label>";
   $html.="<input type='file' class='form-file' name='image' value='Upload'>";

   $html.="<label class='p-input'>Files</label>";
   $html.="<input type='file' class='form-file' name='file[]' value='Upload' multiple > <br>";
 $html.= "</div>";

   $html.= "<input  type='submit' class='create' name='submit' value='Create'>";
   $html.= "</form>";
   return $html;

 }

}

 ?>
