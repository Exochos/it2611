<?php $title = "Troubleshoot" ?>
<head>
<link rel="stylesheet" href="../css/style.css"> 
</head>
<?php include('../includes/header.php'); ?>
<div class="main">
<?php include('../includes/nav.php'); ?>
<main class='centerA'>
    <form><h1>Adder.php</h1> </form action="post">
        <label>Enter the first number:</label><input type="text" name="Num1"><br>
        <label>Enter the second number:</label><input type="text" name="num2"><br>
        <input type="submit" value="Add Em!!"> 
        </form>
</div>
</main>
<?php include('../includes/footer.php');?>
</body>
</html> 

<?php
if (isset($_POST['num1']),($_POST['num2'])) {

	$num2 = $_POST['num2'];
	$myTotal = $num1 + $Num2; 
    echo "<h2>You added " . $num1 . " and " . $num2;
}
  #  echo ' <p> and the answer is <br>';
   # echo '<style="color:red;">" $myTotal ."!</p>""';
   # echo'<p><a href="">Reset page</a>'

?>