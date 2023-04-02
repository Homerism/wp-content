<?php get_header() ?> 
<?php global $child_pages;
$theParent = wp_get_post_parent_ID(get_the_ID());
 ?>
<!---Banner here-------->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 style="text-transform: uppercase;"><?php the_title(); ?></h1>
				<hr>
        <?php if ($theParent){ ?>
          <a href="<?php echo site_url('/about-us'); ?>" class="smoothScroll btn btn-danger">About Us</a>
          <a href="#details" class="smoothScroll btn btn-default"><?php the_title(); ?></a>
          <?php } else{ ?>
            <a href="#details" class="smoothScroll btn btn-default">Read More</a>
            <?php } ?>
			</div>
		</div>
	</div>		
</section>
<!---Banner ENDS Here--->
<!-------BreadCrumb Backward Navigation START-------->
  <div> 
    <?php
    if($theParent){ ?>
    <!---Parent If statement starts-->
    <ul class="side">
  <li class="crumb"><a class="active" href="<?php echo get_permalink($theParent); ?>">
          <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a></li>
  <li class="crumb"><a href="#details"><?php echo the_title(); ?></a></li>
</ul>

    <?php } ?>
    <!--Parent if statment ends-->
  </div>

<section id="details">
  <?php
  if($theParent==0){ #Query for child pages Start--> 
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
<div class="split left">
<?php 
       if($theParent==0){ 
         ?> 
         <h1><?php echo get_the_title($theParent); ?></h1>
         <?php } 
             else{ ?>
             <h1><?php the_title(); ?></h1>
             <?php } ?>
             <p><?php echo get_the_content($theParent);?></p>
             </div>
         <?php 
         if ($child_pages) { ?>
         <div class="split right">
         <ul class="box">
         <?php foreach ($child_pages as $child) {
          setup_postdata($child); ?>
            <li class="link"><a href="<?php echo get_the_permalink($child->ID); ?>"> <?php echo get_the_title($child->ID); ?></a></li>
         <?php 
           }?> 
           <li class="link"><a href="<?php echo site_url('/questions');?>">Frequently Asked Questions</a></li>
          </ul>
           </div>
          <?php
           wp_reset_postdata();
         }
         ?>
</section>
  <?php get_footer() ?>