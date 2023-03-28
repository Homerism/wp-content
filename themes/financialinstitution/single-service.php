<?php get_header() ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Service: <?php the_title(); ?></h1>
				<hr>
				<a href="<?php echo get_post_type_archive_link('service');?>" class="smoothScroll btn btn-default">ALL Services</a>
			</div>
		</div>
	</div>		
</section>

<section>
	<div class="details">
		<?php while(have_posts()){
			the_post();
			?>
            <div >
				<p><?php the_content(); ?></p>
			</div>
		<?php } ?>
    </div>

    <div class="col-md-12 col-sm-12">
        <a href="#" class="smoothScroll btn btn-danger">
            Apply Now
        </a>
    </div>

    <div>
        <h4>Consult with Team Members for assistance</h4>
    <?php
          $members = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'member',
            'order' => 'ASC',
            'meta_query' =>
                    array(
                        array(
                        'key' => 'related_services',
                        'compare' => 'LIKE',
                        'value' => '"'.get_the_ID().'"'
                        )
                    )
          ));
          while($members->have_posts()){
            $members->the_post();?>

            

            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
              <div class="team-wrapper">
                <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                  <div class="img-responsive">
                    <?php the_post_thumbnail('memberPortrait');?>
                  </div>
                    
                  <div class="team-des">
					          <h4><?php the_title(); ?></h4>
				          </div>
                </a>
			        </div>
            </div>

            <?php } 
            wp_reset_postdata();
        ?>
    </div>
</section>

<?php get_footer() ?>