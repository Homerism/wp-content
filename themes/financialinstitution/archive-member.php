<?php get_header() ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>HARDWORKING / DEDICATED / TRUSTWORTHY</h3>
				<h1>MEET THE NEXUS TEAM</h1>
				<hr>
				<a href="#team" class="smoothScroll btn btn-danger">Team Members</a>
			</div>
		</div>
	</div>		
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>05</strong>
					<h1 class="heading bold">TALENTED TEAM</h1>
					<hr>
				</div>
			</div>
			<?php while(have_posts()){
				the_post();
				?>
				<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
				<div class="img-responsive"><?php the_post_thumbnail('memberPortrait');?></div>
				<div class="team-des">
					<a href="<?php the_permalink(); ?>" style="color:white"><h4><?php the_title(); ?></h4></a>
					<h3><?php $memberTitle = get_field('member_title'); 
					if($memberTitle){
						echo $memberTitle;
					}else {
						echo "Nexus Employee";
						} ?>
					</h3>
					<hr>
					<ul class="social-icon">
						<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
						<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
						<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					</ul>
				</div>
			</div>
			</div>
			<?php } ?>
		</div>
		<div class="center">
				<?php custom_paginate_links(); ?>
			</div>
</section>

<?php get_footer() ?>