
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Extra Credit</title>
  <meta name="description" content="Currency Form for IT162">
  <meta name="author" content="Jeremy Ward">
  <style>

  .container {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px;
    padding: 10px;
    flex-direction: column;
    border: none;
    list-style-type: none;
    }
    .box {
        background-color: lightblue;
        border: 1px solid;
        padding-left: 10px;
        padding-bottom:5px;
        font-size: 1.2em;
        margin: 5px;
      }
      form {
          width: 600px;
          border: 1px solid;
          background-color: lightblue;

      }
      label, input {
          padding: 5px;
          margin: 5px;
      }
      ul {
        list-style-type: none;
    }
      .button {
            background-color: white;
            border: none;
            color: black;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 8px 8px;
            cursor: pointer;
            border-radius: 10px;
}
  </style>
</head>
<body>
<div class="container">

<!-- Form below --><h2> Extra Credit Currency Assignment </h2><br>
<form method="post">

    <fieldset>

     <label>Name
        <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>"><br>
     </label>
     

     <label for="email">Email</label>
     <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"><br>

     <label for="money">How much Money do you have?</label>
     <input type="text" name="money" id="money" value="<?php if (isset($_POST['money'])) echo htmlspecialchars($_POST['money']);?>"><br>

      <ul>
        <li><b>Choose your Currency:</b></li>
        <li><input type="radio" name="currency" value="0.013" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked"'; ?>>Rubles</li>
        <li><input type="radio" name="currency" value="0.76" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked="checked"'; ?>>Canadian Dollars</li> 
        <li><input type="radio" name="currency" value="1.28" <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked="checked"'; ?>>Pounds</li>
        <li><input type="radio" name="currency" value="1.18" <?php if (isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked="checked"'; ?>>Euros</li>
        <li><input type="radio" name="currency" value="0.0094" <?php if (isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked="checked"'; ?>>Yen</li>
      </ul>
      <select name="bank" id="bank">
          <option value="0">Please Select a Bank</option>
          <option value="1.01" <?php if (isset($_POST['bank']) && $_POST['bank'] == '1.01') echo 'selected'; ?>>Chase</option>
          <option value="1.02" <?php if (isset($_POST['bank']) && $_POST['bank'] == '1.02') echo 'selected'; ?>>Bank Of America</option>
          <option value="1.03" <?php if (isset($_POST['bank']) && $_POST['bank'] == '1.03') echo 'selected'; ?>>BECU</option>
          <option value="1.05" <?php if (isset($_POST['bank']) && $_POST['bank'] == '1.05') echo 'selected'; ?>>Alaska Credit Union</option>
    </select><br><br><br>
     <input class="button" type="submit" value="Convert it!">
     <a href="" class="button">Reset me</a>

    </fieldset>
    </form>
<?php
/*
    If fields are full
    then calculate 
    Otherwise throw an error relevent to the error.
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['money']) || empty($_POST['bank'])) {
        foreach($_POST as $key => $value) {
            if ($_POST[$key] == NULL) {
                echo '<div class="box">';
                echo "Please fill out $key <br>";
                echo '</div>';
            }
        }
        if ($_POST['bank'] == 0) {
            echo '<div class="box">';
            echo "Please select your Bank<br>";
            echo '</div>';
        }
    }
    else {
        $money = $_POST['money'];
        $currency = $_POST['currency'];
        $total = $money * $currency;
        if (($money * $currency) < 200) {
            echo "<br><br><div class='box' style='background-color: grey;padding-top:5px;'><br>";
            echo "I am a sad Panda, I have $$total American Dollars and I am going to look at kitten videos<br><br>";
            echo '
                    <iframe width="90%" height="500"
                        src="https://www.youtube.com/embed/oL4z_qRS8cM">
                    </iframe>
            ';
            echo "</div>";
        }
        else {
            echo "<br><br><div class='box' style='background-color: yellow;padding-top:5px;'><br>";
            echo "I am a happy camper, I have $$total American Dollars and I am going to buy a red panda<br><br>";
            echo '
                    <iframe width="90%" height="500"
                        src="https://www.youtube.com/embed/Qu59cLEA4HQ">
                    </iframe>
            ';
            echo "</div>";
        }
    }


}


?>
<a href="https://jigsaw.w3.org/css-validator/validator?uri=http://jeremyward.me/it2611/weeks/week5/extra-credit.php">HTML VALID</a><br>
<a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjeremyward.me%2Fit2611%2Fweeks%2Fweek5%2Fextra-credit.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS VALID</a>
</div>
</body>
</html>