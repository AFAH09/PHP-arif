<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    $explode = "PHP, JAVASCRIPT, LARAVEL";
    $arrayExp =  explode(", ", $explode);
    print_r($arrayExp);
    // hasil=>  Array ( [0] => PHP [1] => JAVASCRIPT [2] => LARAVEL )
    ?>
</body>

</html>