<?php include('includes/header.php')?>
<?php
require_once 'includes/credentials.php';
$id = $_GET['id'];
$db = mysqli_connect("localhost", $DB_USER,$DB_PASSWORD,$DB_NAME);
$query = 'SELECT *
          FROM homes
           WHERE homeid = "'.$id.'";';

$results = mysqli_query($db,$query);

//echo 'Hello ' . htmlspecialchars($_GET["id"]) . '!';
?>
<div class="container" style="margin:0 auto;">
<table>
<?php while($row = mysqli_fetch_assoc($results)): ?>
                    <tr>
                        <td><a href="view.php?id=<?php echo htmlspecialchars($row['homeid']); ?> ?>"><?php echo htmlspecialchars($row['homeid']); ?></a></td>
                        <td><?php echo htmlspecialchars($row['hometitle']) ?></td>
                        <td>$<?php echo htmlspecialchars($row['homeprice']); ?></td>
                      </tr>
                    <tr>
                        <td><img src="images/<?php echo htmlspecialchars($row['homeimg']); ?>.jpg" alt="Homes"></td>
                    </td>
                    <tr>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                    </td>
                      <?php endwhile; ?>

</table>
</container>
<?php include('includes/footer.php'); ?>