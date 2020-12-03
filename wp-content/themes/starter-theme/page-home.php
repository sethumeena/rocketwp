<?php /*Template Name: Home */?>
<div class="page-content">

<?php get_header();  ?>

<div class="wrapper">

  <div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <!-- Page Content -->
      <div class="home-content container">

     <h1 class="main-heading"><?php the_title(); ?></h1>
      <div class="desc"> <?php the_content(); ?> </div>
      <!-- learn more link -->
      <?php $learn_more = get_field('learn_more');?>
      <a class="link" href="<?php echo $learn_more['url']?>" target="<?php echo $learn_more['target']?>"><?php echo $learn_more['title']?></a></div>
      <!-- About Us -->
      <div class="home-about-content container">
        <div class="home-about-text">
          <h1><?php the_field('title');?></h1>
          <p class="desc"><?php the_field('description');?></p>
          <a class="link" href="<?php echo $learn_more['url']?>" target="<?php echo $learn_more['target']?>"><?php echo $learn_more['title']?></a><br>
        </div>
        <!-- About Image -->
        <div class="home-about-img">
          <?php $about_img = get_field('image');?>
          <!-- <?php var_dump($about_img);?> -->
          <!-- <?php var_dump($about_img['id']);?> -->

          <?php echo wp_get_attachment_image($about_img['id'],'single-post-image');?> 
  
        </div>
      </div>

    <!-- Featured Employee -->
    <div class="home-employee-content container">
      <div class="home-employee-img">
        <?php $employee= get_field('employee');?>
            <?php echo wp_get_attachment_image(
                get_post_thumbnail_id($employee->ID),
                'single-post-image'
            );?> 
      </div>
      <div class="home-employee-text">
        <?php if($employee->post_title): ?>
        <h5 class="employee-sub-heading">Featured Employee</h5>
        <h1><?php the_field('section_title'); ?></h1>
        <p class="desc"><?php echo wp_trim_words(($employee->post_content),57,''); ?></p>
        <a class="link" href="<?php echo $employee->guid?>">Read More</a><br>
        </div>
        <?php endif; ?> 
        <?php endwhile;?>
     
    </div>
  </div> <!-- /,content -->
</div>

<?php get_footer(); ?>
</div>