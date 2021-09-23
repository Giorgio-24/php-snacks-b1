<?php
$class_38 = [
    ['name' => 'Giova', 'last_name' => 'Bacci', 'grades' => [8, 9, 8, 7, 9]],
    ['name' => 'Albe', 'last_name' => 'Menti', 'grades' => [7, 10, 8, 7, 9]],
    ['name' => 'Ele', 'last_name' => 'Lori', 'grades' => [8, 9, 10, 8, 9]],
    ['name' => 'Cri', 'last_name' => 'Cardo', 'grades' => [7, 9, 8, 6, 9]],
    ['name' => 'Lore', 'last_name' => 'Attone', 'grades' => [6, 9, 7, 7, 9]],
    ['name' => 'Simo', 'last_name' => 'Bacci', 'grades' => [10, 9, 8, 7, 9]],
    ['name' => 'Pippo', 'last_name' => 'Piazza', 'grades' => [10, 9, 8, 7, 9]],
    ['name' => 'Urucio', 'last_name' => 'Borti', 'grades' => [8, 7, 8, 7, 9]],
    ['name' => 'Ale', 'last_name' => 'Magno', 'grades' => [8, 9, 8, 7, 6]],
    ['name' => 'Giulio', 'last_name' => 'Pizza', 'grades' => [10, 9, 8, 7, 9]],
    ['name' => 'Eolo', 'last_name' => 'Cardo', 'grades' => [8, 10, 8, 7, 9]],
];

function get_grades_average($alumn_grades)
{
    $average = 0;
    foreach ($alumn_grades as $grade) {
        $average += $grade;
    }
    return $average / count($alumn_grades);
};
