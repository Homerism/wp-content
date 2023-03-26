<?php get_header() ?>
<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 style="text-transform: uppercase;"><?php 
				if(is_category()){
					echo "CATEGORY: ";
					$title = single_cat_title('',false);
					echo strtoupper($title);
				}
				if(is_author()){
					echo "POSTS BY: "; the_author();
				}
				?></h1>
				<h3>
				<?php 
				if(is_category()){
					the_archive_description();
					}?>
					</h3>
				<hr>
				<a href="<?php echo site_url('/resources') ?>" class="smoothScroll btn btn-danger">More Resources</a>
			</div>
		</div>
	</div>		
</section>
<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold" style="text-transform: uppercase;">
						<?php 
						if(is_category()){
							echo "USEFUL RESOURESE IN THE ";
							$title = single_cat_title('',false);
							echo strtoupper($title).' CATEGORY';
						}
						if(is_author()){
							echo "USEFUL RESOURCES WRITTEN AND POSTED BY: "; the_author();
						}
					?>
					</h1>
					<h3>
					<hr>
				</div>
			</div>
            <?php while(have_posts()){ 
                the_post();
                ?>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-compass medium-icon"></i>
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<hr>
					<p><?php the_excerpt(); ?></p>
			</div>
            <?php } ?>
		</div>
	</div>
    <div class="center">
		<?php custom_paginate_links(); ?>
	</div>
</section>

<?php get_footer() ?>