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
          width: 300px;
          border: 1px solid;
      }
      label, input {
          padding: 5px;
          margin: 5px;
      }
  </style>
</head>

<form action="" method="post">
    <fieldset>
     <label for="name1">Name</label>
     <input type="text" name="name" id="name1"><br>

     <label for="pass">Password</label>
     <input type="text" name="password" id="pass"><br>

      <ul>
        <li>
            <input type="radio" id="yes" name="member">
            <label for="yes">Yes</label>
        </li>
      
        <li>
            <input type="radio" id="no" name="member">
            <label for="no">No</label>
        </li>
      </ul>
     <input type="submit" value="Convert it!">
     <input type="reset" value="Reset">
    </fieldset>
<body>
  
</body>
</html>