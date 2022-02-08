<html>


	<head>
		<style>

		p {
			font-family: sans-serif;
			font-size: 25px;
		}

		</style>
	</head>


	<body>

		<?php

			$person = "derek";
			$school = "perpetual education";
			$time = "12:00";
			$food = "ready";
			$num = "20";
			$num2 = "40";
			$num3 = "50";

			if ($person == "derek" && $school == "perpetual education") {
				echo "<p>Time to learn DFTW!</p>";
			} else {
			 	echo	"<p>Off to a bootcamp I go :(</p>";
			}

			if ($time == "12:00" && $food == "ready") {
				echo "<p>Who wants to eat?!</p>";
			} else {
				echo "<p>WHEN can we eat?!?</p>";
			}

			if ($num2 + $num3 - $num == 50) {
				echo "<p>Great job!</p>";
			} else {
				echo "<p>Guess again!</p>";
			}

		?>

		










	</body>


</html>