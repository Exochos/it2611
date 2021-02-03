<?php $title = "Troubleshoot" ?>
<head>
<link rel="stylesheet" href="../css/style.css"> 
<style>
   form {
       width: 80%;
       left: 20px;
   }
   b {
    color: red;
   }
</style>
</head>
<?php include('../includes/header.php'); ?>
<div class="main">
<?php include('../includes/nav.php'); ?>
<main class='centerA'>
<h1>Adder.php</h1>
<form action method='post'>
    <!--missing form action and and the beginning label tag -->
    <label>Enter the first number:</label><input type="text" name="num1"><br>
    <!-- Num1 was mispelled and again missing the <label> tag -->
    <label>Enter the second number:</label><input type="text" name="num2"><br>
    <input type="submit" value=" Add Em!! "> 
    <!-- $myTotal -= $num1 + $Num2; is incorrect-->
    <!-- echo '<h2>You added ->". $num1 ." <- and .$num2. '"'; error here-->
</form>
<?php
if(isset($_POST['num1'], $_POST['num2'])) {

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
    $myTotal = $num1 + $num2; 
    echo "<h2>You added " . $num1 . " and " . $num2;

    echo "<p> and the answer is: ";
    echo '<b>' . $myTotal .'</b>!</p>';
    echo'<p><a href="">Reset page</a>';

}
?>
</div>
</main>
<?php include('../includes/footer.php');?>
</body>
</html> 

