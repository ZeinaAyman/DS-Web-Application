<style media="screen">
  body
  {
    margin: 0;
    background-color: #847F79;
  }
  .create-form
  {
    position: relative;

    top: 5%;
    height: 75%;

  }
  .form
  {
    background-color: #B1DBAD;
    position: relative;
    top: 5%;
    left: 25%;
    height: 80%;
    width: 50%;
    border-width: 2px;
    border-color: #E3B7A5;
    border-style: solid;
    margin-bottom: 200px;
  }
  .p-input
  {
   margin-top: 2.5%;
   margin-bottom: 2.5%;
   margin-left: 3.5%;
   font-family: Montserrat;
  font-style: normal;
  font-weight: normal;
  font-size: 24px;
  line-height: 24px;
  letter-spacing: -0.015em;

  color: #76323F;
   display: block;
  }
  .form-input,.emplist
  {
    margin-left: 3.5%;
    background-color: #B1DBAD;
    border: 1px solid black;
    width: 93%;
    height: 30px;
    color: #76323F;
    padding-left: 10px;
  }
  .form-file
  {
    color: #B1DBAD;
   margin-left: 3.5%;
   width: 120px;
   border-radius: 20%;
   height: 7%;
   border-radius: 6px;
   border: none;
  }
  .create
  {
    color: #B1DBAD;
   width: 90px;
   border-radius: 6%;
   height: 7%;
   background-color: #76323F;
   border-radius: 6px;
   border: none;
   position: relative;
   top: 19%;
   left: 44%;
  }
  .form-title
  {
   position: relative;
   left: 29%;
   top: 20px;
   font-family: Montserrat;
    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 36px;
    letter-spacing: -0.015em;
    color: #76323F;
  }


</style>
<?php include 'navbar.php';
      include 'DB.php';
      $err="";
      if(isset($_POST['submit']) && !empty($_POST['submit'])) {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $budget = $_POST["budget"];
        $image =  $_POST["image"];
        $file =  $_POST["file"];

        echo $image;
        if(!$err)
        {
          $sql = "INSERT into project (name,description,budget,images,files,status) VALUES('".$name."','".$description."','".$budget."','".$image."','".$file."','ongoing')";
          $result = $conn->query($sql);
          echo $conn->error;
        }
      }


      ?>
<body>
      <form class="form" action="" method="post">
        <span class="form-title">Create New Project</span>
        <div class="create-form">
        <label class="p-input">Project Name</label>
        <input type="text" class="form-input" name="name" value="Project 1">

        <label class="p-input">Project Description</label>
        <input type="text" class="form-input" name="description" value="project 1 description here">

        <label class="p-input">Project Budget</label>
        <input type="number" class="form-input" name="budget" value="32000 L.E">

        <label class="p-input">Images</label>
        <input type="file" class="form-file" name="image" value="Upload">

        <label class="p-input">Files</label>
        <input type="file" class="form-file" name="file" value="Upload"><br>
      </div>

        <input type="submit" class="create" name="submit" value="Create">


      </form>

</body>
