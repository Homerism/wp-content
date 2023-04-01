<?php get_header() ?>

<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>EVENT: <?php the_title(); ?></h1>
				<hr>
				<a href="<?php echo get_post_type_archive_link('event');?>" class="smoothScroll btn btn-danger">ALL EVENTS</a>
				<a href="#events" class="smoothScroll btn btn-default">More Details</a>
			</div>
		</div>
	</div>		
</section>

<section id="events">
	<div class="events">
		<?php while(have_posts()){
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
						<p><?php the_content(); ?></p>
						<p><?php
						if(has_excerpt()) echo the_excerpt();
						?>
						</p>
					</div>
					<div style="clear:both;"></div>
				</li>
			</ul>
			<?php } ?>
        </div>
	</section>

<?php get_footer() ?>