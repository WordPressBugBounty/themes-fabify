	<!-- Header Widget Info -->
	<div class="header-widget-info d-none d-lg-block">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-md-12">
		            <div class="header-wrapper">
		                <div class="brand-logo">
		                    <div class="logo">
		                        <?php
	                            if(has_custom_logo()) {
	                                the_custom_logo();
	                            }
	                            else { ?>
	                            	<a href="<?php echo esc_url(home_url( '/' )); ?>" class="navbar-brand">
	                            		<?php echo esc_html(get_bloginfo('name')); ?>
	                            	</a>
	                            <?php }
	                            $fabify_description = get_bloginfo( 'description');
	                            if ($fabify_description) : ?>
	                                <p class="site-description"><?php echo esc_html($fabify_description); ?></p>
	                            <?php endif; ?>
		                    </div>
		                </div>
		                <div class="header-right">
		                    <div class="header-info">
								<?php 
									$fabify_hs_nav_contact_info	= get_theme_mod('hs_nav_contact_info','1');
									$fabify_nav_ct_info1_icon	= get_theme_mod('nav_ct_info1_icon','fa-clock-o');
									$fabify_nav_ct_info1_ttl	= get_theme_mod('nav_ct_info1_ttl');
									$fabify_nav_ct_info1_subttl	= get_theme_mod('nav_ct_info1_subttl');
									$fabify_nav_ct_info2_icon	= get_theme_mod('nav_ct_info2_icon','fa-phone');
									$fabify_nav_ct_info2_ttl	= get_theme_mod('nav_ct_info2_ttl');
									$fabify_nav_ct_info2_subttl	= get_theme_mod('nav_ct_info2_subttl');
									$fabify_nav_ct_info3_icon	= get_theme_mod('nav_ct_info3_icon','fa-clock-o');
									$fabify_nav_ct_info3_ttl	= get_theme_mod('nav_ct_info3_ttl');
									$fabify_nav_ct_info3_subttl	= get_theme_mod('nav_ct_info3_subttl');
									if($fabify_hs_nav_contact_info =='1'){
								?>
							    <div class="header-carousel">
							       <?php if(!empty($fabify_nav_ct_info1_icon) || !empty($fabify_nav_ct_info1_ttl) || !empty($fabify_nav_ct_info1_subttl)): ?>
										<div class="widget widget_contact widget_first">
											<div class="contact-area">
												<?php if(!empty($fabify_nav_ct_info1_icon)): ?>
													<div class="contact-icon"><i class="fa <?php echo esc_attr($fabify_nav_ct_info1_icon); ?>"></i></div>
												<?php endif; ?>
												
												<?php if(!empty($fabify_nav_ct_info1_ttl) || !empty($fabify_nav_ct_info1_subttl)): ?>
													<a href="" class="contact-info">
														<span class="text"><?php echo esc_html($fabify_nav_ct_info1_ttl); ?></span>
														<span class="title"><?php echo esc_html($fabify_nav_ct_info1_subttl); ?></span>
													</a>
												<?php endif; ?>	
											</div>
										</div>
									<?php endif; ?>
							       
								   <?php if(!empty($fabify_nav_ct_info2_icon) || !empty($fabify_nav_ct_info2_ttl) || !empty($fabify_nav_ct_info2_subttl)): ?>
										<div class="widget widget_contact widget_second">
											<div class="contact-area">
												<?php if(!empty($fabify_nav_ct_info2_icon)): ?>
													<div class="contact-icon"><i class="fa <?php echo esc_attr($fabify_nav_ct_info2_icon); ?>"></i></div>
												<?php endif; ?>
												
												<?php if(!empty($fabify_nav_ct_info2_ttl) || !empty($fabify_nav_ct_info2_subttl)): ?>
													<a href="" class="contact-info">
														<span class="text"><?php echo esc_html($fabify_nav_ct_info2_ttl); ?></span>
														<span class="title"><?php echo esc_html($fabify_nav_ct_info2_subttl); ?></span>
													</a>
												<?php endif; ?>	
											</div>
										</div>
									<?php endif; ?>
									
							         <?php if(!empty($fabify_nav_ct_info3_icon) || !empty($fabify_nav_ct_info3_ttl) || !empty($fabify_nav_ct_info3_subttl)): ?>
										<div class="widget widget_contact widget_third">
											<div class="contact-area">
												<?php if(!empty($fabify_nav_ct_info3_icon)): ?>
													<div class="contact-icon"><i class="fa <?php echo esc_attr($fabify_nav_ct_info3_icon); ?>"></i></div>
												<?php endif; ?>
												
												<?php if(!empty($fabify_nav_ct_info3_ttl) || !empty($fabify_nav_ct_info3_subttl)): ?>
													<a href="" class="contact-info">
														<span class="text"><?php echo esc_html($fabify_nav_ct_info3_ttl); ?></span>
														<span class="title"><?php echo esc_html($fabify_nav_ct_info3_subttl); ?></span>
													</a>
												<?php endif; ?>	
											</div>
										</div>
									<?php endif; ?>
							    </div>
								<?php } ?>
		                        <div class="header-single-widget">
		                            <div class="menu-right">
			                            <ul class="wrap-right">
			                            	<?php 
											$fabify_header_cart	= get_theme_mod('header_cart','1');
											if($fabify_header_cart== '1') :?>
			                                <li class="cart-wrapper">
			                                    <div class="cart-icon-wrap">
												<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			                                        <a href="javascript:void(0)" id="cart"><i class="fa fa-shopping-bag"></i>
			                                        <?php 
			                                        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			                                            $count = WC()->cart->cart_contents_count;
			                                            $cart_url = wc_get_cart_url();
			                                            
			                                            if ( $count > 0 ) {
			                                            ?>
			                                                 <span><?php echo esc_html( $count ); ?></span>
			                                            <?php 
			                                            }
			                                            else {
			                                                ?>
			                                                <span><?php echo esc_html_e( '0','fabify' ); ?></span>
			                                                <?php 
			                                            }
			                                        }
			                                        ?>
			                                        </a>
												<?php } ?>
			                                    </div>
			                                    
			                                    <!-- Shopping Cart -->
			                                    <?php if ( class_exists( 'WooCommerce' ) ) { ?>
			                                    <div id="header-cart" class="shopping-cart">
			                                        <div class="cart-body">                                           
			                                            <?php get_template_part('woocommerce/cart/mini','cart');     ?>
			                                        </div>
			                                    </div>
			                                    <?php } ?>
			                                    <!--end shopping-cart -->
			                                </li>
			                                <?php endif; ?>
			                                <?php
		                                	$fabify_button_label	= get_theme_mod('button_label');
											$fabify_button_url		= get_theme_mod('button_url');
											$fabify_header_cart		= get_theme_mod('header_cart','on');
											$fabify_header_search	= get_theme_mod('header_search','on');
		                                    $header_book_hide_show= get_theme_mod('header_book_hide_show','1');
			                                    
	                                        if($header_book_hide_show == '1'  && !empty($fabify_button_label)) {
			                                ?>
			                                <li class="menu-item header_btn">
			                                	<a href="<?php echo esc_url($fabify_button_url); ?>" class="bt-primary bt-effect-1"><?php echo esc_html($fabify_button_label); ?></a>
			                                </li>
			                                <?php } ?>
			                            </ul>                            
			                        </div>
	                            </div>
		                    </div>
		                </div>
		            </div>
		        </div>
	        </div>
	    </div>
	</div>
	<!-- / -->

	<div class="navigator-wrapper">
		<!-- Mobile Toggle -->
	    <div class="theme-mobile-nav d-lg-none d-block <?php echo esc_attr(specia_sticky_menu()); ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="theme-mobile-menu">
	                        <div class="headtop-mobi">
	                            <div class="headtop-shift">
	                                <a href="javascript:void(0);" class="header-sidebar-toggle open-toggle"><span></span></a>
	                                <a href="javascript:void(0);" class="header-sidebar-toggle close-button"><span></span></a>
	                                <div id="mob-h-top" class="mobi-head-top animated"></div>
	                            </div>
	                        </div>
	                        <div class="mobile-logo">
								<?php
		                        if(has_custom_logo()) {   
		                            the_custom_logo();
		                        }
		                        else { ?>
		                        	<a href="<?php echo esc_url(home_url( '/' )); ?>" class="navbar-brand">
		                        		<?php echo esc_html(get_bloginfo('name')); ?>
		                        	</a>
		                        <?php }
		                        $fabify_description = get_bloginfo( 'description');
		                        if ($fabify_description) : ?>
		                            <p class="site-description"><?php echo esc_html($fabify_description); ?></p>
		                        <?php endif; ?>
	                        </div>
	                        <div class="menu-toggle-wrap">
	                            <div class="hamburger-menu">
	                                <a href="javascript:void(0);" class="menu-toggle">
	                                    <div class="top-bun"></div>
	                                    <div class="meat"></div>
	                                    <div class="bottom-bun"></div>
	                                </a>
	                            </div>
	                        </div>
	                        <div id="mobile-m" class="mobile-menu">
	                            <div class="mobile-menu-shift">
	                                <a href="javascript:void(0);" class="close-style close-menu"></a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- / -->
	    <!-- Top Menu -->
	    <div class="xl-nav-area d-none d-lg-block">
	        <div class="navigation <?php echo esc_attr(specia_sticky_menu()); ?>">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="theme-menu">
		                        <nav class="menubar">
		                            <?php
		                                wp_nav_menu(
		                                    array(
		                                        'theme_location' => 'primary_menu',
		                                        'container'  => '',
		                                        'menu_class' => 'menu-wrap',
		                                        'fallback_cb' => 'specia_fallback_page_menu::fallback',
		                                        'walker' => new specia_nav_walker()
	                                        )
		                                );
		                            ?>                               
		                        </nav>
		                        <?php if($fabify_header_search== 'on') : ?>
		                        <div class="menu-right">
		                            <ul class="wrap-right">
		                                <li class="search-button">
		                                	<form method="get" id="searchform" class="search-form search-default search-bg" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	                                            <div>
	                                                <span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'fabify' ); ?></span>
	                                                <input type="search" class="search-field header-search-field" placeholder="<?php esc_attr_e( 'Search', 'fabify' ); ?>" value="" name="s" id="s" />
	                                                <button role="button" type="submit" class="search-submit" aria-label="<?php esc_attr_e( 'Search', 'fabify' ); ?>">
	                                                    <i class="fa fa-search" aria-hidden="true"></i>
	                                                </button>
	                                            </div>
	                                        </form>
		                                </li>
		                            </ul>                            
		                        </div>
		                        <?php endif; ?>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
	    </div>
	    <!-- / -->
	</div>	
</header>
<div class="clearfix"></div>
<?php
if ( !is_page_template( 'templates/template-homepage-one.php' )) {
	specia_breadcrumbs_style();
}
?>