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
   <?php while ($row = $q->fetch()): ?>
    <tr>
        
        <td><a href="view.php?id=<?php echo htmlspecialchars($row['dogID']); ?>"><?php echo htmlspecialchars($row['dogName']); ?><a></td>
        <td><?php echo htmlspecialchars($row['dogBreed']) ?></td>
        <td><?php echo htmlspecialchars($row['dogAge']); ?></td>
        <td><?php echo htmlspecialchars($row['dogImg']); ?></td>
        <td><?php echo htmlspecialchars($row['dogWeight']); ?></td>
        <td><?php echo htmlspecialchars($row['dogDesc']); ?></td>
        <td><?php echo htmlspecialchars($row['dogDesc']); ?></td>
    </tr>
<?php endwhile; ?>


<!-- Include -- Footer -->        
<?php include('includes/footer.php'); ?>