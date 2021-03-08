<?php
require_once '../../../dbconfig.php';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = 'SELECT *
               FROM dogs
              ORDER BY dogID';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

echo 'Hello ' . htmlspecialchars($_GET["id"]) . '!';
?>




<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>






<!-- Include -- Footer -->        
<?php include('includes/footer.php'); ?>