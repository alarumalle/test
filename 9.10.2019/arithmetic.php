<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid #333;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.5rem;
            text-align: center;
        }

        th {
            background: orange;
        }

    </style>
</head>
<body>

</body>
</html>

<?php

$x = 8;
$y = 2;

$sum = $x + $y;
$dif = $x - $y;
$product = $x * $y;
$quotient = $x / $y;
$residual = $x % $y;


echo '
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>Nimetus</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>x + y</td>
            <td>liitmine</td>
            <td>' . $x . ' + ' . $y . ' </td>
            <td>' . $sum . '</td>
        </tr>
        <tr>
            <td>x - y</td>
            <td>lahutamine</td>
            <td>' . $x . ' - ' . $y . ' </td>
            <td>' . $dif . '</td>
        </tr>
        <tr>
            <td>x * y</td>
            <td>korrutamine</td>
            <td>' . $x . ' - ' . $y . ' </td>
            <td>' . $product . '</td>
        </tr>
        <tr>
            <td>x / y</td>
            <td>jagamine</td>
            <td>' . $x . ' - ' . $y . ' </td>
            <td>' . $quotient . '</td>
        </tr>
        <tr>
            <td>x % y</td>
            <td>jääk</td>
            <td>' . $x . ' % ' . $y . ' </td>
            <td>' . $residual . '</td>
        </tr>
        </tbody>
    </table>
 ';