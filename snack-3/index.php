<?php include_once 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Bonus</title>
</head>

<body>
    <?php
    if (strlen($name) < 3 || !filter_var($mail, FILTER_VALIDATE_EMAIL) || is_nan($age)) {
        echo 'Accesso negato';
    } else {
        echo 'Accesso riuscito';
    } ?>
</body>

</html>