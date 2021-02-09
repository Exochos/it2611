
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Our Trip Calculator</title>
  <meta name="description" content="Gas Calculator Form for IT162">
  <meta name="author" content="Jeremy Ward">
  <style>
    .contain {
        display: block;
        max-width: 400px;
        width: 400px;
        background-color: beige;
        border: 1px solid;
        padding-left: 5px;
        padding-bottom:2px;
    }
    ul {
        list-style-type: none;
    }
    form, fieldset {
        border: none;
    }
    .box {
        width: 400px;
        background-color: ivory;
        border: 1px solid;
        padding-top: 10px;
        padding-left: 5px;
        padding-bottom:5px;
      }
      label, input {
          padding: 5px;
          margin: 5px;
      }
  </style>
</head>
<body>
<!-- Form below -->
<div class="contain">
<form action="" method="post">
<h1> Our Trip Calculator</h1>
    <fieldset>
     <label for="name"><h2><b>Your name</b></h2></label>
     <input type="text" name="name"><br>
     <label for="miles"><h2><b>How many miles will you be driving</b></h2></label>
     <input type="text" name="miles"><br>
     <label for="hours"><h2><b>How many hours per day would you like to be driving?</b></h2></label>
     <input type="text" name="hours"><br>
      <ul><p><b>Price per gallon:</b></p>
        <li><input type="radio" id="" name="ppg" value="3.00">$3.00</li>
        <li><input type="radio" id="" name="ppg" value="3.50">$3.50</li> 
        <li><input type="radio" id="" name="ppg" value="4.00">$4.00</li>
      </ul>
      <label for="efficiency"><b>Fuel Efficiency</b></label>
      <select name="efficiency" id="eff">
          <option value="30">terrible</option>
          <option value="35">bad</option>
          <option value="40">neutral</option>
          <option value="45">good</option>
          <option value="50">amazing</option>
    </select><br>

     <input type="submit" value="Convert it!"><input type="reset" value="Reset">

    </fieldset>
</div>
<?php
/*
    If fields are full
    then calculate 
    Otherwise throw an error relevent to the error.
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['miles']) || empty($_POST['name']) || empty($_POST['hours']) || empty($_POST['ppg'])) {
        echo '<br><div class="box">';
        echo '<h1 style="color:red;text-align:center">Error!</h1>';
        echo 'Please fill out the form completely';
        echo '</div>';
    }


    if (isset($_POST['miles'],$_POST['ppg'],$_POST['efficiency']) && is_numeric($_POST['miles'])) {

        $miles = abs($_POST['miles']);
        $ppg = $_POST['ppg'];
        $fe = $_POST['efficiency'];
        $total = ceil( ($miles / $fe) * $ppg );


        echo '<div class="box">';
        echo '<p>You have driven: '. $miles .' miles<br>'; 
        echo 'Your Vehicle has an efficiency rating of '. $fe .' miles per gallon'; 
        echo "<h3>Your total cost for gas will be $" .$total . " dollars</h3>";
        echo '</div>';
    }

}


?>
</body>
</html>