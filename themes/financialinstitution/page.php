<?php get_header() ?> <?php global $child_pages; ?>
<!---Banner here-------->
<section id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h1> <?php the_title(); ?> </h1>
        <hr>
        <p>This subtitle has to be replaced soon, peter piper picked a pepper</p>
      </div>
    </div>
  </div>
</section>
<!---Banner ENDS Here--->
<!-- About section ----->
<section id="about">
  <!-------BreadCrumb Backward Navigation START (still have to edit)-------->
  
  <div class="container container--narrow page-section"> <?php
$theParent = wp_get_post_parent_ID(get_the_ID());
if($theParent){ ?>
    <!---Parent If statement starts-->
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
        <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">
          <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?> </a>
        <span class="metabox__main"> <?php echo the_title(); ?> </span>
      </p>
    </div> <?php } ?>
    <!--Parent if statment ends-->
  </div>

  <!-------BreadCrumb Backward Navigation END-------->
  <!-------BreadCrumb Side Bar Navigation START------>
  <?php
  
if($theParent==0){ ?>
  <!--Query for child pages Start--> <?php
if($theParent){ 
	$findChildrenOf = $theParent;
}
else{ 
	$findChildrenOf = get_the_ID();
 }
 $child_pages = get_children(array(
	'post_parent' => $findChildrenOf,
    'post_type'   => 'page',
    'orderby'     => 'menu_order',
));
}
?>
  <!--Query for child pages END-->
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <img src="<?php echo get_theme_file_uri('/images/about-img.jpg') ?>" class="img-responsive" alt="about img">
      </div>
      <div class="col-md-6 col-sm-12">
        <!-- Nav tabs --> <?php 
		if($theParent==0){ 
			?> <ul class="nav nav-tabs" role="tablist">
          <li class="active">
            <a href="#about-us" aria-controls="design" role="tab" data-toggle="tab"> <?php echo get_the_title($theParent); ?> </a>
          </li> <?php } else{ ?> <ul class="nav nav-tabs" role="tablist">
            <li class="active">
              <a href="#about-us" aria-controls="design" role="tab" data-toggle="tab"> <?php the_title(); ?> </a>
            </li> <?php } ?>
			<?php if ($child_pages) {
			foreach ($child_pages as $child) {
				setup_postdata($child); ?> <li>
              <a href="<?php echo get_the_permalink($child->ID); ?>"> <?php echo get_the_title($child->ID); ?> </a>
            </li> 
			<?php 
				} 
				wp_reset_postdata();
			}
			?>
          </ul>
          <!-- tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="design">
              <p> <?php echo get_the_content($theParent);?> </p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!------------------Side Breadcrum navigation END------>
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
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt mollit anim id.</p>
          <div class="col-md-6 col-sm-4">
            <h3>
              <i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL
            </h3>
            <p>hello@company.com</p>
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
  </section> <?php get_footer() ?>