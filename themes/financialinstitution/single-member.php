<?php get_header() ?>



<section id="home">
	<div class="container">
        <div class="page-banner__bg-image" style="background-image: url(
        <?php $pageBannerImage = get_field('page_banner_background_image');
        echo $pageBannerImage['url'];
        ?> );">
    </div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1><?php the_title(); ?></h1>
				<hr>
			</div>
		</div>
	</div>		
</section>

<section>
	<div class="details">
		<?php while(have_posts()){
			the_post();
			?>

            
            <div class="team-wrapper">
                <div class="img-responsive">
                    <?php the_post_thumbnail('memberPortrait');?>
                </div>
                    
                <div class="team-des">
					<h3><?php the_content();?></h3>
					<hr>
					<ul class="social-icon">
						<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
						<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
						<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					</ul>
				</div>
			</div>
            


            <div>
            <?php
                $relatedServices = get_field('related_services');
                if ($relatedServices){
                    echo '<h2 class="headline headline--medium">Services Provided</h2>';
                    echo '<ul style="list-style: none;">';
                
                    foreach ($relatedServices as $service){
                        ?>
                        <li><a href="<?php echo get_the_permalink($service);?>">
                                <?php echo get_the_title($service);?>
                            </a>
                        </li>
                        <?php 
                    }
                }
                echo '</ul>';
            ?>
            </div>
		<?php } ?>
    </div>
</section>

<?php get_footer() ?>