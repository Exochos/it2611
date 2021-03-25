<?php include('includes/header.php')?>
<?php   
  require_once 'includes/credentials.php';
  $db = mysqli_connect("localhost", $DB_USER,$DB_PASSWORD,$DB_NAME);
  $query = "SELECT * FROM users";
  $results = mysqli_query($db,$query);
?>

    <!-- Begin page content -->
    <main role="main" class="container">
    <div class="row">
            <div class="col-sm-8">
              <h1 class="mt-5">Houses in our Database:</h1>
              <?php
                print_r($results);
                for($i=0; $i < 5; $i++) {
                  echo $results[$i];
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
                        <tr>
                        </tr>
                </tbody>
            </table>


            </div>
    <div class="col-sm-4">
    <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1h5_4gqWHkpTqzYYgb317Y7BuOV5Oid-m" width="640" height="480"></iframe></p>
    </div>
    </main>
<?php include('includes/footer.php'); ?>