<link rel="stylesheet" href="master.css">
<style media="screen">
  body
  {
    margin: 0;
    background-color: #847F79;
  }
  .create-acc
  {
   margin-left: 42%;
    color: #D6E8E9;
    font-size: 36;
    font-family: : "Montserrat";
    opacity: 1;
  }
  .createacccontainer
  {
  position: fixed;
  top: 30%;
  left: 35%;
  width: 30%;
  height: 60%;
  background-color: #B1DBAD;
  border-width: 2px;
  border-color: #E3B7A5;
  border-style: solid;
  }

  .empname
  {
   margin-top: 2.5%;
   margin-bottom: 2.5%;
   margin-left: 3.5%;
   color : #76323F;
   font-size: 24px;
   display: block;
  }
  .empinput,.emplist
  {
  margin-left: 3.5%;
  background-color: #9ABE9F;
  border-color: black;
  width: 93%;
  }
  .createbut
  {
   width: 20%;
   position: absolute;
   left: 40%;
   color: #B1DBAD;
   top: 80%;
   border-radius: 6%;
   height: 10%;
   background-color: #76323F;
  >>>>>>> c0dada39a38f180432399ab89780aee400c076b0
  }


</style>
<div class="topnav">
  <h2>Designs Solutions</h2>
  <!-- <h3>LOGO</h3> -->
</div>

<div class="create-acc">
  Create Account
</div>

  <div class="createacccontainer">
    <form class="" action="index.html" method="post">
      <label class="empname">Employee Name</label>

      <input type="text" class="empinput" value="John">
      <label class="empname">Employee Email</label>

      <input type="text" class="empinput" value="Deo@ds.com">
      <label class="empname">Employee role</label>

     <select class="emplist" >
      <option value="volvo">Designer</option>
      <option value="volvo">Manager</option>
     </select>

      <label class="empname">Employee Password</label>

      <input type="text" class="empinput" value="">
      <input type="submit" class="createbut" value="Create">

    </form>

  </div>
</div>
