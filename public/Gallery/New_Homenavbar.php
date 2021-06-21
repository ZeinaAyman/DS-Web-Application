<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<style media="screen">
*{
  margin: 0;
}


body{
  background-color:#151515;
  font-family: 'Oswald', sans-serif;
  font-size: 15px;
  font-weight: 400;
  line-height: 1.5em;
  overflow-x: hidden;
}
header{
  position: sticky;
  margin-bottom: 50px;
}
 .inner_main_menu {
   margin: 0 auto;
   width: 1170px;
 }
 .inner_main_menu ul{
   margin: 0;
   padding: 80px 0 0;
   list-style: none;
   text-align: right;
   background-color:#151515;
 }
 .inner_main_menu ul li{
   float: none;
   display: inline-block;
   position: relative;
 }
 .inner_main_menu ul li:nth-child(1), ul li:nth-child(2),ul li:nth-child(3) {
  float: left;
}
 .inner_main_menu ul li a{
   color: #6e5c38;
   font-size: 20px;
   text-transform: uppercase;
   text-decoration: none;
   display: block;
   padding: 10px 20px;
 }
 .inner_main_menu ul li ul{
   position: absolute;
   top: 40px;
   left: -9999999px;
   width: 200px;
   background: #262626;
   padding: 0;
 }
 .inner_main_menu ul li:hover ul{
   left: 0px;
 }
 .inner_main_menu ul li ul li{
   float: left;
   width: 100%;
   text-align: left;
 }
 .inner_main_menu ul li ul li a{
   color: #fff;
   text-transform: capitalize;
   font-size: 15px;
 }
 .inner_main_menu ul li ul li a:hover{
   background: #ddd;
   color: #262626;
 }
 hr {
  top: 100%;
  height: 0.25rem;
  width: 1%;
  position: absolute;
  background: #6e5c38;
  border: none;
  display:none;
  transition: .6s ease-in-out;
}
 .inner_main_menu ul li:hover ul li a{color: #ffffff}
 .inner_main_menu ul li ul li a:hover{color: #262626}
 .inner_main_menu ul li ul li:hover a{background: #ddd; color: #262626;}
 .inner_main_menu ul li ul li:hover ul li a{background: #262626; color: #fff;}
 .inner_main_menu ul li ul li ul li a:hover{background: #ddd; color: #262626;}
 .slicknav_menu {
   background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
   font-size: 16px;
   padding: 5px;
   display: none;
   position: fixed;
   right: 0;
   width: 100%;
   z-index: 99999;
 }
 ul.slicknav_nav {
   background: #262626 none repeat scroll 0 0;
   left: 0;
   position: absolute;
   top: 0;
   width: 80%;
 }
 .main_menu{width: 100%; position: relative;}
 .logo_area{width: 300px; height: 300px; position: absolute; left: 50%; top: 0; content: ""; margin-left:-150px; text-align: center; }
 .logo_area img{height: auto;width: 47%; border-radius: 40px;}


 @media only screen and (min-width: 200px) and (max-width: 767px) {
     .slicknav_menu{display: block;}
     .inner_main_menu{display: none;}
     .logo_area {height: auto;left: 0;margin-left: 0;position: relative;top: 0;width: 130px;}
     .logo_area img{height: auto;width: 80%;}

 }

 .main_menu.responsive {
     overflow: hidden;
     background-color: #6e5c38;
 }
 .links a{
   color: white !important;
   display: none;
 }

 .main_menu .links a {
     font-size: 17px;
     padding: 14px 16px;
     float: right;
     text-decoration: none;
     font-family: Arial;
     color: #6e5c38;
     text-align: center;
 }


 .main_menu a:hover {
     background-color: #ddd;
     color: #6e5c38;
 }

.main_menu .icon {
     display: none;
 }

.hide{
  display: none;
}
 @media screen and (max-width: 600px) {
     .main_menu a {
         display: none;
     }

     .main_menu a.icon {
         float: right;
         display: block;
     }

     .hide{
       display: block;
     }
 }

 @media screen and (max-width: 600px) {

     .main_menu.responsive {
         position: relative;
     }

     .main_menu.responsive .icon {
         position: absolute;
         right: 0;
         top: 0;
     }

     .main_menu.responsive a {
         float: none;
         display: block;
         text-align: left;
     }

 }
</style>

<header>
  <div class="main_menu" id="itmain_menu">
        <div class="links">
            <a class="hide" href="ContactUs.php">Contact</a>
            <a class="hide" href="AboutUs.php">About</a>
            <a class="hide" href="gallery.php">Gallery</a>
            <a class="hide" href="New_GalleryHome.php">Home</a>
            <a  href="javascript:void(0);" class="icon" style="color:#6e5c38 !important;" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
      <div class="logo_area" id="logo">
          <img src=".images/dslogo.jpg" alt="">
      </div>
      <div class="inner_main_menu">
          <ul id="menu">
              <li class="one"><a href="New_Galleryhome.php">Home</a></li>
              <li class="two"><a href="AboutUs.php">About</a></li>
              <li class="three"><a href="gallery.php">Gallery</a>
                 <ul>
                      <li><a href="gallery_Residential.php">Residenial</a></li>
                      <li><a href="gallery_Retail.php">Retail</a></li>
                      <li><a href="gallery_Commercial.php">Commercial</a></li>
                </ul>
              </li>
              <li class="four"><a href="contactUs.php">Contact</a></li>
              <li class="five"><a href="contactUs.php">Map</a></li>
              <li class="six"><a href="newsletter.php">Newsletter</a></li>
            <hr>
          </ul>
      </div>
  </div>
</header>
<script>
    function myFunction() {

        var x = document.getElementById("itmain_menu");
        var y = document.getElementById("logo");
        if (x.className === "main_menu") {
            x.className += " responsive";
        } else {
            x.className = "main_menu";
        }


        if (y.style.display === "none") {
          y.style.display = "block";
        } else {
          y.style.display = "none";
        }
    }
</script>
