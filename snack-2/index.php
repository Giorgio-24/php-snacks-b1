<?php require_once 'data.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack's - block 1</title>
</head>

<body>
    <h1>Classe 38</h1>
    <h3>Alunni</h3>
    <ul>
        <?php foreach ($class_38 as $alumn) : ?>
            <li><?= '<strong>Name: </strong> ' . $alumn['name'] . '<br/> <strong>Last name: </strong> '
                    . $alumn['last_name'] . '<br/> <strong>Grade: </strong> ' . get_grades_average($alumn) ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>