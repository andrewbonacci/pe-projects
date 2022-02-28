<!doctype html>
<html lang='en'>


	<head>
		<title>Andrew Bonacci - Web Developer</title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' description='Andrew Bonacci - Web Developer'>
		<meta property='og:image' content='images/default-meta.png'>
		<link rel='stylesheet' href='portfolio-css/style.css'>
	</head>


	<body>


		<main>


			<header>
				<div id='beam-up'>
					<div class='inner-column'>

						<?php include('portfolio-modules/site-menu.php') ?>

					</div>
				</div>
			</header>


			<section class='landing'>
				<div class='inner-column'>
					
					<?php include('portfolio-modules/landing.php') ?>

				</div>	
			</section>


			<section class='projects'>
				<div id="projects-scroll">
					<div class='inner-column'>
						<h1 class='projects-title'>Here is some of my work.</h1>
						<div class='projects-content'>

							<?php include('portfolio-modules/projects.php') ?>

						</div>
					</div>
				</div>
			</section>


			<section class='writings'>
				<div id="writings-scroll">
					<div class='inner-column'>
						<div class='writings-content'>

							<h1 class='writings-title'>I like to write about my work and my life. Check out my blogs below.</h1>
							<ul>
								<li><a href='https://andrewbonacci.substack.com/'>Substack</a></li>
								<li><a href='https://dev.to/abonacci'>Dev.to</a></li>
								<li><a href='https://community.codenewbie.org/abonacci'>Codenewbie</a></li>
							<ul>

						</div>
					</div>
				</div>
			</section>


			<section class='contact'>
				<div id="contact-scroll">
					<div class='inner-column'>
						<div class='contact-content'>

							<h1 class='contact-title'>Let's work together.</h1>
							<p>abonacci@protonmail.com</p>
							<p>267.555.5555</p>

						</div>
					</div>
				</div>
			</section>


			<footer>
				<div class='inner-column'>
					<div class='footer-content'>

						<a href="#beam-up" class='energize'>Beam Me Up!</a>

					</div>
				</div>
			</footer>


		</body>

	</main>

</html>