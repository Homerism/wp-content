<?php get_header(); ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>All Services</h1>
				<hr>
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
					<strong>Services Provided</strong>
					<hr>
				</div>
			</div>
			
			<section>
		        <?php while(have_posts()){
			    the_post();
			    ?>

                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3> 
                    </a>
					<hr>
					<p><?php the_excerpt(); ?></p>
			    </div>

			    <?php } ?>
            </section>
		</div>
	</div>
</section>

<?php get_footer(); ?>