<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title> Цикли </title>
</head >
<style >
    table , th , td {
    border : 1px solid black ;
    }
</style>
<body>
    <table>
<?php
for ( $i = 1 ; $i < 10 ; $i ++)
{
    echo "<tr>" ;
    for ( $j = 1 ; $j < 10 ; $j ++)
    {
        echo "<td>" . $i * $j . "</td>" ;
    }
    echo "</tr>" ;
}
?>
</table>
</body>
</html>