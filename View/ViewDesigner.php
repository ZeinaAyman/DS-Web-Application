<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<?php

include_once("ViewUser.php") ;
class ViewDesigner extends ViewUser
{

 public function CreateProjectForm()
 {
   $html='';
   $html.="<form class='form' action='' method='post' enctype='multipart/form-data' name='ProjectForm'>";
   $html.="<span class='form-title'>Create New Project</span>";
 $html.="<div class='create-form'>";
   $html.="<label class='p-input'>Project Name</label>";
   $html.="<input type='text' class='form-input' name='name' value='Project 1'>";

   $html.="<label class='p-input'>Project Description</label>";
   $html.="<input type='text' class='form-input' name='description' value='project 1 description here'>";

   $html.="<label class='p-input'>Project Budget</label>";
   $html.= "<input type='number' class='form-input' name='budget' value='32000 L.E'>";

   $html.="<label class='p-input'>Images</label>";
   $imagesdivid='uploadedimages';
   $html.="<input type='file' class='form-file' id='imageupload' name='image[]' value='Upload'  onchange='getFileData(this.id,\"$imagesdivid\")' multiple>";
   $html.="<div id='uploadedimages'>  </div>";

   $filesdivid='uploadedfiles';
   $html.="<label class='p-input'>Files</label>";
   $html.="<input type='file' class='form-file' id='fileupload'name='file[]' value='Upload'onchange='getFileData(this.id,\"$filesdivid\")' multiple > <br>";
   $html.="<div id='uploadedfiles'> </div>";
 $html.= "</div>";

   $html.= "<input  type='submit' class='create' name='submit' value='Create'>";
   $html.= "</form>";
   return $html;



 }

}

 ?>
<script type="text/javascript">
function getFileData(id,divid){
    var numFiles = document.getElementById(id).files.length;
    console.log(divid);
    for(var i=0;i<numFiles;i++)
    {
      //var str=myFile.toString();

      var filename = document.getElementById(id).files[i].name;
      var div = document.getElementById(divid);
      div.innerHTML += filename+"<br>";
      console.log(filename);
    }

}

</script>
