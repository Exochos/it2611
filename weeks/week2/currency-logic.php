<?php
    $ruble = 10007;
    $ruble *= 0.013;
    $sterling = 500;
    $canada = 5000;
    $euros = 1200;
    $yen = 2000;

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
            <td><?php echo $ruble;     ?></td>
        </tr>
        <tr>
            <td> Sterling </td>
            <td></td>
        </tr>
        <tr>
            <td> Canada </td>
            <td></td>
        </tr>
        </table>
        </body>
        </html>