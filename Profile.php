<?php
include 'navbar.php';
 ?>
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
     color: E3B7A5;
     font-size: 36;
     font-family: : "Montserrat";
     opacity: 1;
   }
   .profilecontainer
   {

   }

   .empinfo
   {
    margin-top: 1.5%;
    margin-left: 60%;
    color : white;
    font-size: 18px;
    display: block;
   }
   .empinput
   {
   margin-top: 1.5%;
   color :#76323F;
   margin-left: 60%;
   background-color: #B1DBAD;
   border-color: black;
   width: 30%;
   }
   .updatebut
   {
     margin-top: 1.5%;
    width: 120px;
    height : 50px;
    margin-left: 60%;
    border-radius: 6%;
    color: #B1DBAD;
    background-color: #76323F;
   >>>>>>> c0dada39a38f180432399ab89780aee400c076b0
   }
 .info
 {
margin:0px;
position: absolute;
width: 401px;
height: 180px;
left: 44px;
top: 270px;
background-color: #D6E8E9;
 }
 .personalimage
 {
margin:0px;
position: absolute;
width: 422px;
height: 275.35px;
left: 44px;
top: 110px;
 }
 .photo
 {
   border-radius:0px;
 }
   </style>

     <div class="personalimage">
       <img class="photo" alt="personal photo" src="images/personalphoto.png" width="250.19px" height="163.67px">

      </img>
     </div>

   <div class="info">
   <h1>John Deo</h1>
   Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
   </div>
   </div>

 <div class="profilecontainer">
   <form class="" action="Profile.php" method="post">
     <label class="empinfo">First Name</label>
     <input type="text" class="empinput" value="John">

     <label class="empinfo">Last Name</label>
     <input type="text" class="empinput" value="Deo">

     <label class="empinfo">Email</label>
     <input type="text" class="empinput" value="Deo@ds.com">

     <label class="empinfo">Old Password</label>
     <input type="password" class="empinput" value="123456">

     <label class="empinfo">New Password</label>
     <input type="password" class="empinput" value="123456">

     <label class="empinfo">Confirm Password</label>
     <input type="password" class="empinput" value="123456">
     <br>
     <input type="submit" class="updatebut" value="Update Profile">

   </form>

 </div>
