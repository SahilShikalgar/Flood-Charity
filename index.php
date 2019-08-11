<?php 
  include('./libraries.php');
  require_once('connection.php');
  $con = mysqli_connect($host,$name,$pass,$db);

  if($con != null){
    $amount_contributed = 0;
    $reported_people = 0;
    $sql = "select sum(amount_contributed) as sum from contributor";
    $rows = mysqli_query($con, $sql);
    foreach($rows as $row){
      $amount_contributed = $row['sum'];
    }

    $sql = "select count(person) as person_count from person";
    $rows = mysqli_query($con, $sql);
    foreach($rows as $row){
      $reported_people = $row['person_count'];
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Helping Nation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="index.css"></link>
  <script type="text/javascript" src="index.js"></script>
</head>
<body style="background-color: #f2f2f2 !important;">
  <?php require('navbar.php'); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 mt-4 mb-4">
        <a class="btn btn-success text-white button">
          <i class="fa fa-flag fa-2x" aria-hidden="true"></i></br>
          Report Affected People
        </a>
      </div>
      <div class="col-md-3 mt-4 mb-4">
        <a class="btn btn-success text-white button" href="dashboard.php">
          <i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i></br>
          Help Affected People
        </a>
      </div>
      <div class="col-md-3 mt-4 mb-4">
        <a class="btn btn-success text-white button" href="affected.php">
          <i class="fa fa-users fa-2x" aria-hidden="true"> <span class="font_size" id="people_count" ><?php echo $reported_people ?></span></i></br>
          Total Affected People
        </a>
      </div>
      <div class="col-md-3 mt-4 mb-4">
        <a class="btn btn-success text-white button">
          <i id="total_c_made" class="fa fa-inr fa-2x" aria-hidden="true"> <span class="font_size" id="total_contribution"><?php echo $amount_contributed ?></span></i></br>
          Total Contributions Made
        </a>
      </div>
    </div>
  </div>
</body>
</html>