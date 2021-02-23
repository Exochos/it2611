<?php include('includes/config.php'); ?>
<?php include('includes/header.php'); ?>




<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8">

        <div class="card" style="background-color:<?php echo $color ?>;">
        <h2 class="headerDog">Dog of the day for: <?php echo $day ?></h2>
        <img src="<?php echo "images/" . $pic; ?>" alt="" style="width:100%">
        <h2><b><?php echo $alt ?></b></h2> 
        <p><?php echo $p ?></p><br>
        Source: Wikipedia
        </div>
                    </div>
    <div class="col-sm-4">
                    <aside>
                        <b>Want more dogs? Select another day Below!</b></br>
                        <a href="daily.php?today=Monday">Monday</a><br>
                        <a href="daily.php?today=Tuesday">Tuesday<a><br>
                        <a href="daily.php?today=Wednesday">Wednesday<a><br>
                        <a href="daily.php?today=Thursday">Thursday<a><br>
                        <a href="daily.php?today=Friday">Friday<a><br>
                        <a href="daily.php?today=Saturday">Saturday<a><br>
                        <a href="daily.php?today=Sunday">Sunday<a><br>
                    </aside>
    </div></div></div>


<?php include('includes/footer.php'); ?>