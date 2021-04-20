<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_DAY02</title>
</head>
<body>
    <?php
        $date = date("f");

            //"l" will return the full name of the day of the week
        if ($date == "Friday")
            echo "It's Friday, weekend is around the corner... :-)";
            else
            echo "Don't watch the clock; do what it does, keep on going!" ;
    ?>
</body>
</html>