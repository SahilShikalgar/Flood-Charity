<?php 
  include('./libraries.php');
  include('./jquery-datatable.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Helping Nation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="contributors.js"></script>
</head>
<body>
  <?php include('./navbar.php') ?>
  <div class="container-fluid">
    <div class="row mt-5 mb-5">
      <div class="col-md-11 mx-auto">
      <div class="table-responsive">
        <table id="contributor_table" class="table table-striped table-bordered text-center">
            <thead class="bg-secondary text-white">
              <tr>
                <th>Contributor Name</th>
                <th>Mobile Number</th>
                <th>Amount Contributed</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require_once('connection.php');
                $con = mysqli_connect($host,$name,$pass,$db);
                if($con != null) {
                  $sql = 'SELECT * from contributor';
                  $rows = mysqli_query($con, $sql);
                  foreach($rows as $row) {
                    ?>
                      <tr>
                        <td><?php echo $row['contr_name'] ?></td>
                        <td><?php echo $row['mobile_no'] ?></td>
                        <td><?php echo $row['amount_contributed'] ?></td>
                      </tr>
                    <?php
                  }
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
