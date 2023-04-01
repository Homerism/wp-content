<?php get_header() ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>LOANS / FINANCES / SIMPLE INTEREST</h3>
				<h1>CALCULATE YOUR FINANCES TODAY</h1>
				<hr>
				<a href="#option" class="smoothScroll btn btn-danger">Choose An Option</a>
			</div>
		</div>
	</div>		
</section>
<section id="option">
<?php while(have_posts()){
	the_post();
	?>
	<a href='<?php the_permalink(); ?>'><button class="button"><span><?php the_title(); ?></span></button></a>
	<?php } ?>
</section>
<?php get_footer() ?>