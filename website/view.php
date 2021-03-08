<?php
require_once '../../../dbconfig.php';
$id = $_GET['id'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = 'SELECT *
               FROM dogs
               WHERE dogID = "'.$id.'";';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

//echo 'Hello ' . htmlspecialchars($_GET["id"]) . '!';
?>

<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>
<div class="container" style="margin:0 auto;">
<table>
   <?php while ($row = $q->fetch()): ?>
    <UL>
        <li><h1>Dog Name<a href="view.php?id=<?php echo htmlspecialchars($row['dogID']); ?>"><?php echo htmlspecialchars($row['dogName']); ?><a></h1></li>
        <li><?php echo htmlspecialchars($row['dogBreed']) ?></li>
        <li><?php echo htmlspecialchars($row['dogAge']); ?></li>
        <li><?php echo htmlspecialchars($row['dogWeight']); ?></li>
        <li><?php echo htmlspecialchars($row['dogDesc']); ?></li>
        <li><img src="images/<?php echo htmlspecialchars($row['dogImg']); ?>.jpg" alt=""></li>
    </UL>
<?php endwhile; ?>
</table>
</container>
<!-- Include -- Footer -->        
<?php include('includes/footer.php'); ?>