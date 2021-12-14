<html>
	<head>
		<style>

			.one {
				color: red;
				font-family: sans-serif;
				font-size: 20px;
			}

			.two {
				color: blue;
				font-family: sans-serif;
				font-size: 20px;
			}

		</style>
	</head>

	<body>

		<?php
			$nounOne = "suit";
			$properNounOne = "Iron Man";
			$properNounTwo = "Ivan Vanko";
			$nounTwo = "whips";
			$nounThree = "fight";
			$adjective = "powerful";


			echo " <p> That night, " . $properNounOne  . " got into his " . $nounOne . " to go against " . $properNounTwo . ". " . $properNounTwo . " used his " . $adjective . " plasma " . $nounTwo . " on " . $properNounOne . ". The " . $nounThree . " lasted only 15 minutes.</p>"; 

		?>

		<p class="one">That night, <?php echo $properNounOne?> got into his <?php echo $nounOne?> to go against <?php echo $properNounTwo?>. <?php echo $properNounTwo?> used his <?php echo $adjective?> plasma <?php echo $nounTwo?> on <?php echo $properNounOne?>. The <?php echo $nounThree?> lasted only 15 minutes.</p>

		<p class="two">That night, <?=$properNounOne?> got into his <?=$nounOne?> to go against <?=$properNounTwo?>. <?=$properNounTwo?> used his <?=$adjective?> plasma <?=$nounTwo?> on <?=$properNounOne?>. The <?=$nounThree?> lasted only 15 minutes.</p>

	</body>
</html>