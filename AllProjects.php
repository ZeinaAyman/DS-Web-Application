<?php include 'navbar.php';
      include 'DB.php';

      $sql = "SELECT * FROM project";
      $result = $conn->query($sql);
      ?>
<link rel="stylesheet" href="Project.css">
<body onload="ready()">
  <h1 class="title">All Projects</h1>
  <?php while($row = $result->fetch_assoc()) { ?>
  <div class="project"  >
    <div class="p-img">

    </div>
    <div class="p-info">
      <h1>Project: <?php echo $row['id']; ?></h1><br>
      <div class="p-h3">Client: <?php echo $row['name']; ?></div><br>
      <div class="p-h3">Designer 1 FullName</div><br>
      <div class="p-h3">Designer 1 ID</div>
    </div>
  </div>

<?php } ?>


</body>
<script type="text/javascript">
function ready() {
    console.log("hi");
    var projects = document.getElementsByClassName('project');
    for (var i = 0; i < projects.length; i++) {
      projects[i].addEventListener("mouseover",function functionName() {
        this.style.background='#59a2a6';
      });
      projects[i].addEventListener("mouseleave",function functionName() {
        this.style.background='#D6E8E9';
      });
    }
}
</script>
