<?php
 get_header();
?>
	<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                            <?php
                            while( have_posts()){
                                the_post();
                                the_content();
                            }
                            ?>
								<!-- <img src="img/city.jpg" />
								<div class="text">
									
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</section>
<?php
 get_footer();
?>
