<?php get_header() ?>
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>HARDWORKING / DEDICATED / TRUSTWORTHY</h3>
				<h1 style="text-transform: uppercase;">TEAM MEMBER: <?php the_title(); ?></h1>
				<hr>
                <a href="<?php echo site_url('/members')?>" class="smoothScroll btn btn-danger">Meet The Team</a>
				<a href="#team" class="smoothScroll btn btn-default">Member Details</a>
			</div>
		</div>
	</div>		
</section>
<section id="team">
	<div class="container">
		<div class="row">
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
            <div style="text-align:left;">
            <div class="section-title">
                <h1 class="heading bold" style="text-transform: uppercase;">ABOUT <?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
		</div>
        </div>
</div>
<section id="work">
	<div class="container">
    <div class="section-title">
    <h1 class="heading bold" style="text-transform: uppercase;">SERVICES <?php the_title(); ?> PROVIDES</h1>
</div>
		<div class="row">
		<div class="col-md-12 col-sm-12">
        <section>
            <?php
                $relatedServices = get_field('related_services');
                if ($relatedServices){
                    foreach ($relatedServices as $service){
                        ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                            <a href="<?php echo get_the_permalink($service);?>">
                            <h3><?php echo get_the_title($service);?></h3> 
                            </a>
                            <hr>
                            <p><?php $mypost = get_post($service->ID); 
							echo wp_trim_words(apply_filters('related_services',$mypost->post_content),30); ?>
						</p>
                        </div>
                    <?php }} ?>
            </section>
            </div>
            </div>
</section>
</section>
<?php get_footer() ?>