
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
<body>
<!-- Form below -->
<form action="" method="post">
    <fieldset>

     <label for="name1">Name</label>
     <input type="text" name="name" id="name1"><br>

     <label for="email1">Email</label>
     <input type="email" name="email" id="email1"><br>

     <label for="cash1">How much Money do you have?</label>
     <input type="text" name="cash" id="cash1"><br>

      <ul><p><b>Choose your Currency:</b></p>
        <li><input type="radio" id="currency" name="currency" value="0.013">Rubles</li>
        <li><input type="radio" id="currency" name="currency" value="0.76">Canadian Dollars</li> 
        <li><input type="radio" id="currency" name="currency" value="1.28">Pounds</li>
        <li><input type="radio" id="currency" name="currency" value="1.18">Euros</li>
        <li><input type="radio" id="currency" name="currency" value="0.0094">Yen</li>
      </ul>
     <input type="submit" value="Convert it!">
     <p><a href="">Reset me</a></p>

    </fieldset>

<?php
// If fields are full
// then calculate 
// Otherwise throw an error
if(isset($_POST['name1'], $_POST['email1'], $_POST['cash1'])) {

}
else {
    if(isset($_POST['name1'])!= True) {
        echo "Please enter your name<br>";
    }
    if(isset($_POST['email1'])!= True) {
        echo "Please enter your email<br>";
    }
    if(isset($_POST['cash1'])!= True) {
        echo "Please enter cash amount<br>";
    }
}



?>
</body>
</html>