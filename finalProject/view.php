<?php include('includes/header.php')?>
<?php
require_once 'includes/credentials.php';
$id = $_GET['id'];
$db = mysqli_connect("localhost", $DB_USER,$DB_PASSWORD,$DB_NAME);
$query = 'SELECT *
          FROM homes
           WHERE homeid = "'.$id.'";';

$results = mysqli_query($db,$query);
?>
<main role="main" class="container">
  <div class="row">
     <div class="col-sm-8">
              <table class="table table-bordered table-condensed">
                <tbody>
                <?php while($row = mysqli_fetch_assoc($results)): ?>
                    <tr>
                        <td><img src="images/<?php echo htmlspecialchars($row['homeimg']); ?>.jpg" alt="Homes"></td>
                    </td>
                    </tr>
                    <tr>
                        <td><?php echo htmlspecialchars($row['hometitle']) ?></td>
                        <td>$<?php echo htmlspecialchars($row['homeprice']); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                    </tr>
                    </td>
                      <?php endwhile; ?>
                </tbody>
            </table>
            </div>
    <div class="col-sm-4">
    </div>
    </main>
<?php include('includes/footer.php'); ?>