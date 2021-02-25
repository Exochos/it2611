<!-- includer config and header -->
<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>

<!-- Begin body content -->
<div class="container" style="margin-top:30px">
    <!-- row here -->
    <div class="row">
        <div class="col-sm-8">

            <?php
                echo '<img class="card" src="images/'. rand(0,6) . '.jpg">';
            ?>

        </div>
        <div class="col-sm-4">
            <p>
            Random cute doggo here! Refresh to see a new one
            </p>
        </div>
    </div>
</div>
<!-- Include -- Footer -->        
<?php include('includes/footer.php'); ?>