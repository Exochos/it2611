
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
<h1> Our Trip Calculator</h1>
<form action="" method="post">

    <fieldset>
     <label for="name"><h2><b>Your name</b></h2></label>
     <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>"><br>

     <label for="miles"><h2><b>How many miles will you be driving</b></h2></label>
     <input type="text" name="miles" value="<?php if (isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>"><br>

     <label for="hours"><h2><b>How many hours per day would you like to be driving?</b></h2></label>
     <input type="text" name="hours" value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>"><br>

      <ul><p><b>Price per gallon:</b></p>
        <li><input type="radio" id="" name="ppg" value="3.00" <?php if (isset($_POST['ppg']) && $_POST['ppg'] == '3.00') echo 'checked="checked"'; ?>>$3.00</li>
        <li><input type="radio" id="" name="ppg" value="3.50"<?php if (isset($_POST['ppg']) && $_POST['ppg'] == '3.50') echo 'checked="checked"'; ?>>$3.50</li> 
        <li><input type="radio" id="" name="ppg" value="4.00"<?php if (isset($_POST['ppg']) && $_POST['ppg'] == '4.00') echo 'checked="checked"'; ?>>$4.00</li>
      </ul>
      <label for="efficiency"><b>Fuel Efficiency</b></label>
      <select name="efficiency" id="eff">
          <option value='NULL'>Please Select an option</option>
          <option value="30" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '30') echo 'selected'; ?>>terrible @30MPG</option>
          <option value="35" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '35') echo 'selected'; ?>>bad @35MPG</option>
          <option value="40" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '40') echo 'selected'; ?>>neutral @40MPG</option>
          <option value="45" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '45') echo 'selected'; ?>>good @45MPG</option>
          <option value="50" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '50') echo 'selected'; ?>>amazing @50MPG</option>
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
        foreach($_POST as $key => $value) {
            if ($_POST[$key] == NULL) {
                echo '<div class="box"><h2 style="color:red">';
                echo "Please fill out the $key";
                echo '</h2></div>';
            }
        }
        if (($_POST['efficiency'])  == 0) {
            echo '<div class="box"><h2 style="color:red">';
            echo "Please select a fuel efficiency";
            echo '</h2></div>';    
        }
    }


    else {
        $name = $_POST['name'];
        $miles = abs($_POST['miles']);
        $hours = $_POST['hours'];
        $ppg = $_POST['ppg'];
        $fe = $_POST['efficiency'];
        $total = ceil( ($miles / $fe) * $ppg );


        echo '<div class="box">';
        echo '<h2 style="color:red;"> Calculator results</h2>';
        echo '<p>'. $name .', you will be driving <b>'. $miles .' miles</b><br>'; 
        echo 'Your Vehicle has an efficiency rating of <b>'. $fe .' miles per gallon</b><br>'; 
        echo "Your total cost for gas will be<b> $" .$total . " dollars</b><br>";
        echo 'your driving total of <b> ' . $hours . ' hours equating to '. floor(($miles / $hours)/60) . ' days.</p>';
        echo '</div>';
    }

}


?>
</body>
</html>