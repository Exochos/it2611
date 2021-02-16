<?PHP



?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>My Emailable Form</title>
  <meta name="description" content="Emailable form for ITC 261">
  <meta name="author" content="Jeremy Ward">
  <style>
    * {
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
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
        background-color: white;
        border: 1px solid;
        padding-left: 10px;
        padding-bottom:5px;
        font-size: 1.2em;
        margin: 5px;
      }
      form {
          width: 600px;
          border: 1px solid;
          background-color: white;

      }
      label, input {
          padding: 5px;
          margin: 5px;
      }
      ul {
        list-style-type: none;
      }
    fieldset {
        padding-left: 10px;
    }
      .button {
            background-color: lightblue;
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

<!-- Form below --><h1>My Emailable form newest  </h1><br>
<form method="post">

    <fieldset>

     <label><b>First Name
        <input type="text" name="fname" value="<?php if (isset($_POST['fname'])) echo htmlspecialchars($_POST['fname']);?>"><br>
        <?php 
            if (empty($_POST['fname'])) {
                echo '<div style="color:red;">Please fill out your First Name</div>';
        }
        ?>
    </b></label>
    <label><b>Last Name
        <input type="text" name="lname" value="<?php if (isset($_POST['lname'])) echo htmlspecialchars($_POST['lname']);?>"><br>
        <?php 
            if (empty($_POST['lname'])) {
                echo '<div style="color:red;">Please fill out your Last Name</div>';
        }
        ?>
     </b></label>

    <label><b>Email
    <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"><br>
        <?php 
            if (empty($_POST['email'])) {
                echo '<div style="color:red;">Please enter your email address</div>';
        }
        ?>
    </b></label>

      <ul>
        <li><b>Gender</b></li>
        <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>Female</li>
        <li><input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>>Male</li>
        <li><input type="radio" name="gender" value="other" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked"'; ?>>Other</li><br>
        <?php 
            if (empty($_POST['gender'])) {
                echo '<div style="color:red;">Please select your gender</div><br>';
        }
        ?>


      </ul>
      <label><b> Favorite Wines </b></label>
      <ul>
        <li><input type="checkbox" name="wines" value="cab" <?php if (isset($_POST['wines']) && $_POST['wines'] == 'cab') echo 'checked="checked"'; ?>>Cabernet</li>
        <li><input type="checkbox" name="wines[]" value="merlot">Merlot</li>
        <li><input type="checkbox" name="wines[]" value="syrah">Syrah</li>
        <li><input type="checkbox" name="wines[]" value="malbec">Malbec</li>
        <li><input type="checkbox" name="wines[]" value="shiraz">Shiraz</li>
      </ul><br>
    <?php 
        if (empty($_POST['wines'])) {
            echo '<div style="color:red;">Please select a favorite wine</div>';
        }
    ?><br>
    <label><b>Select a Region:</b></label><br>
      <select name="region">
          <option value="NULL">Select One</option>
          <option value="nw" <?php if (isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected'; ?>>Northwest</option>
          <option value="sw" <?php if (isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected'; ?>>Southwest</option>
          <option value="mw" <?php if (isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected'; ?>>Midwest</option>
          <option value="ne" <?php if (isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected'; ?>>Northeast</option>
          <option value="south" <?php if (isset($_POST['region']) && $_POST['region'] == 'south') echo 'selected'; ?>>South</option><br>
          <?php 
              if (empty($_POST['region'])) {
                    echo '<div style="color:red;">Please select a region</div>';
               }
          ?><br>
    </select><br><br>

    <label><b>Comments</b><br>
    <textarea name="comments"></textarea>
    </label><br>    <?php 
            if (empty($_POST['comments'])) {
                echo '<div style="color:red;">Please Enter a comment</div><br>';
        }
    ?><br>

    <label><b>Agree</b>
        <ul><li><input type="radio" name="agree" value="agree">Agree</li></ul>
    </label><br>
    <?php 
            if (empty($_POST['agree'])) {
                echo '<div style="color:red;">Please Agree</div><br>';
        }
    ?>
    <br>

     <input class="button" type="submit" value="Convert it!">
     <a href="" class="button">Reset me</a>





     <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['gender'], $_POST['wines'], $_POST['region'], $_POST['comments'], $_POST['agree']))  {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];

                $to = 'exochos@gmail.com';
                $subject = 'Test email for my form 1 '.date('m/d/y').'';
                $body  = 'Hello'.$fname. ' ' . $lname.'';
                $body .= 'your email is:'.$email.'';
                $body .= 'Your gender is: '.$gender.'';
                $body .= 'Favorite Region: '.$region.'';

                mail($to, $subject, $body);
                header('Location:thx.php');

            }//end if
        }// end more if

?>
    </fieldset>
    </form>

<a href="">HTML VALID</a><br>
<a href="">CSS VALID</a>
</div>
</body>
</html>