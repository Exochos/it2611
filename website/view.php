<?php
require_once '../../../dbconfig.php';
$id = $_GET['id'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = 'SELECT *
               FROM dogs
               WHERE dogID = '.$id.'
              ORDER BY dogID';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

//echo 'Hello ' . htmlspecialchars($_GET["id"]) . '!';
?>

<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>
<?php 
    echo $sql;

?>


<!-- Include -- Footer -->        
<?php include('includes/footer.php'); ?>