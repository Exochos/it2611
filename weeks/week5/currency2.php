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
     <label for="cash1">Choose your Banking Institution</label>
     <input type="text" name="cash" id="cash1"><br>
      <ul>
        <li>
            <input type="radio" id="rub" name="type">
            <label for="rub">Rubles</label>
        </li>
      
        <li>
            <input type="radio" id="cad" name="type">
            <label for="cad">Canadian Dollars</label>
        </li>
             
        <li>
            <label for="pound">Pounds</label>
            <input type="radio" id="pounds" name="type"></li>
        <li>
            <label for="euro">Euros</label>
            <input type="radio" id="euro" name="type"></li>
        <li>
            <label for="yen">Yen</label>
            <input type="radio" id="yen" name="type"></li>
      </ul>
     <input type="submit" value="Convert it!">
     <p><a href="">Reset me</a></p>
    </fieldset>
<body>
  
</body>
</html>