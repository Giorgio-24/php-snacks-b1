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
    <h1>Random numbers</h1>
    <h4> <?= "Here are displayed $total numbers, included from a minimum value of $lowest to a maximum of $highest:" ?> </h4>
    <div>
        <ul>
            <?php foreach ($my_numbers as $number) { ?>
                <li><?= $number ?></li>
            <?php }; ?>
        </ul>
    </div>
</body>

</html>