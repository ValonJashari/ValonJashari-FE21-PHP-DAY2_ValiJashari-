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
				Name<input type="text" name="name">
                Surname<input type="text" name="surname">
			</td>
		</tr>
		
		<tr>
			<td>
				<input type="submit" name="btn" value="Salute">
			</td>
		</tr>
		<tr>
			<td>


<?php
if(isset($_POST['btn']))
{
    // $fullName_type_name=$_POST['fullName_type_name'];
    // $fullName1_type_name=$_POST['fullName1_type_name'];
    // $value1=$_POST['value1'];
    //Fahrenheit to Celsius
    if($_POST["name"] || $_POST["surname"])
    {
       // $fullName=funct1($name, $surname);
         echo "<br>Welcome"." " .$_POST["name"] ." " .$_POST["surname"]."<br>";
       
    }
    
}
                ?>
			</td>
		</tr>
	</table>
	</form>

</body>
</html>