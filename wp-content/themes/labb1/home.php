<?php
/* läser in header.php */
get_header();
?>
		<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
                            <?php
							/* loopar igenom alla posts */
                            while( have_posts()){
								/* tar fram en post och tar bort den ur listan med posts */
                                the_post();
                            ?>
							<article>
								<img src="<?php  the_post_thumbnail_url(); ?>" alt="">
								<h2>
								<?php 
								/* Hämtar titeln i inlägget */
								the_title(); 
								?> 
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <!-- <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a> -->
										<?php 
										the_category();
										?>
									</li>
								</ul>
								<p> <?php the_excerpt();  ?></p>
                            <?php
							/* visar innehållet i posten som loopen är på */
                            /* the_content(); */
							
							
                            ?>
							</article>
                            <?php
                            }
                            ?>
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<?php
										$sidorArray = [
											'theme_location' => 'bloggsidesidor'
										];
										/* visar sido-menyn */
										wp_nav_menu($sidorArray);
										?>
									</li>
									<li>
										<h2>Arkiv</h2>
										<?php
										$arkivArray = [
											'theme_location' => 'bloggsidearkiv'
										];
										/* visar arkiv-menyn */
										wp_nav_menu($arkivArray);
										?>
										<!-- <ul>
											<li>
												<a href="arkiv.html">oktober 2016</a>
											</li>
										</ul> -->
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<?php
										$categoryArray = [
											'theme_location' => 'bloggsidekategorier'
										];
										/* visar kategori-menyn */
										wp_nav_menu($categoryArray);
										?>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
            <?php
			/* läser in footer.php */
            get_footer();
            ?>