<?php
	
	$page = null;
	if ( isset($_GET['page']) ) {
		$page = $_GET['page']; // url?page=string
	} else {
		$page = "home"; // default
	}

	function getTemplate($name) {
		include($name . '.php');
	}
?>