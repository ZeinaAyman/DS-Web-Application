<?php
include '../../app/Model/Admin.php';
include '../../app/View/ViewAdmin.php';
include '../../app/Controller/AdminController.php';

$Model = new Admin();
$ViewAdmin = new ViewAdmin();
$AdminController = new AdminController($Model);
 ?>
<link rel="stylesheet" href="../css/master.css">
<link rel="stylesheet" href="../css/Tables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="navbar">
  <h2>Designs Solutions</h2>
  <div class="links">
    <a href="Login.php">Log Out</a>
  </div>
</div>
<a href="Admin.php" style="text-decoration: none;"><h2>Back</h2></a>
<?php echo $ViewAdmin->ListEmployees($AdminController->C_GetAllUsers()); ?>


<script type="text/javascript">


var btn = document.getElementsByClassName("myBtn");
var numComments = btn.length;
for (var i = 0; i < numComments; i++) {
    $(btn[i]).one("click", function() {

        console.log(this.dataset.id);
        jQuery.ajax({
                type: "POST",
                url: "DeleteAccount.php",
                data: {user_id:this.dataset.id}
            }
        );

    });

}

</script>
