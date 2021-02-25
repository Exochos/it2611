<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>


<?php
require_once '../../dbconfig.php';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = 'SELECT lastname,
                    firstname,
                    phone
               FROM myTable
              ORDER BY lastname';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
        
            <h1>People I barely know</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Job Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['lastname']) ?></td>
                            <td><?php echo htmlspecialchars($row['firstname']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>






<!-- Include -- Footer -->        
<?php include('includes/footer.php'); ?>