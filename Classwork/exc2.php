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
<!-- //Fahrenheit to Celsius ° C = 5/9 (° F - 32) = (°F - 32) / 1.8-->
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
            echo "$value1 Fahrenheit = $celsius Celsius";
        }
        else 
        {
            echo "$value1 Fahrenheit";
        }
    }
    function veryCold(){
        echo "Very Cold";
    }
    function Cold(){
        echo "Cold";
    }
    ($celsius > 0 && $celsius < 5) ? veryCold():Cold();
    function Pleasant()
    {
        echo "The Weather is PLEASANT Today";
    }
    function Warm()
    {
        echo "Temperature is between 16°C and 20°C, so The Weather is WARM today";
    }
    ($celsius > 11 && $celsius < 16) ? Pleasant():Warm();

    function Hot()
    {
        echo "The weather is HOT Today";
        echo "Temperature is higher than 21°C so The Weather is HOT today";

    }
    function SuperHot()
    {
        echo "Temperature is higher than 48°C, so The Weather is SUPER HOT today";
    }
    ($celsius > 21 && $celsius < 48) ? Hot():SuperHot();
    
    
}
                ?>
			</td>
		</tr>
	</table>
	</form>

</body>
</html>