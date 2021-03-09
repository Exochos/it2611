<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>


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
?>
<!-- Begin body content -->
<div class="container" style="margin-top:30px">
    <!-- row here -->
    <div class="row">
        <div class="col-sm-8">
        <h1>Dogs I have known</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Dog Name</th>
                        <th>Dog Breed</th>
                        <th>Dog Age</th>
                        <th>Dog Weight</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            
                            <td><a href="view.php?id=<?php echo htmlspecialchars($row['dogID']); ?>"><?php echo htmlspecialchars($row['dogName']); ?></a></td>
                            <td><?php echo htmlspecialchars($row['dogBreed']) ?></td>
                            <td><?php echo htmlspecialchars($row['dogAge']); ?></td>
                            <td><?php echo htmlspecialchars($row['dogWeight']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div></div>
   
            





  
<?php include('includes/footer.php'); ?>