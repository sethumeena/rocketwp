<?php /* Template Name: Services*/?>
<?php get_header();?>
<div class="wrapper">

  <div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1 class="sub-heading"><?php the_title(); ?></h1>
      <?php the_content(); ?>
  
      <?php

    // check if the repeater field has rows
    if( have_rows('development') ):?>

         <!-- loop through the rows of data -->
       <?php while ( have_rows('development') ) : the_row();?>
       <?php $footer_logo = get_field('footer_image', 'option');?>


<div class="service-logo"><img src="<?php echo $footer_logo['url']?>" alt="<?php echo $footer_logo['alt']?>"/></div>
            <!-- display a sub field value -->
            <div class="card-container container">

          
            <div class="card">
            <h3 class="card-title">Wordpress<br> Development</h3>
            <p class="card-text"><?php the_sub_field('wordpress_development');?></p></div>

            <div class="card"><h3 class="card-title">Digital<br> Marketing</h3>
            <p class="card-text"><?php the_sub_field('digital_marketing');?></p></div>

            <div class="card"><h3 class="card-title">Shopify<br> Development</h3>
            <p class="card-text"><?php the_sub_field('shopify_development');?></p></div>
            </div>

      <?php  endwhile;?>
    <?php endif; ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

  <!-- <?php get_sidebar(); ?> -->

</div>
<?php get_footer();?>
