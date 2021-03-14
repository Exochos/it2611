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
        <?php
        //$_SESSION["favcolor"] = "green";
        $_SESSION["login"] = "Blue";
        echo $_SESSION['login'];
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