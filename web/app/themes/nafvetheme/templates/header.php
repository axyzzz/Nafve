<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Logo"></a>
    
    
<!--     Inserting cart -->
	<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	 
	    $count = WC()->cart->cart_contents_count;
	    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php 
	    if ( $count > 0 ) {
	        ?>
	        <span class="cart-contents-count"><i class="fa fa-shopping-cart" style="font-size:30px"></i><?php echo esc_html( $count ); ?></span>
	        <?php
	    }
	        ?></a>
	 
	<?php } ?>    
<!--      -->
    

<!-- 	NAVBAR -->    
	<div id="navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/butik">Produkter</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/galleri">Galleri</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Historik</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/instagram">Instagram</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Kontakt</a>
	      </li>
	    </ul>
	  </div>
	</nav>    
	</div>
<!--      -->
    
    
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    
    
    
  </div>
</header>
