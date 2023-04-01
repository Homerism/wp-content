<?php get_header() ?>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>FINANCIAL CONSULTING / INVESTMENT MANAGEMENT / LOANS</h3>
				<h1>NEXUS FINANCIAL INSTITUTION</h1>
				<hr>
				<a href="#work" class="smoothScroll btn btn-danger">What we do</a>
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
					<strong>01</strong>
					<h1 class="heading bold">OUR SERVICES</h1>
					<hr>
				</div>
			</div>
			<section>
		        <?php 
				$homepageService = new WP_Query(array(
					'posts_per_page' => 3,
					'post_type' => 'service'
				));
				
				
				while($homepageService->have_posts()){
					$homepageService->the_post();
			    ?>
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3> 
                    </a>
					<hr>
					<p><?php echo wp_trim_words(get_the_content(),30);?></p>
			    </div>
			    <?php } 
				wp_reset_postdata();
				?>
            </section>
		</div>
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>02</strong>
					<h1 class="heading bold">TALENTED TEAM</h1>
					<hr>
				</div>
			</div>
			<?php 
			$homepageMember = new WP_Query(array(
				'posts_per_page' => 4,
				'post_type' => 'member'
			));
			
			while($homepageMember->have_posts()){
				$homepageMember->the_post();
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
			<?php } wp_reset_postdata();?>
		</div>
	</div>
</section>

<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>03</strong>
					<h1 class="heading bold">UPCOMING EVENTS</h1>
					<hr>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="events">
<div class="events">
		<?php
		$homepageEvents = new WP_Query(array(
			'posts_per_page' => 3,
			'post_type' => 'event',
			'meta_key' => 'event_date',
			'orderby' => 'meta_value_num',
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key'=> 'event_date',
					'compare' => '>=',
					'value' => date('Ymd'),
					'type' => 'numeric'
					)
					)
				));
	
			while($homepageEvents->have_posts()){
			$homepageEvents->the_post();
			?>
		<ul>
			<li>
				<div class="time">
					<h2 style="text-transform: uppercase;"><?php
					$eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('d');
					?>
					<br>
					<span><?php
					$eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('M');
					?>
					</span>
					<br>
					<span><?php 
					$eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('Y');
					?></span>
					</h2>
				</div>
					<div class="details">
						<h3><?php the_title(); ?></h3>
						<p><?php
						if(has_excerpt()) echo the_excerpt();
						else echo wp_trim_words(get_the_content(),18);
						?>
						</p>
						<a href="<?php the_permalink(); ?>">View Details</a>
					</div>
					<div style="clear:both;"></div>
				</li>
			</ul>
			<?php }?>
        </div>
	</section>

	<!-- resources section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>04</strong>
					<h1 class="heading bold">USEFUL FINANCIAL RESOURCES</h1>
					<hr>
				</div>
			</div>
            <?php 
			
			$homepageResources = new WP_Query(array(
				'posts_per_page' => 3,
				'category_name' => 'Income'
			));
			
			while($homepageResources->have_posts()){ 
                $homepageResources->the_post();
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
	
  <!-- contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <div class="section-title">
            <h1 class="heading bold">CONTACT US</h1>
            <hr>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 contact-info">
          <h2 class="heading bold">CONTACT INFO</h2>
          <p>Contact us anytime and one of our customer service representative would get back at you as soon as possible.</p>
          <div class="col-md-6 col-sm-4">
            <h3>
              <i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL
            </h3>
            <p>nexus-institute@company.com</p>
          </div>
          <div class="col-md-6 col-sm-4">
            <h3>
              <i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES
            </h3>
            <p>010-020-0340 | 090-080-0760</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <form action="#" method="get" class="wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
            </div>
            <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
              <input type="submit" class="form-control" value="SEND MESSAGE">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> 
<?php get_footer() ?>