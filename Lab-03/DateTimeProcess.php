<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Validation</title>
</head>

<body>

    Enter your name and select date and time for the appointment
    <form action="" method="get">
        <label for="name">
            Your name: <input type="text" name="name" id="name">
        </label>
        <br>

        Date
        <select name="month" id="month">
            <option value="">--Tháng--</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                print("<option value=" . $i . ">" . $i . "</option>");
            }
            ?>
        </select>
        <select name="day" id="day">
            <option value="">--Ngày--</option>
            <?php

            for ($i = 1; $i <= 31; $i++) {
                print("<option value=" . $i . ">" . $i . "</option>");
            }

            ?>
        </select>
        <select name="year" id="year">
            <option value="">--Năm--</option>
            <?php
            for ($i = 1890; $i <= 2022; $i++) {
                print("<option value=" . $i . ">" . $i . "</option>");
            }
            ?>

        </select>
        <br>
        Time
        <select name="hour" id="hour">
            <option value="">00</option>

            <?php

            for ($i = 0; $i <= 23; $i++) {
                print("<option value=" . $i . ">" . $i . "</option>");
            }
            ?>

        </select>
        <select name="minute" id="minute">
            <option value="">00</option>
            <?php

            for ($i = 0; $i <= 59; $i++) {
                print("<option value=" . $i . ">" . $i . "</option>");
            }

            ?>
        </select>
        <select name="second" id="second">
            <option value="">00</option>
            <?php

            for ($i = 0; $i <= 59; $i++) {
                print("<option value=" . $i . ">" . $i . "</option>");
            }

            ?>
        </select>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <?php
        $name = $_GET['name'];
        $month = $_GET['month'];
        $day = $_GET['day'];
        $year = $_GET['year'];
        $second = $_GET['second'];
        $minute = $_GET['minute'];
        $hour = $_GET['hour'];
        
        print("hello ". $name."!<br>");
        print("You have choose to have an appointment on ". $hour.":".$minute.":".$second. ", ".$day."/".$month."/".$year);
    ?>
</body>

</html>