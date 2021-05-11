<?php
include 'DB.php';
$msg='';
$err = false;
 if(isset($_POST['Submit']))
  {
          $email=$_POST['email'];
          $password=$_POST['password'];

          if(!preg_match('/[a-z0-9._%+-]+@+[a-z0-9._%+-]+.+[a-z0-9._%+-]/',$email)){
            $msg="Please enter a valid email";
            $err = true;
          }

          if(!$err){
            $sql = "SELECT * FROM user Where Email='".$email."' And Password='".$password."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              echo "done";
              header("Location: Home.php");
            }
            else {
              $msg='User not found';
            }
          }

  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="master.css">
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        background-color: #847F79;
      }
    </style>
  </head>
  <body>
    <div class="topnav">
      <h2>Designs Solutions</h2>
    </div>

      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>

      <div class="container">
        <h1 style="color: #76323F;">Sign In</h1>
        <div class="error-msg">
          <?php if ($msg!='') {
            echo $msg;
          } ?>
        </div>
        <form action= "" method="post">
          <div class="input">
            <input class="info" type="text" placeholder="Email" required name="email">
          </div>
          <div class="input">
            <input class="info" type="password" placeholder="Password" required name="password"><br>
          </div>
        	<input class="button" type="submit" value="Log in" name="Submit">
        </form>
      </div>
  </body>
  <script type="text/javascript">
  var inputs = document.querySelectorAll('.input input');
  for (let i = 0; i < inputs.length; i++) {
    var placeholder = inputs[i].getAttribute('placeholder');
    var newPlaceholder = document.createElement('div');
    newPlaceholder.setAttribute('id', 'input' + i);
    newPlaceholder.classList.add('placeholder');
    newPlaceholder.innerHTML = placeholder;
    inputs[i].setAttribute('placeholder', '');
    inputs[i].parentElement.appendChild(newPlaceholder);
    placeholder = document.getElementById('input' + i);
    if (inputs[i].value.length > 0) {
      placeholder.classList.add('selected');
    } else {
      placeholder.classList.remove('selected');
    }

    inputs[i].addEventListener('input', function() {
      var placeholder = document.getElementById('input' + i);
      if (this.value.length > 0) {
        placeholder.classList.add('selected');
        this.parentElement.classList.add('selected');
      } else {
        placeholder.classList.remove('selected');
        this.parentElement.classList.remove('selected');
      }
    });
  }
  </script>
</html>
