<!DOCTYPE html>
<!-- saved from url=(0136)https://blackboard.algonquincollege.com/bbcswebdav/pid-972136-dt-content-rid-2034679_1/courses/15F_CST8238_350/TemperatureConverter.html -->

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title>Assignment3-Task1</title>

		<script type="text/javascript">
			/*
			 Create a function that converts the inputted temperture from
			 Celsius to Fahrenheit and Fahrenheit to Celsius: convertTemperature.
			 The function should first display a prompt asking the user to select the temperature unit
			 to convert to Celsius/Farenheit.
			 Then the function should display another prompt asking the user to input the temperature to be converted to
			 Celsius/Farenheit.

			 The value entered should be validated to ensure it is a number.
			 Then, the appropriate formula should be applied to the value to convert the
			 temperature to the selected temperature unit.
			 Finally, an alert should be displayed indicating the
			 temperature that they entered, and the converted temperature.
			 The function should be called when the appropriate button below is pressed.
			 */
			function convert() {
				var final;
				var unit = prompt("Please enter a temprature unit (1: to convert into celcius 2: convert into fahrenheit )");
				
				if (unit != 1 && unit != 2) {
					alert("invalid menu option");
				}
				switch(unit) {
				case "1":
					var cel = prompt("please enter the temperature value to be converted to  fahrenheit");
					if (isNaN(cel)) {
						alert("input must be number");
					} else {
						final = (cel * 1.8) + 32;
						alert(cel + "˚C converted to fahrenheit is " + final + "˚F");
					}

					break;
				case "2":
					var far = prompt ("please enter the temperature value to be converted to celcius");
					
					if (isNaN(far)) {
						alert("input must be number");
					} else {
						final=(5.0/9.0)*(far-32);
						alert(far + "˚F converted to  celcius is " + final + "˚C");
					}
					break;
				}
			}
		</script>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	


	<div id ="body">
	
		<h3>Assignment3-Task1 - Introduction to JavaScript</h3>
		<table>
			<tbody>
				<tr>
					<th>Temperature conversion </th>
				</tr>
				<tr>
					<td>
					<input type="button" name="btnConvert" id="btnConvert" value="Convert!" onclick="convert()">
					</td>
				</tr>
			</tbody>
		</table>

	</div>
	
</html>