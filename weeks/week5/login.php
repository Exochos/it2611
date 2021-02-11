<?php




?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Our Login Page</title>
  <meta name="description" content="Login Page for IT261">
  <meta name="author" content="Jeremy Ward">
  <style>
      form {
          width: 400px;
          border: 1px solid;
          background-color: AliceBlue;
      }
      label, input {
          padding: 5px;
          margin: 5px;
      }
      .box {
          width: 400px;
          border: 1px solid;
          background-color: AliceBlue;
          color: red;
      }
  </style>
</head>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
    <fieldset>

     <label for="name">Name</label>
     <input type="text" name="name" id="name"><br>

     <label for="pass">Password</label>
     <input type="text" name="password" id="pass"><br>

     <b>Are you a member?</b><input type="radio" id="yes" name="member">Yes<input type="radio" id="no" name="member">No<br>


     <input type="submit" value="Submit">
     <input type="reset" value="Reset">
    </fieldset>
</form>
<?php 


    if(isempty($_POST['name'])) {
        echo '<div class="box">Please Enter your name</div>';
    }
    if(isempty($_POST['name'])) {
        echo '<div class="box">Please Enter your password</div>';
    }



?>
<body>
  
</body>
</html>