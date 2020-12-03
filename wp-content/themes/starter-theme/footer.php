</main>
<footer>
  <div><h1><?php the_field('footer_title', 'option'); ?></h1></div>
<br>
    <div class="icon-container box">
      <p class="icon-heading">Follow us on: </p>
      <?php wp_nav_menu( array(
            'theme_location' => 'social',
            'container_class' => 'social-menu'
          )); ?>
    </div>
    <?php $footer_logo = get_field('footer_image', 'option');?>
<div class="footer-logo"><img src="<?php echo $footer_logo['url']?>" alt="<?php echo $footer_logo['alt']?>"/></div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>