<?php
include $_SERVER['DOCUMENT_ROOT'].'/DS/app/Model/Employee.php';
include $_SERVER['DOCUMENT_ROOT'].'/DS/app/View/ViewUser.php';
include $_SERVER['DOCUMENT_ROOT'].'/DS/app/Controller/UserController.php';
$msg='';
$err = false;
$Model = new Employee();
$ViewUser = new ViewUser();
$UserController = new UserController($Model);
$UserController->C_Login();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="master.css">
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    </style>
  </head>
  <body>
    <div class="topnav">
      <h2>Designs Solutions</h2>
    </div>

      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>

      <div class="container">
        <h1 style="color: #E9E8E8;">Sign In</h1>
        <div class="error-msg">
          <?php if ($msg!='') {
            echo $msg;
          } ?>
        </div>
        <?php echo $ViewUser->LoginForm(); ?>
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
