<?php
 get_header();
?>
	<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                        <?php
                        while( have_posts()){
                            the_post();
                            the_content();
                        }


                        ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
							<?php
							$sidemenuArrayOne = [
								'theme_location' => 'sidemenu'
							];
							wp_nav_menu($sidemenuArrayOne);
							?>
						<!-- 		<li>
									<a href="undersida.html">Undersida</a>
								</li>
								<li>
									<a href="undersida2.html">Undersida 2</a>
								</li>
								<li>
									<a href="undersida3.html">Undersida 3</a>
								</li>
								<li>
									<a href="undersida4.html">Undersida 4</a>
								</li> -->
							</ul>
						</aside>
					</div>
				</div>
			</section>
<?php
 get_footer();
?>