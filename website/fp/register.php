<!-- header -->
<?php
// Start the session
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta char="UTF-8">
        <link href="css/styles.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <div id="wrapper">
            <h1>Login </h1>
            <form action="TODO">
                <label>First Name<input></input></label>
                <label>Last Name<input></input></label>
                <label><input></input></label>
                <label><input>Username</input></label>
                <label><input>Password</input></label>
            </form>
            <table>
                <th>
                    <td>

                    <?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

                    </td>
                    <td
                    
<?php
print_r($_SESSION);
?>
></td>

                </th>
            </table>
        </div>
    </body>
</html>
<!-- header -->