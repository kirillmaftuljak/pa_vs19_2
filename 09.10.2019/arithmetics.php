<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name>
    <style>
        table th, td {
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
        tr:nth-child(even) {
            background: #f4f4f4;
        }
    </style>
</head>
<body>

</body>
</html>

<?php
/* file name: arithmetics.php; ... */
// define variables
$x = 8;
$y = 2;
// additional varibales
$sum = $x + $y;
$diff = $x - $y;
$product = $x * $y;
$divide = $x / $y;
$resiudal = $x % $y;
// output table
echo '
    <table>
        <thead>
            <tr>
                <th>Operator</th>
                <th>Nimetus</th>
                <th>Naide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
            <!-- liitmine -->
            <tr>
                <td>x + y</td>
                <td>Liitmine</td>
                <td>'.$x.' - '.$y.'</td>
                <td>'.$sum.'</td>
            </tr>
            <!-- lahutamine -->
            <tr>
                <td>x - y</td>
                <td>Liitmine</td>
                <td>'.$x.' - '.$y.'</td>
                <td>'.$diff.'</td>
            </tr>
            <!-- korrutamine -->
            <tr>
                <td>x * y</td>
                <td>Liitmine</td>
                <td>'.$x.' * '.$y.'</td>
                <td>'.$product.'</td>
            </tr>
            <!-- jagamine -->
            <tr>
                <td>x / y</td>
                <td>Liitmine</td>
                <td>'.$x.' / '.$y.'</td>
                <td>'.$divide.'</td>
            </tr>
            <!-- liitmine -->
            <tr>
                <td>x % y</td>
                <td>Jaak</td>
                <td>'.$x.' % '.$y.'</td>
                <td>'.$resiudal.'</td>
            </tr>
        </tbody>
    <table>
';
