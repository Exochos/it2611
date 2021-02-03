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

<form action method='post'>
    <h1>Adder.php</h1>
    <label>Enter the first number:</label><input type="text" name="num1"><br>
    <label>Enter the second number:</label><input type="text" name="num2"><br>
    <input type="submit" value="Add Em!!"> 
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

