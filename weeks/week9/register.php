<!-- header -->
<?php
//
// Start the session //
session_start(); // Grab Session variables.
ob_start(); // Prevents header errors.
define('DEBUG', 'TRUE'); // we want to see errors.
//require_once '../../../dbconfig.php'; // Nothing to see here



include('server.php');
// include('header.php');




// Lets declare some variables //
$firstname = "";
$lastname = "";


?>





<!doctype html>
<html lang="en">
    <head>
        <meta char="UTF-8">
        <link href="css/styles.css" type="text/css" rel="stylesheet">

    <style>
        .wrapper {
            height: 100%;
            width: 100%;
            margin: 0 auto;
        }
        form {

            width: 600px;
            margin: 0 auto;
            align-self: center;
            background: lightblue;

        }
        ul li  {
            margin: 4px;
            list-style-type: none;
            font-size: 1.2em;
        }
        input {
            font-size: 1.2em;
        }
        .button {
            margin-top: 10px;
            background: green;
            color: white;
            font-size: 1.6em;
        }
        .error {
            font: red;
            border: 1px solid red;
        }
    </style>
    </head>
<!-- End of Header -->


<!-- Begin Body -->
    <body>

        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Form -->
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])    ;?>" method="post">
            <fieldset>
                <h1>Register Today</h1>
                <ul>

                    <li><label>First Name</label></li>
                    <li><input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])) echo htmlspecialchars($_POST['firstname']);?>"></input></li>

                    <li><label>Last Name</label></li>
                    <li><input type="text" name="lastname" value="<?php if(isset($_POST['lastname'])) echo htmlspecialchars($_POST['lastname']);?>"></input></li>

                    <li><label>Email</label></li>
                    <li><input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"></input></li>

                    <li><label>Username</label></li>
                    <li><input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']);?>"></input></li>

                    <li><label>Password</label></li>
                    <li><input type="password" name="password_1" value="<?php if(isset($_POST['password_1'])); ?>"></input></li>

                    <li><label>Confirm Password</label></li>
                    <li><input type="password" name="password_2" value="<?php if(isset($_POST['password_2'])); ?>"></input></li>

    <?php  // php  ?>
                    <!--  Register -->
                    <li><button type="submit" class="button" name="reg_user">Register</button></li>
                    <!--  Submit -->
                    <li><button type="button" onclick="window.location.href='<?php  echo htmlspecialchars($_SERVER['PHP_SELF']);?>'"  class="button" style="background:red;">Reset</button></li>

                    <?php include('includes/errors.php'); ?>
                </ul>

                <p>
                    <a href="login.php">Already a Member? Click here!</a>
                </p>
                <?php
                    print_r($errors); ?>
            </form>
            </fieldset>





        </div>
        <!-- End Wrapper -->
    </body>
</html>
<!-- header -->