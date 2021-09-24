<?php
$lowest = 1;
$highest = 100;
$total = 15;

function get_random_numbers($min, $max, $quantity)
{
    $numbers = [];

    while (count($numbers) < $quantity) {
        $random = rand($min, $max);
        if (!in_array($random, $numbers)) $numbers[] = $random;
    };

    return $numbers;
};


$my_numbers = get_random_numbers($lowest, $highest, $total);
