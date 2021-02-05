<?php










?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Currency</title>
  <meta name="description" content="Currency Form for IT162">
  <meta name="author" content="Jeremy Ward">
  <style>
      form {
          width: 300px;
          border: 1px solid;
      }
      label input {
          padding: 5px;
      }
  </style>
</head>

<form action="" method="post">
    <fieldset>
     <label for="name1">Name</label>
     <input type="text" name="name" id="name1"><br>

     <label for="email1">Email</label>
     <input type="email" name="email" id="email1"><br>

     <label for="cash1">How much Money do you have?</label>
     <input type="text" name="cash" id="cash1"><br>

     <input type="radio" id="age1" name="age" value="30">
     <label for="age1">0 - 30</label><br>
     <input type="radio" id="age2" name="age" value="60">
     <label for="age2">31 - 60</label><br>  
     <input type="radio" id="age3" name="age" value="100">
     <label for="age3">61 - 100</label><br><br>
     <input type="submit" value="Convert it!">
     <p><a href="">Reset me</a></p>
    </fieldset>
<body>
  
</body>
</html>