<?php

// function definition. ie: recipe
function exampleFunctionName() {
	echo "test";
}

exampleFunctionName(); // execute the function






function parameterExample($parameter) {
	echo $parameter;
}

parameterExample("argument");







function userGreeting($username, $greeting) {
	echo $greeting . $username;
}

userGreeting("Andrew", "Hola");
userGreeting("Andrew", "Bonjour"); // If you don't add all the parameters, it won't work!







$usernames = ["Andrew", "Derek", "Shayne"];

function userMessage($name) {
	$message = "<h2>Hello, $name!</h2>";
	return $message;
}

foreach ($usernames as $username) {
	echo userMessage($username); // this is using a loop
}

?>

















<?php

$foods = ["pizza", "coffee", "donuts"];

function favoriteFood($food) {
	$display = "<p>My favorite food is $food</p>";
	echo $display;
}

foreach ($foods as $food) {
	favoriteFood($food);
}

?>


