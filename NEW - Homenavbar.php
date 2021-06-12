<style media="screen">
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
 .one:hover ~ hr {
   display:block;
   width: 4.5%;
   margin-left: 0.5%;
}
 .two:hover ~ hr {
   display:block;
   width: 5%;
  margin-left: 6%;
}
.three:hover ~ hr {
  display:block;
  width: 5.5%;
  margin-left: 12%;
}

.four:hover ~ hr {
  display:block;
  width: 6%;
  margin-left: 56.5%;
}
.five:hover ~ hr {
  display:block;
  width: 6%;
  margin-left: 62.5%;
}
.six:hover ~ hr {
  display:block;
  width: 6.5%;
  margin-left: 69.5%;
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
 #main_menu{width: 100%; position: relative;}
 .logo_area{width: 300px; height: 300px; position: absolute; left: 50%; top: 0; content: ""; margin-left:-150px; text-align: center; }
 .logo_area img{height: auto;width: 50%; border-radius: 40px;}





 @media only screen and (min-width: 200px) and (max-width: 767px) {
     .slicknav_menu{display: block;}
     .inner_main_menu{display: none;}
     .logo_area {height: auto;left: 0;margin-left: 0;position: relative;top: 0;width: 130px;}
     .logo_area img{height: auto;width: 100%;}



 }
</style>

<header>
  <div id="main_menu">
      <div class="logo_area">
          <img src="dslogo.png" alt="">
      </div>
      <div class="inner_main_menu">
          <ul id="menu">
              <li class="one"><a href="">Home</a></li>
              <li class="two"><a href="">About</a></li>
              <li class="three"><a href="">Gallery</a>
                 <ul>
                      <li><a href="">Residenial</a></li>
                      <li><a href="">Retail</a></li>
                      <li><a href="">Corporate</a></li>
                </ul>
              </li>
              <li class="four"><a href="">Contact</a></li>
              <li class="five"><a href="">Map</a></li>
              <li class="six"><a href="">Newsletter</a></li>
            <hr>
          </ul>
      </div>
  </div>
</header>
