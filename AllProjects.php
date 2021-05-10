<?php include 'navbar.php';
      include 'DB.php';

      $sql = "SELECT * FROM project";
      $result = $conn->query($sql);
      ?>
<link rel="stylesheet" href="Project.css">
<body>
  <h1 class="title">All Projects</h1>
  <?php while($row = $result->fetch_assoc()) { ?>
  <div class="project">
    <div class="p-img">

    </div>
    <div class="p-info">
      <h1>Project: <?php echo $row['id']; ?></h1><br>
      <div class="p-h3">Client: <?php echo $row['name']; ?></div><br>
      <div class="p-h3">Designer 1 FullName</div><br>
      <div class="p-h3">Designer 1 ID</div>
    </div>
    <div class="p-status">
      Status:<span class="status-orange">Ongoing</span>
    </div>
  </div>
<?php } ?>
  

</body>
