<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>

    <title>Document</title>
</head>
<body>


<?php
//coment with two slash
echo "Calculator";
echo "<br>";
?>

<?php
$a = 5;
$b = 6;
$c = 8;
$d = 12;
$summ = $a + $b;
$minus = $c - $d;
$devide = $d / $b;
$multiply = $b * $a;

echo $summ;
echo "<br>";
echo $minus;
echo "<br>";
echo $devide;
echo "<br>";
echo $multiply;
echo "<br>";
?>

<?php
echo round(3.6, 0);
echo "<br>";
?>

<?php
$a = 66;
$b = 5;

function percent()
{
    global $a, $b;
    echo(($a * $b) / 100), "<br>";
}

percent();

echo sqrt($a), "<br>";;


?>

<?php
$a = 9;
$b = 6;

if ($a > 9) {
    echo $a + $b;
    "<br>";//if a more then nine summ
} elseif ($a < 9) {
    echo $a - $b;
    "<br>";//if a less then nine minus
} else {
    echo $a * $b;
    "<br>";//if a =9 multyply
}

?>
<br>
<?php
$a = 15;
$b = 7;
$c = 11;

switch ($a) {
    case($a = 15):
        echo $a + $b;
        breake;
        echo "<br>";
    case($b < 15):
        echo $a - $b;
        breake;
        echo "<br>";
    case ($c = 11):
        echo $a + $b * $c / $a;
        break;
        echo "<br>";
}

?>


</body>
</html>
