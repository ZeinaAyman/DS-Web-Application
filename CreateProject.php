<style media="screen">
  body
  {
    margin: 0;
    background-color: #404B69;
  }
  .create-form
  {
    position: relative;

    top: 5%;
    height: 75%;

  }
  .form
  {
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
  .empname
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

  color: #EDEAD3;
   display: block;
  }
  .form-input,.emplist
  {
    margin-left: 3.5%;
    background-color: #404B69;
    border: 1px solid black;
    width: 93%;
    height: 30px;
    color: white;
    padding-left: 10px;
  }
  .create-button
  {
   margin-left: 3.5%;
   width: 70px;
   border-radius: 6%;
   height: 7%;
   background-color: #E3B7A5;
   border-radius: 6px;
   border: none;
  }
  .create
  {
   width: 90px;
   border-radius: 6%;
   height: 7%;
   background-color: #E3B7A5;
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
    color: #E3B7A5;
  }


</style>
<?php include 'navbar.php'; ?>
<body>


      <form class="form" action="index.html" method="post">
        <span class="form-title">Create New Project</span>
        <div class="create-form">
        <label class="empname">Project Name</label>
        <input type="text" class="form-input" value="Project 1">

        <label class="empname">Project Description</label>
        <input type="text" class="form-input" value="project 1 description here">

        <label class="empname">Project Budget</label>
        <input type="text" class="form-input" value="32000 L.E">

        <label class="empname">Images</label>
        <input type="button" class="create-button" value="Upload">

        <label class="empname">Files</label>
        <input type="button" class="create-button" value="Upload"><br>
      </div>

        <input type="submit" class="create" value="Create">


      </form>

</body>
