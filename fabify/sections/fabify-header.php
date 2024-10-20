<?php 					
	$fabify_hs_social			= get_theme_mod('hide_show_social','1'); 
	$fabify_hs_contact_infos	= get_theme_mod('hide_show_contact_infos','1'); 
	
	if ( ($fabify_hs_social) || ($fabify_hs_contact_infos) == '1') :
?>
<!-- Header -->
<header id="header-section" class="header nav-fabify" role="banner">
	<div id="unique-header" class="header-top-info d-lg-block d-none wow fadeInDown">
		<div class="header-widget">
			<div class="container">
				<div class="row">	            
					<?php 
						$fabify_header_email	= get_theme_mod('header_email');
						$fabify_header_contact	= get_theme_mod('header_contact_num');
					?>
		            <div class="col-lg-6 col-12">
		            	<div id="header-top-left" class="text-lg-left text-center">
							<?php if($fabify_hs_contact_infos == '1') { ?>
								<?php if($fabify_header_email) { ?>
									<div class="widget widget_info">
										<a href="mailto:<?php echo esc_html($fabify_header_email); ?>">
											<i class="fa fa-envelope-o"></i>
											<span><?php echo esc_html($fabify_header_email); ?></span>
										</a>
									</div>
								<?php } ?>
								
								<?php if($fabify_header_contact) { ?>
									<div class="widget widget_info">
										<a href="tel:<?php echo esc_html($fabify_header_contact); ?>">
											<i class="fa fa-phone"></i>
											<span><?php echo esc_html($fabify_header_contact); ?></span>
										</a>
									</div>
								<?php } ?>
							<?php } ?>
						</div>
					</div>					
					<div class="col-lg-6 col-12">
						<div id="header-top-right" class="text-lg-right text-center">
			                <!-- Start Social Media Icons -->
							<?php 
								$fabify_facebook_link		= get_theme_mod('facebook_link',''); 
								$fabify_linkedin_link		= get_theme_mod('linkedin_link',''); 
								$fabify_twitter_link		= get_theme_mod('twitter_link',''); 
								$fabify_googleplus_link		= get_theme_mod('googleplus_link',''); 
								$fabify_instagram_link		= get_theme_mod('instagram_link',''); 
								$fabify_dribble_link		= get_theme_mod('dribble_link',''); 
								$fabify_github_link			= get_theme_mod('github_link',''); 
								$fabify_bitbucket_link		= get_theme_mod('bitbucket_link',''); 
								$fabify_email_link			= get_theme_mod('email_link',''); 
								$fabify_skype_link			= get_theme_mod('skype_link',''); 
								$fabify_skype_action_link	= get_theme_mod('skype_action_link',''); 
								$fabify_vk_link				= get_theme_mod('vk_link','');
								$fabify_pinterest_link		= get_theme_mod('pinterest_link','');			
							?>
							<?php if($fabify_hs_social == '1') { ?>
							<aside id="social_widget" class="widget widget_social_widget">
								<ul>
									<?php if($fabify_facebook_link) { ?> 
										<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_facebook_link); ?>" aria-label="fa-facebook"><i class="fa fa-facebook"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_linkedin_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_linkedin_link); ?>" aria-label="fa-linkedin"><i class="fa fa-linkedin"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_twitter_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_twitter_link); ?>" aria-label="fa-twitter"><i class="fa fa-twitter"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_googleplus_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_googleplus_link); ?>" aria-label="fa-google-plus"><i class="fa fa-google-plus"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_instagram_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_instagram_link); ?>" aria-label="fa-instagram"><i class="fa fa-instagram"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_dribble_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_dribble_link); ?>" aria-label="fa-dribbble"><i class="fa fa-dribbble"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_github_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_github_link); ?>" aria-label="fa-github-alt"><i class="fa fa-github-alt"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_bitbucket_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_bitbucket_link); ?>" aria-label="fa-bitbucket"><i class="fa fa-bitbucket"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_email_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="mailto:<?php echo esc_attr($fabify_email_link); ?>" aria-label="fa-envelope-o"><i class="fa fa-envelope-o"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_skype_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_attr($fabify_skype_link); ?>?<?php echo esc_attr($fabify_skype_action_link); ?>" aria-label="fa-skype"><i class="fa fa-skype"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_vk_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_vk_link); ?>" aria-label="fa-vk"><i class="fa fa-vk"></i></a></li>
									<?php } ?>
									
									<?php if($fabify_pinterest_link) { ?> 
									<li><a class="tool-bounce tool-bottom-left" href="<?php echo esc_url($fabify_pinterest_link); ?>" aria-label="fa-pinterest-square"><i class="fa fa-pinterest-square"></i></a></li>
									<?php } ?>
								</ul>
							</aside>
							<?php } ?>
			                <!-- /End Social Media Icons-->
			            </div>
		            </div>
		        </div>				
	        </div>
	    </div>
	</div>

<?php endif; ?>