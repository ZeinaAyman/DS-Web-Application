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

 .container {
   width: 100%;
   height: 350px;
   margin-top: 170px;
   display: flex;
   overflow: hidden;
 }

 .left-skew {
   width: calc(51% + 95px);
       height: 90%;
       transform: skewX(-26deg);
       display: flex;
       justify-content: center;
       align-items: center;
       position: absolute;
       right: 54%;
 }

 .right-skew {
   width: calc(50% + 115px);
   height: 90%;
   display: flex;
   justify-content: center;
   align-items: center;
 }


 .left-skew {
   margin-left: -135px;
       padding-left: 122px;
       background-color: #6e5c38;
       border: 8px solid #151515;
 }
 .right-skew {
   position: absolute;
   margin-top: 7px;
       margin-right: -115px;
       padding-right: 115px;
       color: white;
       z-index: -1;
       left: 34.8%;
 }

 .right-skew img{
   max-width: 100%;
   max-height: 100%;
   position: absolute;
   width: 100%;
   left: 1px;
   background-size: cover;
 }

 .active {
   background-color: #717171;
 }

 /* Fading animation */
 .fade {
   animation-name: fade;
 animation-duration: 2.5s;
 }

 @keyframes fade {
   from {opacity: .4}
   to {opacity: 1}
 }

 .styles_ImagineContainer__3tztP {
   display: flex;
   padding: 3% 5%;
   z-index: 2;
 }


 @media (min-width: 1100px){
 .styles_ImagineHeader__oCsJu {
     flex: 0 1 auto;
     width: auto;
   }
 }
 @media (min-width: 1100px){
 .styles_ImagineHeader__oCsJu h1 {
     font-size: 40px;
     margin: 63px 0 0;
     max-width: 336px;
   }
 }

 .styles_ImagineHeader__oCsJu h1 {
     font-family: GT Walsheim;
     color: White;
     font-size: 26px;
     letter-spacing: normal;
     font-weight: 900!important;
     margin: 100px 0 45px;
     max-width: 350px;
 }

 @media (min-width: 1100px){
 .styles_ImagineWrapper__4xP9D {
     flex: 0 1 auto;
   }
 }
 .styles_Imagine__1sEZh {
     display: flex;
     flex-direction: column;
 }

 .styles_ImagineCopy__3yFth {
     color: #000;
     font-size: 14px;
     line-height: 22px;
     max-width: 350px;
     align-self: flex-end;
 height: 273px;
 }

 .content-section {
     display: block;
     overflow: hidden;
     background-color: #e9e8e8;
     padding-top: 25px;
     padding-bottom: 75px;
     text-align: center;
     -o-object-position: 50% 50%;
     object-position: 50% 50%;
 }

 .content-wrapper {
     position: relative;
     width: 100%;
     max-width: 1265px;
     margin-top: 0;
     padding-top: 0;
     padding-right: 25px;
     padding-left: 25px;
 }
 .w-container {
     margin-left: auto;
     margin-right: auto;
     max-width: 940px;
 }
 ._49-column-2 {
   display: block;
       width: 60%;
       max-width: 708px;
       margin-right: auto;
       margin-left: auto;
       text-align: center;
 }
 .mini-title {
     margin-bottom: 10px;
     font-size: 13.5px;
 }
 .center-box, .mini-title {
     font-family: Roboto,sans-serif;
     color: #b89d5f;
     font-weight: 700;
     letter-spacing: 1.5px;
     text-transform: uppercase;
 }
 .top-border-2._10 {
     margin-top: 10px;
 }
 .top-border-2 {
   position: relative;
     z-index: 10;
     margin-top: 20px;
 }
 p {
   color: #141414;
     margin-top: 0;
     font-size: 20px;
     margin-bottom: 10px;
 }
 .top-border._20 {
     margin-top: 20px;
 }
 .form-block-2 {
   box-sizing: border-box;
     display: block;
     max-width: 600px;
     margin-bottom: 0;
 }
 .w-form {
     margin: 0 0 15px;
 }
 .flex-2 {
     display: flex;
     width: 100%;
     -webkit-flex-wrap: wrap;
     -ms-flex-wrap: wrap;
     flex-wrap: wrap;
 }
 .text-field-2 {
   font-family: 'Austin-Italic';
   font-style: italic;
     width: 34%;
     height: 60px;
     padding-left: 21px;
     border-style: solid none solid solid;
     border-width: 1px;
     border-color: #b89d5f;
     border-top-left-radius: 3px;
     border-bottom-left-radius: 3px;
 }
 .submit-button-2 {
   font-family: 'Bahnschrift';
     font-weight: 700;
   width: 23%;
     float: left;
   height: 64px;
   border: none;
   margin: 0;
   background: #b89d5f;
   color: #fff;
   text-transform: uppercase;
   font-size: 12px;
   margin: 0;
 }

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
          <img src="images/dslogo.png" alt="">
      </div>
      <div class="inner_main_menu">
          <ul id="menu">
              <li class="one"><a href="New_GalleryHome.php">Home</a></li>
              <li class="two"><a href="AboutUs.php">About</a></li>
              <li class="three"><a href="gallery.php">Gallery</a>
                 <ul>
                      <li><a href="">Residenial</a></li>
                      <li><a href="">Retail</a></li>
                      <li><a href="">Corporate</a></li>
                </ul>
              </li>
              <li class="four"><a href="ContactUs.php">Contact</a></li>
              <li class="five"><a href="ContactUs.php">Map</a></li>
              <li class="six"><a href="newsletter.php">Newsletter</a></li>
            <hr>
          </ul>
      </div>
  </div>
</header>
