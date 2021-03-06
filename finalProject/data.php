<?php
    error_reporting(E_ALL);
    session_start();
?>
<?php include('includes/config.php'); ?>
<?php include('includes/header.php')?>
<?php   
  require_once 'includes/credentials.php';
  $db = mysqli_connect("localhost", $DB_USER,$DB_PASSWORD,$DB_NAME);
  if(mysqli_connect_errno()){
    echo mysqli_connect_error();
  }
  $query = "SELECT * FROM homes";
  $results = mysqli_query($db,$query);
  $rows = [];
?>

    <!-- Begin page content -->
    <main role="main" class="container">
    <div class="row">
            <div class="col-sm-8">
              <h1 class="mt-5">Houses in our Database:</h1>
              <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Home ID</th>
                        <th>Home Title</th>
                        <th>Home Price</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($results)): ?>
                      <tr>
                        <td><a href="view.php?id=<?php echo htmlspecialchars($row['homeid']);?>"><?php echo htmlspecialchars($row['homeid']); ?> - Details</a></td>
                        <td><?php echo htmlspecialchars($row['hometitle']) ?></td>
                        <td>$<?php echo htmlspecialchars($row['homeprice']); ?></td>
                      </tr>
                      <?php endwhile; ?>
                </tbody>
            </table>
            
            </div>
    <div class="col-sm-4">
    <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1h5_4gqWHkpTqzYYgb317Y7BuOV5Oid-m" width="640" height="480"></iframe></p>
    </div>
    </main>
<?php include('includes/footer.php'); ?>