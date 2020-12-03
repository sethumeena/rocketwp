<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">

  <!-- <div class="content"> -->
       <?php //get_template_part( 'loop', 'index' );	?> 
  <!-- </div>  --> 
  
  <div class="wrapper">
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

  <div class="content">
  <?php $footer_logo = get_field('footer_image', 'option');?>
         <div class="about-logo"><img src="<?php echo $footer_logo['url']?>" alt="<?php echo $footer_logo['alt']?>"/></div>

    <h1 class="sub-heading"> BLOG</h1>
    <?php // Start the loop ?>
   <div class="category-block"> <?php $categories = get_categories();
      if($categories):?>
    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <select name="cat" id="cat">
        <?php foreach($categories as $category): ?>
            <option class="option-values" value="<?php echo $category ->term_id ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
        </select>
        <input type="submit" name="submit" value="view" />
    </form>
   
<?php endif; ?> </div>
    
    <div class="container blog-padding">
    

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
  </div>
  </div>
  <!-- <?php //get_sidebar(); ?> -->
  
  <!-- <?php get_sidebar(); ?> -->

</div> 


<?php get_footer(); ?>