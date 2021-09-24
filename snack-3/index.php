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
    /*     if (strlen($name) < 3 || !filter_var($mail, FILTER_VALIDATE_EMAIL) || !is_numeric($age)) {
        echo 'Accesso negato';
    } else {
        echo 'Accesso riuscito';
    } */
    /* 
    var_dump(is_nan($age));
    var_dump(is_numeric($age)); */

    switch ([$name, $mail, $age]) {
        case ((strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age))):
            echo "Accesso consentito: benvenuto $name";
            break;
        case (((strlen($name) || is_numeric($name)) < 3 && !filter_var($mail, FILTER_VALIDATE_EMAIL) && !is_numeric($age))):
            echo 'Accesso negato: nessun parametro inserito è valido';
            break;
        case ((strlen($name) || is_numeric($name)) < 3 && !filter_var($mail, FILTER_VALIDATE_EMAIL)):
            echo 'Accesso negato: il nome inserito è troppo corto e la mail inserita non è valida';
            break;
        case (!is_numeric($age) && !filter_var($mail, FILTER_VALIDATE_EMAIL)):
            echo 'Accesso negato: l\'età e la mail inserite non sono valide';
            break;
        case (!is_numeric($age) && strlen($name) < 3):
            echo 'Accesso negato: l\'età inserita non è valida ed il nome inserito è troppo corto';
            break;
        case ((strlen($name) || is_numeric($name)) < 3):
            echo 'Accesso negato: il nome inserito è troppo corto.';
            break;
        case (!filter_var($mail, FILTER_VALIDATE_EMAIL)):
            echo 'Accesso negato: la mail inserita non è valida.';
            break;
        case (!is_numeric($age)):
            echo 'Accesso negato: l\'età inserita non è valida.';
            break;
    };

    ?>
</body>

</html>