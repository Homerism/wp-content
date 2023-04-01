<?php get_header(); ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>LOANS / MORTGAGES / WEALTH MANAGEMENT</h3>
				<h1>SERVICES WE PROVIDE</h1>
				<hr>
				<a href="#contact" class="smoothScroll btn btn-default">Talk to us</a>
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
					<strong>04</strong>
					<h1 class="heading bold">OUR SERVICES</h1>
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
					<p><?php echo wp_trim_words(get_the_content(),30);?></p>
			    </div>
			    <?php } ?>
            </section>
		</div>
		<div class="center">
				<?php custom_paginate_links(); ?>
			</div>
	</div>
	<section class="testimonials">
	<h1 class="heading bold">TESTIMONIALS</h1>
	<hr>
  <div>
    <ul id="testimonials-ul">
	<?php
	$testimony = new WP_Query(array(
		'posts_per_page' => -1,
		'post_type' => 'testimonial'
	));
	
	if($testimony){
	while($testimony->have_posts()){
		$testimony->the_post();
		?>
      <li>
        <p><?php the_content(); ?></p>
        <small>- <?php the_title(); ?></small>
      </li>
      <?php }} ?>
    </ul>
  </div>
  <div class="testimonials-control">
    <i class="fa fa-angle-left fa-2x" id="testimonials-l"></i>
    <i class="fa fa-angle-right fa-2x" id="testimonials-r"></i>
  </div>
</section>
</section>
<?php get_footer(); ?>