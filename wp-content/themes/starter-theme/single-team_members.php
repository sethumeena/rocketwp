<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
<div class="single-blog container">
 
          <h1><?php the_title(); ?></h1>
          <h2> <?php the_field('title'); ?></h2>
          <h5>Additional information:</h5>
          <small>Favorite Pizza Topping: <span><?php the_field('fav_pizza_topping') ?></span></small>
          <small>Favorite Band: <span> <?php the_field('fav_band') ?></span></small>
          <small>Favorite Project:  <span><?php the_field('fav_project') ?></span></small>
          <div class="single-blog-img"><?php echo wp_get_attachment_image(
                get_post_thumbnail_id(),
                'single-post-image'
            );?> </div>
           <!-- <?php echo wp_get_attachment_image(
                get_post_thumbnail_id(),
                'single-post-image'
            );?>  -->
        </div>
        <div class="single-blog-text container"><?php the_content(); ?></div> 
    <!-- <?php the_content(); ?> -->
<?php endwhile; ?>

<?php get_footer(); ?>