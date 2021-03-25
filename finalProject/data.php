<?php include('includes/header.php')?>
<?php require_once 'includes/credentials.php';
              try {
                $pdo = new PDO("mysql:host='localhost';dbname=$DB_NAME, $DB_USER, $DB_PASSWORD");
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

    <!-- Begin page content -->
    <main role="main" class="container">
    <div class="row">
            <div class="col-sm-8">
              <h1 class="mt-5">Houses in our Database:</h1>

        
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


            </div>
    <div class="col-sm-4">
    <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1h5_4gqWHkpTqzYYgb317Y7BuOV5Oid-m" width="640" height="480"></iframe></p>
    </div>
    </main>
<?php include('includes/footer.php'); ?>