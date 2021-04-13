<?php
/* hämtar header.php */
 get_header();
?>
	<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                            <?php
							/* loopar igenom en lista med posts */
                            while( have_posts()){
								/* tar fram en post och tar samtidigt bort den ur listan */
                                the_post();
								/* visar innehållet i posten */
                                the_content();
                            }
                            ?>
							</div>
						</div>
					</div>
				</div>
			</section>
<?php
/* hämtar footer.php */
 get_footer();
?>
