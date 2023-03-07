<?php 

declare(strict_types=1);

function sum(int $x, int $y) {
    return $x + $y;
}

$sum = sum(2.3,3);

echo $sum."<br/>";

var_dump($sum);

?>