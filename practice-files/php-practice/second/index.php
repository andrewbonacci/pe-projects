<html>


	<head>
		<style>

		p {
			font-family: sans-serif;
			font-size: 20px;
		}

		</style>
	</head>


	<body>

		<?php

			$thirsty = "yes";
			$drink = "Sprite";
			$time = "2:00";
			$appointment = "dentist";
			$num = "30";
			$num2 = "80";
			$num3 = "120";

			if ($thirsty == "yes" && $drink == "Sprite") {
				echo "<p>Finally, some good soda!</p>";
			} else {
			 	echo "<p>Give me Pepsi!</p>";
			}

			if ($time == "2:00" && $appointment == "dentist") {
				echo "<p>Time to go to the dentist.</p>";
			} else {
				echo "<p>Okay, I have some more time before I have to leave.</p>";
			}

			if ($num2 + $num3 - $num == 170) {
				echo "<p>Great job!</p>";
			} else {
				echo "<p>Guess again!</p>";
			}

		?>

		










	</body>


</html>