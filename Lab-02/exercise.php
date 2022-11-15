<!-- 
    Handle the form submission and display the results.
            - Name
            - College
            - City
            - Hobby 1
            - Hobby 2 
 -->
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
    $name = $_POST['name'];
    $college = $_POST['college'];
    $city = $_POST['city'];
    $hobby1 = $_POST['hobby1'];
    $hobby2 = $_POST['hobby2'];
    $sex = $_POST['sex'];
    echo "Hello $name, you are from $college, $city.<br>";
    echo "You are " . strtolower($sex) . ".<br>";
    echo "Your hobbies are $hobby1 and $hobby2.";
?>

</body>

</html> 