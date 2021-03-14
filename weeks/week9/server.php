<?php
    //session_start();
    // mysqli_real_escape_string --- //
    // md5()  

    //session_start();
    require_once 'config.php';

    //initialize

    $firstname = '';
    $lastname = '';
    $email = '';
    $username = '';
    $errors = array();
    $succcess = 'You are not logged in!';

    // Connect to the database
    echo "got here";
    $db = mysqli_connect($DB_HOST, $DB_USER,$DB_PASSWORD,$DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
    echo $db;


    if (isset($_POST['reg_user'])) {

        // Get data //

        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        // Array_push function //
        // array_push();  //
        if (empty($firstname)) {
            array_push($errors,'Please enter your first name');
        }
        if (empty($lastname)) {
            array_push($errors,'Please enter your last name');
        }
        if (empty($email)) {
            array_push($errors,'Please enter your email');
        }
        if (empty($password_1)) {
            array_push($errors,'Password is Required');
        }
        if (empty($password_2)) {
            array_push($errors,'Password is Required');
        }
        if ($password_1 != $password_2) {
            array_push($errors, 'Passwords must be the same');
        }

        // Check to see if there is a username and email //
        $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_connect_error($db)));
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['username'] == $username) {
                array_push($errors, 'Cannot have duplicate usernames');
            }
        }
        if ($user) {
            if ($user['email'] == $email) {
                array_push($errors, 'Cannot have duplicate usernames');
            }
        } // End ifs for username and email
        // If everything is okay and there is no errors, we need to now insert the data into the database //
        if (count($errors) == 0) {
            $password = md5($password_1);
            $query = "INSERT INTO users (firstname, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";

            mysqli_query($db, $query);
        
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $succcess;
            header('Location:login.php');
        }
    } // End isset //
?>