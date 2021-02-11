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
          border: 1px solid black;
          background-color: white;
          color: red;
          margin: 2px;
          padding: 2px;
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
    <form action="href=''"><input type="submit" value="Reset" /></form>
    </fieldset>
</form>
<?php 


    if(empty($_POST['name'])) {
        echo '<div class="box">Please Enter your name</div>';
    }
    if(empty($_POST['pass'])) {
        echo '<div class="box">Please Enter your password</div>';
    }
    if(empty($_POST['member'])) {
        echo '<div class="box">Are you a member?</div>';
    }



?>
<body>
  
</body>
</html>