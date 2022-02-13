<html>
	<head>
		<style>

			.one {
				color: red;
				font-family: sans-serif;
				font-size: 22px;
			}

			.two {
				color: green;
				font-family: sans-serif;
				font-size: 22px;
			}

		</style>
	</head>

	<body>

		<?php
			$nounOne = "Enterprise";
			$properNounOne = "Captain Picard";
			$properNounTwo = "Shinzon";
			$nounTwo = "ship";
			$nounThree = "battle";
			$adjective = "powerful";


			echo " <p> In the nebula, " . $properNounOne  . " used the " . $nounOne . " to go fight " . $properNounTwo . ". " . $properNounTwo . " used his " . $adjective . " Scimitar " . $nounTwo . " against the " . $nounOne . ". The " . $nounThree . " lasted 30 minutes.</p>"; 

		?>

		<p class="one"> In the nebula, <?php echo $properNounOne?> used the <?php echo $nounOne?> to fight <?php echo $properNounTwo?>. <?php echo $properNounTwo?> used his <?php echo $adjective?> Scimitar <?php echo $nounTwo?> against the <?php echo $nounOne?>. The <?php echo $nounThree?> lasted 30 minutes.</p>

		<p class="two">In the nebula, <?=$properNounOne?> used the <?=$nounOne?> to fight <?=$properNounTwo?>. <?=$properNounTwo?> used his <?=$adjective?> Scimitar <?=$nounTwo?> against the <?=$nounOne?>. The <?=$nounThree?> lasted 30 minutes.</p>

	</body>
</html>