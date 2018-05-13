<header id="banner_firstpage">
  <div class="container">
    <a class="firstpagelogo" href="<?= esc_url(home_url('/')); ?>"><img id="firstplogoimg" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Logo"></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <a href="/butik" id="firstpahref">
		<div id="firstp_welc">
			<div id="firstp_welc_inner">
		  		Välkommen
			</div>
		</div>
    </a>
  </div>
</header>
