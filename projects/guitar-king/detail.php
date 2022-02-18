<?php include('guitars_data.php'); ?>

<?php
	if ( isset($_GET["guitar"])) {
		 $this_guitar_id = $_GET["guitar"];
	}

	echo $this_guitar_id;

	foreach ($inventory as $guitar) {
		 if ( $this_guitar_id == $guitar["id"]) {
		 		$detail = $guitar;
		 } 
	}
?>

<?php if ( isset($detail) ) { ?>

	<h1><?=$detail["brand"]?></h1>

	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg" alt="$todo">
	</picture>

	<p>This is a description of a guitar.</p>

<?php } else { ?>

	<h1>No guitar found.</h1>

	<p>Check the list for more guitars <a href='?page=list'>here</a></p>

<?php } ?>