<?php
$lowest = 1;
$highest = 100;
$total = 15;
function get_random_numbers($min, $max, $quantity)
{
    $numbers = [];
    for ($i = 0; $i < $quantity; $i++) {
        $random = rand($min, $max);
        if (!in_array($random, $numbers)) {
            array_push($numbers, $random);
        } else {
            $i--;
        };
    };
    return $numbers;
};

$my_numbers = get_random_numbers($lowest, $highest, $total);
