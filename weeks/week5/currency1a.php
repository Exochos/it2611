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

     <label for="email1">Email</label>
     <input type="email" name="email" id="email1"><br>

     <label for="cash1">How much Money do you have?</label>
     <input type="text" name="cash" id="cash1"><br>
      <ul>
        <li>
            <label for="rub">Rubles</label>
            <input type="radio" id="rub" name="rubles"></li><br>
     
        <li>
            <label for="cad">Canadian Dollars</label>
            <input type="radio" id="cad" name="candollars"></li><br>
             
        <li>
            <label for="pound">Pounds</label>
            <input type="radio" id="pounds" name="pounds"></li><br>
      </ul>
     <input type="submit" value="Convert it!">
     <p><a href="">Reset me</a></p>
    </fieldset>
<body>
  
</body>
</html>