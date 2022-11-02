<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($a < $b) {
        print("<p> a < b </p>");
    } else {
        print("<p> a > b </p>");
    }
    ?>
</body>

</html>