<?php get_header() ?>
<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 style="text-transform: uppercase;"><?php the_title(); ?></h1>
        <h3><?php echo strip_tags( get_the_category_list(__( '/ ', 'gridster' ))); ?></h3>
				<hr>
				<a href="<?php echo site_url('/calculation') ?>" class="smoothScroll btn btn-danger">All Calculators</a>
        <a href="#calculate" class="smoothScroll btn btn-default">  Calculate  </a>
			</div>
		</div>
	</div>		
</section>
<section id="calculate">
<div class="split left">
<!----the contnet--->
<h3 style="text-transform: uppercase;"><?php the_title(); ?></h3>
    <p><?php the_content()?></p>
</section>
</div><!-- /.post-content -->
<div class="split right">
<div class="widget widget-recent-posts">
<h4 class="widget-title">Recent posts</h4>
<ul class="list-unstyled">
        <?php $posts = get_posts();?>
        <?php foreach( $posts as $post ) {
            echo '<li><a href="'.get_permalink($post->ID).'">' . $post->post_title . '</a></li>'; } ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    </ul>
</div><!-- /Recent-posts -->
<div class="widget widget-categories">
<h4 class="widget-title">All Categories</h4>
<ul class="list-unstyled">
        <?php $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
            ) );
            ?>
            <?php foreach( $categories as $category ) {
                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name .'<span></span></a></li>';
                } ?>
    </ul>  
</div><!-- /All-categories -->
</div>
<?php get_footer() ?>