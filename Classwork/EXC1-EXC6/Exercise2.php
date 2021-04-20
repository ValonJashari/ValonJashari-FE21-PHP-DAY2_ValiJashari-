<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temp Convertation</title>
</head>
<body>
<form action="" method="post">
	<table>

		
		<tr>
			<td>
				Number 1<input type="number" name="num1">
                Number 2<input type="number" name="num2">
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="submit" name="btn" value="Diviation">
			</td>
		</tr>
		<tr>
			<td>

 <?php
          
 if(isset($_POST['btn']))
 {
    if($_POST["num1"] || $_POST["num2"])
    {
        function Diviation($num1, $num2)
        {
            $diviation = $num1 / $num2;
            return $diviation;
        }
        
        echo "The diviation of num1 and num2 is: ", Diviation(50,5);
     
    }
 }


    
?>
	</td>
		</tr>
	</table>
	</form>


</body>
</html>