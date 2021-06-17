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

   $html.="<input type='file' class='form-file' id='imageupload' name='image[]' value='Upload'  onchange='getUploadedImages(this.id)' multiple>";
   $html.="<div id='uploadedimages'>  </div>";

   $html.="<label class='p-input'>Files</label>";
   $html.="<input type='file' class='form-file' id='fileupload'name='file[]' value='Upload'onchange='getUploadedFiles(this.id)' multiple > <br>";
   $html.="<div id='uploadedfiles'> </div>";
 $html.= "</div>";

   $html.= "<input  type='submit' class='create' name='submit' value='Create'>";
   $html.= "</form>";
   return $html;



 }
 public function Projectslist($result)
 {
   $online_name=unserialize($_SESSION['online'])->Name;
   $online_id=unserialize($_SESSION['online'])->ID;
   $html='';
   if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $id= $row["id"];
    $ClientName=$row["name"];
    $images=$row["images"];
    $status=$row["status"];
    $html.="<div class='project'>";
    $html.= "<div class='p-img'>";
    $html.="<img src='uploads/projects/images/maxresdefault.jpg'>";
    $html.="</div>";
    $html.="<div class='p-info'>";
    $html.="<h1>Project ID : $id</h1><br>";
    $html.="<div class='p-h3'>Client : $ClientName</div><br>";
    $html.="<div class='p-h3'>Designer 1: $online_name</div><br>";
    $html.="<div class='p-h3'>Designer ID :$online_id</div>";
    $html.="</div>";
    $html.="<div class='my-p-status'>";
    $html.="<h3>Status:<span class='status-orange'>$status</span></h3>";
    $html.="</div>";
    $html.="</div>";
  }
  }
  else {
  echo "0 results";
   }
   return $html;
}
}
 ?>
<script type="text/javascript">
var arr = new DataTransfer();
var arr2=new DataTransfer();
function getUploadedImages(id){
    var numFiles = document.getElementById(id).files.length;

    for(var i=0;i<numFiles;i++)
    {
      //var str=myFile.toString();

      var filename = document.getElementById(id).files[i].name;
      var div = document.getElementById('uploadedimages');
      div.innerHTML += filename+','+'&nbsp &nbsp';

    }

    for (var y = 0; y < numFiles; y++) {
      arr.items.add(document.getElementById(id).files[y]);
    }
    document.getElementById(id).files=arr.files;

}

function getUploadedFiles(id){
    var numFiles = document.getElementById(id).files.length;
    for(var i=0;i<numFiles;i++)
    {

      var filename = document.getElementById(id).files[i].name;
      var div = document.getElementById('uploadedfiles');
      div.innerHTML += filename+','+'&nbsp &nbsp';

    }

    for (var y = 0; y < numFiles; y++) {
      arr2.items.add(document.getElementById(id).files[y]);
    }
    document.getElementById(id).files=arr2.files;

}

</script>
