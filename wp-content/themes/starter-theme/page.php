<?php get_header();  ?>




<div class="wrapper">

  <div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

  <!-- <?php //get_sidebar(); ?> -->

</div>
<!-- <h1>sd</h1>

<?php $employee= get_field('employee');?>
<?php var_dump($employee); ?>

<?php echo wp_get_attachment_image(
             get_post_thumbnail_id($employee->ID),
             'meena'
         );?>
<?php if($employee->post_title): ?>
<h3><?php the_field('section_title'); ?></h3>
<a href="<?php echo $employee->guid?>"><h2><?php echo $employee->post_title; ?></h2></a>
        <?php endif; ?> -->

<?php get_footer(); ?>