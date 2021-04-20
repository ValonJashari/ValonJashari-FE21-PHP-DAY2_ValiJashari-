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
$today = date("D");
       switch ($today) {
           case "Mon":
                echo "Today is Monday";
               break;
           case "Tue":
                echo "Today is Tuesday";
               break;
           case "Wed":
                echo "Today is Wednesday";
               break;
           case "Thu":
                echo "Today is Thursday";
               break;
           case "Fri":
                echo "Today is Friday";
               break;
           case "Sat":
                echo "Today is Saturday";
               break;
           case "Sun":
                echo "Today is Sunday";
               break;
           default:
               echo  "If you seeing this message, something went wrong :)";
       }
       ?>

       <?php
       echo "<br>";
       $session = "John";
       $user = ($session == "John")? $session ." The name" : "not logged in";
       echo $user.'<br>';

       function  confirm(){
        echo "affirmative";
        }
        function  deny(){
            echo "negative";
        }
        //is 10 bigger than 5?
      echo "The function confirm() is: " ; ( 10  > 5) ? confirm() : deny();
       ?>
</body>
</html>