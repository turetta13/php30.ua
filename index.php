<?php
//function foo($a, $b)
//{
//    if ($a < $b) {
//        return 'нельзя вычесть' . "$a от $b" . 'потому что будет отрицательное число';
//    }
//
//
//    $x = $a - $b;
//    return $x;
//}
//
//echo foo(rand(1, 20), rand(1, 20));
//?>


    <hr>
    <p><b>Написать рекурсивную функцию для вычисления факториала натурального
            числа n.</b></p>
<?php
function fact($a)
{
    if ($a < 2) return 1;
    $fact = $a * fact($a - 1);
    return $fact;
}

echo fact(rand(1, 5));
?>
    <hr>
    <p><b>Написать рекурсивную функцию
            для расчета степени n вещественного числа a (n — натуральное число).</b></p>
<?php
function step($a, $n)
{
    if ($n == 1) {
        return $a;
    } else {
        return $a * step($a, $n - 1);
    }
}

echo step(5, 1);
?>

    <hr>
    <p><b>10.1a</b></p>
<?php
function form($a, $b)
{
    $x = (sqrt($a) + $a) / $b;
    return $x;
}

echo form(6, 2) + form(13, 2) + form(21, 2);
?>

    <hr>
    <p><b>10.1b</b></p>
<?php
function foo($a, $b)
{
    $x = (($a + sqrt($a)) / (sqrt($b) + $b));
    return $x;
}

echo foo(5, 7) + foo(12, 8) + foo(31, 2);
?>

    <hr>
    <p><b>10.1c</b></p>
<?php
function coo($a, $b)
{
    $x = (($a + sqrt($b)) / (sqrt($a) + $b));
    return $x;
}

echo coo(15, 8) + coo(6, 12) + coo(7, 21);
?>

    <hr>
    <p><b>10.2a</b></p>
<?php
function yoo($a, $b)
{
    $y = $a + sin($a) / $b;
    return $y;
}

echo yoo(1, 3) + yoo(5, 3) + yoo(3, 3);
?>


    <hr>
    <p><b>10.3 с использованием функции max</b></p>
<?php
echo "а= " . $a = rand(1, 5) . '<br>';
echo "b= " . $b = rand(1, 5) . '<br>';
echo $z = max($a, $b * 2) * max($a * 2 - $b, $b) . "<br>";

function maxX($x, $y)
{
    if ($x > $y) {
        return "$x больше чем $y";
    } elseif ($x == $y) {
        return "$x равен $y";
    } else {
        return "$x меньше чем $y";
    }
}

echo maxX(rand(1, 15), rand(1, 15));
?>

    <hr>
    <p><b>Определить значение z x y sign sign </b></p>
<?php
function sing ($a) {
    if ($a<0) {
        return "sing a=-1";
    }
    elseif ($a==0) {
        return "sing a=0";
    }
    else {
        return "sing a=1";
    }
}

echo sing (rand(-1,1));
?>