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



