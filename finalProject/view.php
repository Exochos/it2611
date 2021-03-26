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
                        <td><a href="view.php?id=<?php echo htmlspecialchars($row['homeid']); ?> ?>"><?php echo htmlspecialchars($row['homeid']); ?></a></td>
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
    <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1h5_4gqWHkpTqzYYgb317Y7BuOV5Oid-m" width="640" height="480"></iframe></p>
    </div>
    </main>
<div class="container" style="margin:0 auto;">
<table>


</table>
</container>
<?php include('includes/footer.php'); ?>