<?php include('guitars-data.php'); ?>

<h1>Guitar King's Guitars</h1>

<ul>
	<?php foreach ($inventory as $guitar) { ?>
		<?php
			 $price = "$" . number_format($guitar["price"], 2, ".", ",");
		?>

		<li class='guitar'>
			<guitar-card>
				<h2 class='brand'>Brand: <?=$guitar["brand"]?></h2>
				<h3 class='model'>Model: <?=$guitar["model"]?></h2>
				<h4 class='year'>Color: <?=$guitar["color"]?></h2>
				<h5 class='price'>Price: <?=$price?></h2>
				<a href='?page=detail&guitar=<?=$guitar["id"]?>'>Check it out!</a>
			</guitar-card>
		</li>
	<?php } ?>
</ul>