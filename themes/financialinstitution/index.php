<?php get_header() ?>
<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>ASSESTS ADVICE / INVESTMENTS TIPS / BUDGETING TIPS</h3>
				<h1>WELCOME TO OUR FINANCIAL RESOURCE</h1>
				<hr>
				<a href="#work" class="smoothScroll btn btn-danger">Financial Resources</a>
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
					<h1 class="heading bold">USEFUL FINANCIAL RESOURCES</h1>
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