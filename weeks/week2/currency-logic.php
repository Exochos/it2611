<?php
    $ruble = 10007;
    $ruble *= 0.013;
    $rubleFriendly = number_format($ruble,2);

    $sterling = 500;
    $sterling *= 1.28;
    $sterlingFriendly = number_format($sterling,2);
    $canada = 5000;
    $canada *= .79;
    $canadaFriendly = number_format($canada,2);
    $euros = 1200;
    $euros *= 1.18;
    $eurosFriendly = number_format($euros);
    $yen = 2000;
    $yen *= 0.0094;
    $yenFriendly = number_format($yen);

?>

<!doctype html>
<html lan="en">
    <head>
        <meta charset="utf-8">
        <style>
            table {
                width:300px;
                margin: 0 auto;
                border: 2px solid red;
                border-collapse: collapse;
            }

            td {
                border: 1px solid blue;
                padding: 5px;
            }
            th {
                padding: 5px;
                background: beige;
            }
        </style>
    </head>
    <body>
        <table>
        <tr> 
            <th> Money </th>
            <th> Dollars </th>
        </tr>
        <tr>
            <td> Rubles </td>
            <td><?php echo '$'.$rubleFriendly.''; ?></td>
        </tr>
        <tr>
            <td> Sterling </td>
            <td><?php echo '$'.$sterlingFriendly.''; ?></td>
        </tr>
        <tr>
            <td> Canada </td>
            <td><?php echo '$'.$canadaFriendly.''; ?></td>
        </tr>
        <tr>
            <td> Euros </td>
            <td><td><?php echo '$'.$yenFriendly.''; ?></td></td>
        </tr>
        <tr>
            <td> Yen </td>
            <td><td><?php echo '$'.$yenFriendly.''; ?></td></td>
        </tr>
        </table>
        </body>
        </html>