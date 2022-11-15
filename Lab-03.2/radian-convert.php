<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radian-convert.php" method="post">
        <input type="number" name="input">
        <select name="type" id="type">
            <option value="degree">Degree</option>
            <option value="radian">Radian</option>
        </select>
        <input type="submit" value="Convert">
    </form>
    <?php
    function convert_to_degree($radian)
    {
        $degree = $radian * 180 / pi();
        return $degree;
    }
    function convert_to_radian($degree)
    {
        $radian = $degree * pi() / 180;
        return $radian;
    }

    if (isset($_POST['input']) && isset($_POST['type']) && $_POST['input'] != "") {
        $input = $_POST['input'];
        $type = $_POST['type'];
        print("You have entered $input $type");
        if ($type == "degree") {
            $radian = convert_to_radian($input);
            print("<br> $input degree = $radian radian");
        } else {
            $degree = convert_to_degree($input);
            print("<br> $input radian = $degree degree");
        }
        
    }
    ?>
</body>

</html>