<style media="screen">
  body
  {
    margin: 0;
    background-color: #404B69;
  }
  .header
  {
      width: 100%;
      height: 20%;
      background: rgba(40,49,73,1);

  }
  .title
  {


    color: #eeebd4;
    font-family: Comic Sans MS;
    font-weight: "Bold";
    font-size: "36px";
    opacity: 1



  }
  .create-acc
  {
   margin-left: 42%;
    color: E3B7A5;
    font-size: 36;
    font-family: : "Montserrat";
    opacity: 1;
  }
  .container
  {
  position: fixed;
  top: 30%;
  left: 35%;
  width: 30%;
  height: 60%;
  border-width: 2px;
  border-color: #E3B7A5;
  border-style: solid;
  }

 .empname
 {
   margin-top: 2.5%;
   margin-bottom: 2.5%;
   margin-left: 3.5%;
   color : white;
   font-size: 24px;
   display: block;
 }
 .empinput,.emplist
 {
  margin-left: 3.5%;
  background-color: #404B69;
  border-color: black;
  width: 93%;
 }
 .createbut
 {
   width: 20%;
   position: absolute;
   left: 40%;
   top: 80%;
   border-radius: 6%;
   height: 10%;
   background-color: #E3B7A5;
 }

</style>
<div class="header">
<p class="title">Design Solutions</p>

</div>

<div class="create-acc">
  Create Account
</div>

  <div class="container">
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
