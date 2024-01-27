<?php

// string to number - int()
// $num = "33";
// $toInt = (int)$num;
// echo $toInt;


// intval(), floatval(), strval() - don't change variables, but use them in the needed way 
// $num = "5.6";
// echo 7/intval($num) . "\n";
// echo $num; 


// function division(float $x, float $y) {
//     if($y > 0) {
//         return $x/$y . "\n";
//     }
//     else {
//         return "You cannot divide with 0." . "\n";
//     }
// }
// echo division(8.7, 0);
// echo division(8.7, 4);


// function add(int $x, int $y): int
// {
//     return $x + $y;
// }

// echo add(10, 20);


// function add($x, $y): int | float
// {
//     return ($x * $y)  . "\n";
// }
// echo add(10, 20); // 200 (int) 
// echo add(1.5, 2.5); // 3.75 (float)


// demotehtävä

// function plussaa($luku_1, $luku_2) {
//     $tulos = $luku_1 + $luku_2; 
//     return $tulos . "\n";
// }
// echo plussaa(3.5, 4.8);
// echo plussaa("3.5", "4.8");

function addIntLuku($luku_1, $luku_2) {
    $tulos = (int)$luku_1 + (int)$luku_2; 
    return $tulos . "\n";
}
echo addIntLuku(3, 4);
echo addIntLuku(3.5, 4.8);

function addIntTulos($luku_1, $luku_2) {
    $tulos = $luku_1 + $luku_2; 
    return (int)$tulos . "\n";
}
echo addIntTulos(3, 4);
echo addIntTulos(3.5, 4.8);

?>

