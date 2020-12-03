<?php get_header(); ?>

<!-- <?php echo get_permalink(13)?>
<?php  the_permalink()?> -->
<?php  echo get_the_author();?>

<?php
function initials($authName) {
	if (strlen($authName) == 0) 
        return; 

	$split = explode(" ", $authName);
	$splitSecond = $split[1];
	echo $split[0];
	echo " ";
	echo $splitSecond[0];
	echo ".";
}
?> 

<div class="wrapper">
  <div class="content ">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <!-- #post-## -->
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php $category=get_the_category();?>
        <div class="single-blog container">
          <h3 class="single-blog-heading"><?php echo ($category[0]->name) ?></h3>
          <h1><?php the_title(); ?></h1>
          <h2> By<?php $authName = get_the_author(); ?>
          <?php initials($authName); ?></h2>
          <div class="single-blog-img"> <?php the_post_thumbnail('post-image');?></div>

        </div>
        <!-- <div class="entry-meta">
          <?php base_theme_posted_on(); ?>
        </div> -->
        <!-- .entry-content -->
        <div class="entry-content">
         <div class="single-blog-text container"><?php the_content(); ?></div>

          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div>
            <!-- .entry-utility -->    
        <!-- <div class="entry-utility">
          <?php base_theme_posted_in(); ?>
          <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
        </div> -->
      </div>
         <!-- #nav-below -->
      
     
  <?php //comments_template( '', true ); ?> 

    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.content -->

  <!-- <?php get_sidebar(); ?> -->

</div>

<?php get_footer(); ?>