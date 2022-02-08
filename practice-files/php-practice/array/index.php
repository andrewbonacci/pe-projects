<html>
	<head>
		<style>

			p {
				font-family: sans-serif;
				font-weight: bold;
				font-size: 18px;
			}

			p2 {
				font-weight: bold;
				color: blue;
				font-size: 20px;
			}

		</style>
	</head>

	<body>

		<?php

			$food = ["pizza", "Chinese", "Salad"];
			$favoriteFood = $food[1];
			$secondFav = $food[0];
			$healthyFood = $food[2];

			echo "<p>My favorite food is " . $favoriteFood . " and my second favorte food is " . $secondFav . ". " . $healthyFood . " is still healthier than both, however.</p>";



			$andrew = [

				"species" => "human",
				"interest" => "programming",
				"school" => "PE",

			];

			echo "<p2>My name is Andrew. I am a " . $andrew["species"] . ". I really like " . $andrew["interest"] . " and I currently attend " . $andrew["school"] . ".</p2>";

		?>



	</body>
</html>


































