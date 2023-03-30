<?php get_header() ?>
<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1><?php the_title(); ?></h1>
                <h3><?php echo strip_tags( get_the_category_list(__( '/ ', 'gridster' ))); ?></h3>
				<hr>
				<a href="<?php echo site_url('/resources') ?>" class="smoothScroll btn btn-danger">Resources</a>
			</div>
		</div>
	</div>		
</section>

<div class="split left">
<!----the contnet--->
<h3><?php the_title(); ?></h3>
    <p><?php the_content()?></p>
    <div class="post-meta">
    <span class="post-autor">
            <a href=""><i class="fa fa-user-circle" aria-hidden="true"></i><?php the_author_posts_link(); ?></a>
            </span>
        <span class="post-date">
            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('F j, Y'); ?></a>
            </span>
        <span class="post-category">
            <a href=""><i class="fa fa-folder" aria-hidden="true"></i><?php echo get_the_category_list(', ') ?></a>
        </span>
    </div><!-- /.post-meta -->
    <section>
<?php
// Check if comments are open or if there are comments already.
if ( comments_open() || get_comments_number() ) {
  // Load the comments template.
  comments_template();
}
?>
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