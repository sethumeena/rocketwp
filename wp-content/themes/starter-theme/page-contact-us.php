<?php /* Template Name: Contact Us*/?>
<?php get_header();?>

<div class="wrapper">

  <div class="content contact-us ">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
     
       

      <h1 class="sub-heading"><?php the_title(); ?></h1>
      <?php $footer_logo = get_field('footer_image', 'option');?>


      <div class="contact-logo"><img src="<?php echo $footer_logo['url']?>" alt="<?php echo $footer_logo['alt']?>"/></div>
      <div class="container blog-padding"><?php the_content(); ?>
     
      </div>
    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

  <!-- <?php //get_sidebar(); ?> -->

</div>
<?php get_footer();?>