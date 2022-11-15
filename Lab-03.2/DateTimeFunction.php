<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="DateTimeFunction.php">
        Enter first user's information: <br>
        <label for="user1-name">Name
            <input type="text" name="user1-name" id="user1-name">
        </label>
        Birthday: <input type="date" name="user1-date"><br>
        Enter second user's information: <br>
        <label for="user2-name">Name
            <input type="text" name="user2-name" id="user2-name">
        </label>
        Birthday: <input type="date" name="user2-date"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    function validate_date($date)
    {
        $date = date_parse($date);
        if ($date['error_count'] == 0 && checkdate($date['month'], $date['day'], $date['year'])) {
            return true;
        } else {
            return false;
        }
    }
    
    // function to display input in letter format (e.g. Friday, 12th of December 2020)
    function display_date($date)
    {
        $date = date_parse($date);
        $day = date('l', mktime(0, 0, 0, $date['month'], $date['day'], $date['year']));
        $day = $day . ", " . $date['day'];
        $month = date('F', mktime(0, 0, 0, $date['month'], $date['day'], $date['year']));
        $day = $day . "th of " . $month . " " . $date['year'];
        return $day;
    }

    // function to caculate the difference between two dates
    function date_difference($date1, $date2)
    {
        $date1 = date_parse($date1);
        $date2 = date_parse($date2);
        $date1 = mktime(0, 0, 0, $date1['month'], $date1['day'], $date1['year']);
        $date2 = mktime(0, 0, 0, $date2['month'], $date2['day'], $date2['year']);
        $difference = abs($date1 - $date2);
        $difference = floor($difference / (60 * 60 * 24));
        return $difference;
    }

    // function to caculate the age of a person
    function age($date)
    {
        $date = date_parse($date);
        $date = mktime(0, 0, 0, $date['month'], $date['day'], $date['year']);
        $age = abs(time() - $date);
        $age = floor($age / (60 * 60 * 24 * 365));
        return $age;
    }

    if (isset($_GET['user1-date']) && isset($_GET['user2-date']) && validate_date($_GET['user1-date']) && validate_date($_GET['user2-date'])) {
        $user1_name = $_GET['user1-name'];
        $user1_date = $_GET['user1-date'];
        $user2_name = $_GET['user2-name'];
        $user2_date = $_GET['user2-date'];
        $user1_age = age($user1_date);
        $user2_age = age($user2_date);
        $user1_date = display_date($user1_date);
        $user2_date = display_date($user2_date);
        $difference = date_difference($user1_date, $user2_date);
        print("$user1_name was born on $user1_date and is $user1_age years old. <br>");
        print("$user2_name was born on $user2_date and is $user2_age years old. <br>");
        print("The difference between their birthdays is $difference days.");
    } elseif (isset($_GET['user1-name']) || isset($_GET['user2-name'])) {
        print("Please enter both names");
    } elseif (isset($_GET['user1-date']) && isset($_GET['user2-date']) && (!validate_date($_GET['user1-date']) || !validate_date($_GET['user2-date']))) {
        print("Invalid date(s) entered.");
    }

    
    ?>
</body>