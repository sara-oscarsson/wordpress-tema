<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
    <?php
	/* Används av wordpress för att köra många olika funktioner.. */
    wp_head();
    ?>
</head>
<body>

	<div id="wrap">
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="index.html">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<?php
								/* visar ett sökfält så att an kan söka på sidan */
								get_search_form();
								?>
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<?php
					get_search_form();
					?>
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
						<?php
						$mainArray = [
							'theme_location' => 'mainmenu'
						];
						/* visar huvudmenyn */
						wp_nav_menu($mainArray);
						?>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<main>