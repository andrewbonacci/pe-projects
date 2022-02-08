
<style>
	ul, ol {
/*		list-style: none;
		margin: 0;
		padding: 0;*/
	}

	.monster {
		margin-top:  20px;
	}

	card {
		display: block;
		border: 1px solid gray;
		padding: 10px;
	}
</style>

<?php

$monstersData = file_get_contents('monsters.json');
$monsters = json_decode( $monstersData, true);




echo "<ul class='monster-list'>";

foreach ($monsters as $monster) {
	$name = $monster["name"]["english"];

	echo "<li class='monster'>
				<card>$name</card>
			</li>";
}

echo "</ul>";



echo "<pre>";
var_dump( $monsters );
echo "</pre>";