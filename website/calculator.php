
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
        max-width: 600px;
        width: 600px;
        background-color: beige;
        border: 1px solid;
        padding-left: 10px;
        padding-bottom:5px;
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
<h1> Our Calculator </h1>
<form action="" method="post">
    <fieldset>
     <label for="miles"><h2><b>How many miles will you be driving</b></h2></label>
     <input type="text" name="miles"><br>
    
      <ul><p><b>Price per gallon:</b></p>
        <li><input type="radio" id="" name="ppg" value="3.00">$3.00</li>
        <li><input type="radio" id="currency" name="ppg" value="3.50">$3.50</li> 
        <li><input type="radio" id="currency" name="ppg" value="4.00">$4.00</li>
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

    if (empty($_POST['name1'])) {
        echo "Please enter your name<br>";
    }
    if(empty($_POST['email1'])) {
        echo "Please enter your email<br>";
    }
    if(empty($_POST['cash1'])) {
        echo "Please enter cash amount<br>";
    }
    if(empty($_POST['currency'])) {
        echo "Please select a currency<br>";
    }

    if (isset($_POST['name1'],$_POST['email1'],$_POST['cash1'],$_POST['currency']) && is_numeric($_POST['cash1']) && is_numeric($_POST['currency']))  {
        $name = $_POST['name1'];
        $amount = $_POST['cash1'];
        $currency = $_POST['currency'];
        $total = $amount * $currency;


        echo '<div class="box">';
        echo '<h2>Hello '. $name .'</h2>'; 
        echo "Your new total is: $" .$total . "";
        echo '</div>';
    }

}


?>
</body>
</html>