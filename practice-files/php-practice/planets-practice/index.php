<?php

	$stars = ["Sun ", "Sirius ", "Procyon ", "Orion "];

	foreach ($stars as $star) {
		//  echo $star;
	}

		// echo $stars[0];


// Each planet has a name, size, type
	$earth = [
		"name" => "Earth",
		"size" => "2100",
		"type" => "rocky",
	];

	// echo $earth["size"];


	$venus = [
		"name" => "Venus",
		"size" => "3760",
		"type" => "rocky",
	];

	$planets = [$earth, $venus];

	// echo $planets[0]["type"];

	// $planetJson = include("planets.php");
	$planetsData = json_decode("planets.json", true);
	print_r($planetsData);
?>






