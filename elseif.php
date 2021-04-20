<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta  charset="UTF-8">
       <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <title>PHP Conditional statements</title>
    </head>
   <body >
       <?php
       $today = date("N");

        //"N" returns day of the week as numbers mon=1, sun=7
       if  ($today == 1)
           echo "It's Monday, let's get the week started.";
       elseif ($today == 2)
           echo  "It's Tuesday, a perfect day to learn conditional statements";
       else
            echo "Don't watch the clock; do what it does, keep on going!";
       ?>
   </body>
</html>