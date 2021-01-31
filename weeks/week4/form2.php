<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My First Form</title>
  <meta name="description" content="form page">
  <meta name="author" content="jeremy">
  <style>
      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
      form {
          width: 400px;
          margin: 0 auto;
      }
      fieldset {
          padding: 10px;
      }
      label {
          display: block;
          margin-bottom: 5px;
      }
      input {
          display: block;
          margin-bottom: 10px;
      }
  </style>
</head>
<body>
<form action="" method="post">
    <fieldset>
     <label>First Name</label>
     <input type="text" name="firstname">
     <label>Last Name</label>
     <input type="text" name="lastname">
     <label>Email</label>
     <input type="email" name="email">
     <label>Comments</label>
     <textarea name="comments"></textarea>
     <input type="submit" value="Send it!">
     <p><a href="">Reset</a></p>
    </fieldset>
</form>
<?php
    if (isset($_POST['firstname'],
              $_POST['lastname'],
              $_POST['email'],
              $_POST['comments'],)) {
                  
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $comments = $_POST['comments'];

              }




?>
</body>
</html>