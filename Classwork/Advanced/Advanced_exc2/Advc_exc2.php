<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temp Convertation</title>
</head>
<body>
<?php 
    //Fahrenheit to Celsius
    function funct1($value1)
    {
        $celsius = ($value1 -32)/1.8;
        //$celsius=5/9*($given_value-32);
        return $celsius;
        echo $celsius;
    }


 //Celsius to Fahrenheit
    function funct2($value1)
    {
        $fahrenheit = ($value1 * 1.8 + 32);
        return $fahrenheit;
        echo $fahrenheit;
    }
?>
<!-- Celsius to Fahrenheit ° F = 9/5 (°C) + 32 -->
<!-- //Fahrenheit to Celsius ° C = 5/9 (°F - 32) = (°F - 32) / 1.8-->
<form action="" method="post">
	<table>

		<tr>
			<td>
				<select name="first_temp_type_name">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>					
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="value1">
			</td>
		</tr>
		<tr>
			<td>
				<select name="second_temp_type_name">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btn" value="Convert">
			</td>
		</tr>
		<tr>
			<td>


<?php
if(isset($_POST['btn']))
{
    $first_temp_type_name=$_POST['first_temp_type_name'];
    $second_temp_type_name=$_POST['second_temp_type_name'];
    $value1=$_POST['value1'];
    //Fahrenheit to Celsius
    if($first_temp_type_name=='fahrenheit')
    {
        if($second_temp_type_name=='celsius')
        {
            $celsius=funct1($value1);
            echo "Conversation from Fahrenheit(°F) to Celsius (°C)<br>";
            echo "$value1 °F = $celsius °C <br>";
        }
        else 
        {
            echo "Wrong convertation of Temperature";
        }
    }
    if($celsius < 0)
    {
        echo "<br>Temperature is under  0°C, so the Weather is freezing, PLEASE DO NOT GO OUT today";
    }

    if($celsius >= 0 && $celsius <=5)
    {
        echo "<br>Temperature is between 0°C and 5°C,, so the Weather is Very Cold today";
    }
        
    elseif($celsius >= 6 && $celsius <=10)
    {
        echo "<br>Temperature is between 6°C and 10°C,, so the Weather is Cold Today";
    }
        
    elseif($celsius >=11 && $celsius <=15)
    {
        echo "<br>Temperature is between 11°C and 15°C,, so the Weather is PLEASANT Today";
    }
       
    elseif($celsius >=16 && $celsius <=20)
    {
        echo "<br>Temperature is between 16°C and 20°C, so The Weather is WARM today";
    }
        
    elseif($celsius >=21 && $celsius <55)
    {
        echo "<br>Temperature is  between 21°C and 54°C, so The Weather is HOT today";
    }
    elseif ($celsius >=55) {
        echo "<br>Temperature is: $celsius °C, so the Weather will cook you, PLEASE DO NOT GO OUT today";
    }
        
            
}

                ?>
			</td>
		</tr>
	</table>
	</form>

</body>
</html>