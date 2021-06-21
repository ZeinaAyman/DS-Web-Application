<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>


    <style>
        .navbar {
            overflow: hidden;
            background-color: #151515;

        }

        .navbar a {
            font-size: 17px;
            padding: 14px 16px;
            float: right;
            text-decoration: none;
            font-family: Arial;
            color: #E9E8E8;

            display: block;
            text-align: center;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .navbar a:not(:first-child) {
                display: none;
            }

            .navbar a.icon {
                float: left;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {

            .navbar.responsive {
                position: relative;
            }

            .navbar.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .navbar.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            .companyName {
                margin-left: 30px;
                margin-top: 5px;
                font-size: 22px;
            }
        }


        .companyName {
            position: absolute;
            font-family: sans-serif;
            color: #EDEAD3;
            padding-left: 14px;

        }
    </style>
</head>


<div class="navbar" id="mynavbar">
    <h1 class="companyName" value="true" id="companyName">Designs Solutions</h1>
    <div class="links">
        <a href="contactUs.php">Contact</a>
        <a href="AboutUs.php">About Us</a>
        <a href="gallery.php">Gallery</a>
        <a href="Home.php">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
<script>
    function myFunction() {
        document.getElementById("companyName").style.display = 'none';

        var x = document.getElementById("mynavbar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
</script>
