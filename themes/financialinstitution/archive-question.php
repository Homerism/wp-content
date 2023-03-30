<?php get_header() ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>LOANS / DESPOSITS / FINANCIAL SERVICES</h3>
				<h1>FREQUENTLY ASKED QUESTIONS</h1>
				<hr>
				<a href="<?php echo site_url('/about-us');?>" class="smoothScroll btn btn-default">About Us</a>
			</div>
		</div>
	</div>		
</section>


<?php while(have_posts()){
	the_post();
	?>
	<button class="accordion"><?php the_title(); ?></button>
	<div class="panel">
		<p><?php the_content(); ?></p>
	</div>
<?php }?>

<?php get_footer() ?>