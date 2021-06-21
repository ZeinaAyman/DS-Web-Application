<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<?php

include_once("ViewUser.php") ;
include '../../app/Model/Designer.php';
class ViewDesigner extends ViewUser
{

  public function Recentprojects($result)
  {
    $html='';
    $html.="<div class='recentprojects'>";
    $html.="<h1>Recent Projects</h1>";
    if(!is_string($result))
    {
      for ($i=0;$i < 3; $i++){
        $row = $result->fetch_assoc();
        $images=$row['images'];
        $firstimage = "uploads/projects/images/".explode(",", $images)[0];
        if($row['id'])
        {
          $html.="<div class='image'>";
          $html.="<img class='img2' src='$firstimage' alt='Project Image' height='150'>";
          $html.="<h3 style='padding: 5px 66px;''>Project ".$row['id']."</h3>";
          $html.="</div>";
        }
      }
    }
    $html.="<a class='create' href='CreateProject.php'>Create New Project</a>";
    $html.="</div>";
    return $html;

  }

  public function Myprojects($result)
  {
    $html='';
    $html.="<h1 style='color:#76323F;'>My Projects</h1>";
    $html.="<div class='Myprojects'>";
    if(!is_string($result))
    {
      for ($i=0;$i < 4; $i++){
        $row = $result->fetch_assoc();
        $images=$row['images'];
        $firstimage = "uploads/projects/images/".explode(",", $images)[0];
        if($row['id'])
        {
          $html.="<div class=image' id='color'>";
          $html.="<img  src='$firstimage' alt='Project Image' height='150'>";
          $html.="<h3 style='color:#76323F;'>Project ".$row['id']."</h3>";
          $html.="</div>";
        }
      }
    }

    $html.="</div>";
    $html.="<a href='myprojects.php'><h4 style='color:#76323F;''>See More...</h4></a>";
    return $html;

  }

  public function Allprojects($result)
  {
    $html='';
    $html.="<h1 style='color:#76323F;'>All Projects</h1>";
    $html.="<div class='Allprojects'>";
    for ($i=0;$i < 4; $i++){
      $row = $result->fetch_assoc();
      $images=$row['images'];
      $firstimage = "uploads/projects/images/".explode(",", $images)[0];
      if($row['id'])
      {
        $html.="<div class=image' id='color'>";
        $html.="<a href='project.php' ><img  src='$firstimage' alt='Project Image' height='150'></a>";
        $html.="<h3 style='color:#76323F;'>Project ".$row['id']."</h3>";
        $html.="</div>";
      }
    }
    $html.="</div>";
    $html.="<a href='AllProjects.php'><h4>See More...</h4></a>";
    return $html;

  }

  public function CreateProjectForm()
  {
    $html='';
    $html.="<form class='form' action='' method='post' enctype='multipart/form-data' name='ProjectForm'>";
    $html.="<span class='form-title'>Create New Project</span>";
    $html.="<div class='create-form'>";
    $html.="<label class='p-input'>Client Name</label>";
    $html.="<input type='text' class='form-input' name='name' value='Project Name'>";

    $html.="<label class='p-input'>Project Description</label>";
    $html.="<textarea type='textarea' class='form-input' name='description' value='project description here'></textarea>";

    $html.="<label class='p-input'>Project Budget</label>";
    $html.= "<input type='number' class='form-input' name='budget'  min='0' value='32000 L.E'>";

    $html.="<label class='p-input'>Property Type</label>";
    $html.="<div class='input'>";
    $html.="<select name='type' class ='form-input'>";
    $html.="<option value='1'>Residential</option>";
    $html.="<option value='2'>Retail</option>";
    $html.="<option value='3'>Commercial</option>";
    $html.="</select>";
    $html.="</div>";

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
    if(!is_string($result))
    {
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

          $id= $row["id"];
          $ClientName=$row["name"];
          $images=$row["images"];
          $firstimage = "uploads/projects/images/".explode(",", $images)[0];
          $status=$row["status"];
          $html.="<div class='project'>";
          $html.= "<div class='p-img'>";
          $html.="<img src='$firstimage' height='100%' alt='project image' >";
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
    }
    else {
      $html.="<div> 0 results </div>";
    }
    return $html;
  }
  public function AllProjectsList($result)
  {
    $html="";

    if ($result->num_rows > 0)
    {

      while($row = $result->fetch_assoc())
      {
        $DesignersID=$row['AssignedDesigners'];
        $Des=new Designer();
        $Des->connect();
        $Des->ById($DesignersID);
        $DesName=$Des->Name;
        $id=$row['id'];
        $Client=$row['name'];
        $images=$row["images"];
        $firstimage = "uploads/projects/images/".explode(",", $images)[0];
        $html.="<div class='project'>";
        $html.="<div class='p-img'>";
        $html.="<img src='$firstimage' height='100%' alt='project image' >";
        $html.="</div>";
        $html.="<div class='p-info'>";
        $html.="<h1>Project:$id </h1><br>";
        $html.="<div class='p-h3'>Client: $Client";
        $html.="</div>";
        $html.="<br>";
        $html.="<div class='p-h3'>Designer 1 : $DesName</div><br>";
        $html.="<div class='p-h3'>Designer 1 ID : $DesignersID</div>";
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
