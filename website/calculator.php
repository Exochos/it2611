
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Gas Calculator</title>
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
        background-color: beige;
        border: 1px solid;
        padding-left: 10px;
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
<h1> Our Calculator</h1>
    <fieldset>
     <label for="miles"><h2><b>How many miles will you be driving</b></h2></label>
     <input type="text" name="miles"><br>
    
      <ul><p><b>Price per gallon:</b></p>
        <li><input type="radio" id="" name="ppg" value="3.00">$3.00</li>
        <li><input type="radio" id="" name="ppg" value="3.50">$3.50</li> 
        <li><input type="radio" id="" name="ppg" value="4.00">$4.00</li>
      </ul>
      <label for="efficiency"><b>Fuel Efficiency</b></label>
      <select name="efficiency" id="eff">
          <option value="terrible">terrible</option>
          <option value="bad">bad</option>
          <option value="neutral">neutral</option>
          <option value="good">good</option>
          <option value="amazing">amazing</option>
    </select><br>

     <input type="submit" value="Convert it!"><input type="submit" value="Reset">

    </fieldset>
</div>
<?php
/*
    If fields are full
    then calculate 
    Otherwise throw an error relevent to the error.
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['miles'])) {
        echo "Please enter the number of miles<br>";
    }
    if(empty($_POST['ppg'])) {
        echo "Please select a price per gallon<br>";
    }
    if(empty($_POST['efficiency'])) {
        echo "Please select your fuel efficiency<br>";
    }


    if (isset($_POST['miles'],$_POST['ppg'],$_POST['efficiency']) && is_numeric($_POST['miles'])) {

        $miles = $_POST['miles'];
        $ppg = $_POST['ppg'];
        $fe = $_POST['efficiency'];
        $total = $miles * $ppg * $fe;


        echo '<div class="box">';
        echo '<h2>Hello '. $miles .'</h2>'; 
        echo "Your new total is: $" .$total . "";
        echo '</div>';
    }

}


?>
</body>
</html>