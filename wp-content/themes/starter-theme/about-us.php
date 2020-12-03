<?php /*Template Name: Get to Know Us*/?>
<?php get_header(); ?>
<div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

     <div class="about-us-content"> 
         <?php $footer_logo = get_field('footer_image', 'option');?>
         <div class="about-logo"><img src="<?php echo $footer_logo['url']?>" alt="<?php echo $footer_logo['alt']?>"/></div>


         <h1 class="sub-heading"><?php the_title(); ?></h1>
         <div class="about-begining-content container">
            <div class="about-begining-text">
                <h1><?php the_field('begining_heading');?></h1>
                <p class="desc"> <?php the_field('begining_description');?></p>
            </div>
            <div class="about-begining-img">
                <?php echo wp_get_attachment_image(
                            get_post_thumbnail_id($employee->ID),
                            'single-post-image'
                        );?> 
            </div>
         </div>
         <!-- <div class="container"> -->
            <div class="about-mission">
                <h1><?php the_field('mission_heading');?></h1>
                <p class="desc"><?php the_field('mission_description');?></p>
            </div>
         <!-- </div> -->
         
      
        </div>

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

  <!-- <?php get_sidebar(); ?> -->

</div>
<!-- Team Container -->
<div class="about-team container">


<h1><?php the_field('team_heading');?></h1>
<h3>Leadership</h3>
<div class="team-member-container leader-box">
<?php
// leadership team query
$leadership_query = new WP_Query(
    array(
        'post_type' => 'team_members',
        'posts_per_page' => -1,
        'tax_query' => array(
              array(
                'taxonomy' => 'teams', // what taxonomy are we querying by?
                'field' => 'slug', // what field is the query? (other options are the term_id or name)
                'terms'    => 'leadership', // what specific term are we querying by?
              ))
      )
);

// The Loop for leadership
if ( $leadership_query->have_posts() ) { ?>
  
    <?php while ( $leadership_query->have_posts() ) { 
        $leadership_query->the_post(); ?>

        <?php $job_title = get_field('title'); ?>
        
        <div class="team-member">
            <a href="<?php the_permalink(); ?>">
               <div class="team-member-img"> <?php echo 
                wp_get_attachment_image(get_post_thumbnail_id(),
                'square', 
                false,
                array('class' => 'featured-image')); ?></div>
                <h4><?php echo the_title(); ?></h4>
                <p><?php echo $job_title; ?></p>
            </a>
        </div>

    <?php }
    
    /* Restore original Post Data */
    wp_reset_postdata();
} else { ?>
    <!-- no posts found -->
    <p>There are no leaders</p>

<?php } ?></div>
<h3>Development Team</h3>
<div class="team-member-container">

<?php
// developers team query
$developers_query = new WP_Query(
    array(
        'post_type' => 'team_members',
        'posts_per_page' => -1,
        'tax_query' => array(
              array(
                'taxonomy' => 'teams', // what taxonomy are we querying by?
                'field' => 'slug', // what field is the query? (other options are the term_id or name)
                'terms'    => 'development', // what specific term slug are we querying by?
              ))
      )
);
// The Loop for developers team
if ( $developers_query->have_posts() ) { ?>
 
    <?php while ( $developers_query->have_posts() ) { 
        $developers_query->the_post(); ?>

        <?php $job_title = get_field('title'); ?>

        <div class="team-member">
            <a href="<?php the_permalink(); ?>">
            <div class="team-member-img"> <?php echo wp_get_attachment_image(get_post_thumbnail_id(),'square', false, array('class' => 'featured-image')); ?></div>
                <h4><?php the_title(); ?></h4>
                <p><?php echo $job_title; ?></p>
            </a>
        </div>
    <?php }
    
    /* Restore original Post Data */
    wp_reset_postdata();
} else { ?>
    <!-- no posts found -->
    <p>There are no developers</p>
    <?php } ?></div>
    <h3>Design Team</h3>

<div class="team-member-container">

<?php

// design team query
$design_query = new WP_Query(
    array(
        'post_type' => 'team_members',
        'posts_per_page' => -1,
        'tax_query' => array(
              array(
                'taxonomy' => 'teams', // what taxonomy are we querying by?
                'field' => 'slug', // what field is the query? (other options are the term_id or name)
                'terms'    => 'design', // what specific term slug are we querying by?
              ))
      )
);
// The Loop for design team

if ( $design_query->have_posts() ) { ?>
    <?php while ( $design_query->have_posts() ) { 
        $design_query->the_post(); ?>
      
      <?php $job_title = get_field('title'); ?>

        <div class="team-member">
            <a href="<?php the_permalink(); ?>">
            <div class="team-member-img"> <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'square', false, array('class' => 'featured-image')); ?></div>
                <h4><?php the_title(); ?></h4>
                <p><?php echo $job_title; ?></p>
            </a>
        </div>

    <?php }
    
    /* Restore original Post Data */
    wp_reset_postdata();
} else { ?>
    <!-- no posts found -->
    <p>There are no designers</p>
<?php } ?></div>


</div>


<div class="about-contact">
<h1><?php echo the_field('contact_title')?></h1>
<a class="link" href="<?php echo get_permalink(99)?>">Get In Touch</a><br>
</div>
<?php get_footer(); ?>