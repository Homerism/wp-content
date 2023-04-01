<?php get_header() ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>SEMINARS / WORKSHOPS / MEETINGS</h3>
				<h1>WELCOME TO OUR EVENTS</h1>
				<hr>
				<a href="#events" class="smoothScroll btn btn-danger">Our Events</a>
				<a href="#gallery" class="smoothScroll btn btn-default">Photo Gallery</a>
			</div>
		</div>
	</div>		
</section>
<section id="events">
<div class="events">
		<?php 
		while(have_posts()){
			the_post();
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
	<section id="gallery">
	<div id="carousel">
	<div class="slideImg hideLeft">
		<img src="<?php echo get_theme_file_uri('images/gallery1.jpg') ?>">
	</div>
	<div class="slideImg prevLeftSecond">
		<img src="<?php echo get_theme_file_uri('images/gallery2.jpg') ?>">
	</div>
	<div class="slideImg prev">
		<img src="<?php echo get_theme_file_uri('images/gallery3.jpg') ?>">
	</div>
	<div class="slideImg selected">
		<img src="<?php echo get_theme_file_uri('images/gallery4.jpg') ?>">
	</div>
	<div class="slideImg next">
		<img src="<?php echo get_theme_file_uri('images/gallery5.jpg') ?>">
	</div>
	<div class="slideImg nextRightSecond">
		<img src="<?php echo get_theme_file_uri('images/gallery1.jpg') ?>">
	</div>
	<div class="slideImg hideRight">
		<img src="<?php echo get_theme_file_uri('images/gallery2.jpg') ?>">
	</div>
</div>
</section>

			<div class="center">
				<?php custom_paginate_links(); ?>
			</div>
        </div>
	</section>
	

<?php get_footer() ?>