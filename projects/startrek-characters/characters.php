<?php

	$picard = [
		"name" => "Jean-Luc Picard",
		"rank" => "Captain",
		"branch" => "Command",
		"onEnterprise" => true,
		"photo" => "images/picard.png"
	];

	$harry = [
		"name" => "Harry Kim",
		"rank" => "Ensign",
		"branch" => "Operations",
		"onEnterprise" => false,
		"photo" => "images/harry.png"
	];

	$worf = [
		"name" => "Worf",
		"rank" => "Lt. Commander",
		"branch" => "Security",
		"onEnterprise" => true,
		"photo" => "images/worf.png"
	];

	$crewMembers = [$picard, $harry, $worf];

	foreach ($crewMembers as $crew) {
		echo "<h1>" . $crew["name"] . "</h1>

		<picture><img src=" . $crew["photo"] . "></picture>

		<h2>Branch: " . $crew["branch"] . "</h2>

		<h2>Rank: " . $crew["rank"] . "</h2>";

		if ($crew["onEnterprise"] == true) {
				echo "<h2>Incoming Hail: Reporting from the USS Enterprise.</h2>";
		}

		else {
				echo "<h2>Incoming Hail: I have to get back to Voyager!</h2>";
		}
	}
?>