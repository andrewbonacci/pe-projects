<?php 

	$strings = 0;
	$wood = "Spruce"; 
	$color = "Red";
	$frets = 0;
	$hasStrings = false;
	$hasWood = false;
	$hasColor = false;
	$hasFrets = false;
	$stringsError = false;
	$woodError = false;
	$colorError = false;
	$fretsError = false;

	if ( isset($_POST["submit"]) ) {
		var_dump($_POST);
		if ( isset($_POST["strings"]) ) {
			$strings = $_POST["strings"]; // number of strings as inputed by user
		
			if ($strings == 6 || $strings == 12) {
				$hasStrings = true;
			} else {
				$stringsError = "Please specify 6 or 12 strings.";
			}
		}

		if ( isset($_POST["wood"]) ) {
			$wood = $_POST["wood"]; // wood choice inputed by user (string)
		
			if ( strlen($wood) > 0 ) {
				$hasWood = true;
			} else {
				$woodError = "Please specify wood type.";
			}
		}

		if ( isset($_POST["color"]) ) {
			$color = $_POST["color"]; // color choice inputed by user (string)
		
			if ( strlen($color) > 0 ) {
				$hasColor = true;
			} else {
				$colorError = "Please specify color.";
			}
		}

		if ( isset($_POST["frets"]) ) {
			$frets = $_POST["frets"]; // number of frets entered by user
		
			if ($frets == 20 || $frets == 24) {
				$hasFrets = true;
			} else {
				$fretsError = "Please specify 20 or 24 frets."; // must be 20 or 24
			}
		}

		// if ($hasStrings && $hasWood && $hasColor && $hasFrets) {
		// 	$guitar = [
		// 		$id => $_POST["id"],
		// 		$strings => $_POST["strings"],
		// 		$wood =>$_POST["wood"],
		// 		$color =>$_POST["color"],
		// 		$frets => $_POST["frets"],
		// 	];

		// 	}	

		// 	var_dump($guitar);		
		// } else
	} // END SUBMISSION
?>


<h1 class='custom-shop'>Guitar King's Custom Shop</h1>

<p class='description'>Know what you want in a guitar? Enter it below and we'll build it for you!</p>

<form method='POST'>
	<field>
		<label>Number of Strings:</label>
		<input type='number' name='strings' value='<?=$strings?>'>
		<?php if ($stringsError) { ?>
			<p><?=$stringsError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Wood:</label>
		<input type='text' name='wood' value='<?=$wood?>'>
		<?php if ($woodError) { ?>
			<p><?=$woodError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Color:</label>
		<input type='text' name='color' value='<?=$color?>'>
		<?php if ($colorError) { ?>
			<p><?=$colorError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Number of Frets:</label>
		<input type='number' name='frets' value='<?=$frets?>'>
		<?php if ($fretsError) { ?>
			<p><?=$fretsError?></p>
		<?php } ?>
	</field>

	<button type='submit' name='submit'>Submit Form</button>
</form>