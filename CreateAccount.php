<?php
      include 'Model/Admin.php';
      include 'View/ViewAdmin.php';
      include 'Controller/AdminController.php';

      $Model = new Admin();
      $ViewAdmin = new ViewAdmin();
      $DesignerController = new AdminController($Model);
      session_start();
?>

<link rel="stylesheet" href="master.css">
<style media="screen">
  .create-acc
  {
   margin-left: 42%;
    color: #151515;
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
  background-color: #B89D5F;
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
  }

.input{
  text-align: center;
}
.input .placeholder{
  left: 145px;
}
</style>
<div class="topnav">
  <h2>Designs Solutions</h2>
  <!-- <h3>LOGO</h3> -->
</div>

<div class="create-acc">
  Create Account
</div>
<?php
  $DesignerController->C_CreateAccount();
 ?>

  <div class="createacccontainer">
    <?php echo $ViewAdmin->CreateAccountForm(); ?>

  </div>
</div>
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
