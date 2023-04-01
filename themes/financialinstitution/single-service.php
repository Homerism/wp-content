<?php get_header() ?>
<section id="home">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
  <h1 style="text-transform: uppercase;">SERVICE: <?php the_title(); ?></h1>
  <hr>
  <a href="<?php echo site_url('/services')?>" class="smoothScroll btn btn-default">All Services</a>
</div>
</div>
</div>		
</section>
<section id="team">
  <div class="col-md-12 col-sm-12">
    <div class="section-title">
      <h1 class="heading bold" style="text-transform: uppercase;">More About our <?php the_title(); ?> Service</h1>
      <hr>
    </div>
  </div>
</section>
<div class="services">
  <!----the contnet--->
          <p><?php the_content()?></p>
</div><!-- /.post-content -->
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
    if($members){
      ?>
      <!-- team section -->
      <section id="team">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="section-title">
                <h1 class="heading bold">For Further Information Please Consult One of Our Member</h1>
                <hr>
              </div>
            </div>
    <?php while($members->have_posts()){
      $members->the_post();?>

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

    <?php }}
      wp_reset_postdata();
  ?>
</div>
</section>
<?php get_footer() ?>