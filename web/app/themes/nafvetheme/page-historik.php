<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  
          
          

          <main class="Main Main--page" >
            
              <section class="Main-content" data-content-field="main-content">
	              <div class="row">
		              <div class="col-12 col-sm-5 historik_slider">
			              <?php echo do_shortcode("[smartslider3 slider=18]");?>
		              </div>
		              <div class="col-12 col-sm-5 historik_content">
			              <?php the_content(); ?>
		              </div>
		              <div class="col-12 col-sm-2">
		              </div>
	              </div>
              </section>
            
          </main>  
  <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/bower_components/lightbox2/dist/js/lightbox.js"></script>

<?php endwhile; ?>
