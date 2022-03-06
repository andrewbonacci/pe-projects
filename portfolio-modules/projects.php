<?php include ('projects-data.php') ?>

<?php foreach ($projectsData as $project) { ?>
	
	<div class='projects-background'>	
		<h1 class='projects-title'><?= $project["title"] ?></h1>
		<picture>
			<img src="<?= $project["img"] ?>">
		</picture>
		<p class='description'><?= $project["description"] ?></p>
		<a href="<?= $project["link"] ?>" class='links' target='_blank'>See It Here</a>
	</div>

<?php } ?>

