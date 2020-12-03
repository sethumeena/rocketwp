<?php get_header(); ?>

<div class="wrapper">
  <div class="content">
    <h1 class="category sub-heading">Category:</h1>
    <h1 class="category-heading"><?php single_cat_title(); ?></span></h1>
    <?php
      //$category_description = category_description();
      //if ( ! empty( $category_description ) )
       // echo '' . $category_description . '';
       // get_template_part( 'loop', 'category' );
      ?> 
      <?php
function initials($authName) {
	//if the author name is 0 characters long, stop the function
	if (strlen($authName) == 0) 
        return; 
	// Take the entire author name and split it every time there's a space. Use the 'explode()' function: https://www.w3schools.com/php/func_string_explode.asp and store them in a variable called split 
	$split = explode(" ", $authName);
	//var_dump($split);
	//put the SECOND string in the array (the last name), into a variable called $splitSecond. Remember the FIRST string will be [0] and the second will be [1]
	$splitSecond = $split[1];
	//echo the first name
	echo $split[0];
	//give us a space
	echo " ";
	//if you use [0] on an array (like $split), you'll get the first item/name, BUT if you use [0] with a STRING, it will give you the first LETTER
	echo $splitSecond[0];
	echo ".";
}
?> 
<div class="container">


<div class="blog-container">

   
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<div class="blogs">


<div class="blog-img">

<?php echo wp_get_attachment_image(
         get_post_thumbnail_id(),'post-image'
        
     );?></div>
  <div class="blog-text">
  <h3 class="blog-heading"><?php the_title(); ?></h3>
  <?php $authName = get_the_author(); ?>
  <p class="auth-details"><?php initials($authName); ?> - <?php echo get_the_date(); ?></p>
  
  <div class="blog-para">

  <?php
   echo wp_trim_words(get_the_content(), 20, '...');
    ?> </div> 

  <a class="link" href="<?php echo the_permalink();?>">Read More</a><br>
  </div>
  </div>

 


<?php endwhile; // end the loop?>
</div>
</div> <!-- /,content -->
  </div> <!-- /.content -->

  <!-- <?php get_sidebar(); ?> -->
  </div>
</div>

<?php get_footer(); ?>