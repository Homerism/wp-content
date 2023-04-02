<?php get_header() ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>LOANS / DESPOSITS / FINANCIAL SERVICES</h3>
				<h1>FREQUENTLY ASKED QUESTIONS</h1>
				<hr>
				<a href="<?php echo site_url('/about-us');?>" class="smoothScroll btn btn-default">About Us</a>
				<a href="#question" class="smoothScroll btn btn-default">FAQ</a>
			</div>
		</div>
	</div>		
</section>
<div> 
    <!---Parent If statement starts-->
<ul class="side">
<li class="crumb"><a class="active" href="<?php echo site_url('/about-us'); ?>">
<i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a></li>
<li class="crumb"><a href="#details">F.A.Q</a></li>
</ul>
    <!--Parent if statment ends-->
  </div>
<section id="question">
<?php while(have_posts()){
	the_post();
	?>
	<button class="accordion"><?php the_title(); ?></button>
	<div class="panel">
		<p><?php the_content(); ?></p>
	</div>
<?php }?>
</section>

<?php get_footer() ?>