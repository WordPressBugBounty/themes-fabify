<?php 
	$fabify_hs_call_actions		= get_theme_mod('hide_show_call_actions','on'); 
	$fabify_cta_bg_setting		= get_theme_mod('call_action_background_setting',esc_url(get_template_directory_uri() .'/images/cta.jpg'));
	$fabify_cta_button_label	= get_theme_mod('call_action_button_label');
	$fabify_cta_button_link		= get_theme_mod('call_action_button_link');
	$fabify_cta_button_target	= get_theme_mod('call_action_button_target');
	$fabify_cta_btn_middle_text	= get_theme_mod('call_action_btn_middle_text');
	$fabify_cta_button2_icon	= get_theme_mod('call_action_button2_icon','fa-phone');
	$fabify_cta_button_title	= get_theme_mod('call_action_button_title');
	$fabify_cta_button_label2	= get_theme_mod('call_action_button_label2');
	$fabify_cta_button_link2	= get_theme_mod('call_action_button_link2');

	if($fabify_hs_call_actions == 'on') :
?>
<section id="cta-unique" class="call-to-action-six wow fadeInDown">
    <div class="background-overlay">
        <div class="container">
            <div class="row flexing flexing-start">
                
                <div class="col-md-6 padding-top-25 padding-bottom-25">
					<?php 
						$fabify_aboutusquery1 = new wp_query('page_id='.get_theme_mod('call_action_page',true)); 
						if( $fabify_aboutusquery1->have_posts() ) 
						{   while( $fabify_aboutusquery1->have_posts() ) { $fabify_aboutusquery1->the_post(); 
					?>
                    <h2 class="demo1"> <?php the_title(); ?> </h2>
                    <?php the_content(); ?>					
					<?php } } wp_reset_postdata(); ?>
                </div>

                <div class="col-md-6 cta-img-overlay">
                	<?php if(!empty($fabify_cta_button2_icon) || !empty($fabify_cta_button_title) || !empty($fabify_cta_button_label2)): ?>
						<div class="call-wrapper call-wrapper1">
							<?php if(!empty($fabify_cta_button2_icon)): ?>
								<div class="call-icon-box"><i class="fa <?php echo esc_attr($fabify_cta_button2_icon); ?>"></i></div>
							<?php endif; ?>	
							<div class="cta-info">
								<?php if(!empty($fabify_cta_button_title)): ?>
									<div class="call-title"><?php echo wp_kses_post($fabify_cta_button_title); ?></div>
								<?php endif; ?>
								<?php if(!empty($fabify_cta_button_label2)): ?>
									<div class="call-phone"><a href="<?php echo esc_url($fabify_cta_button_link2); ?>"><?php echo wp_kses_post($fabify_cta_button_label2); ?></a></div>
								<?php endif; ?>		
							</div>
						</div>
					<?php endif; ?>	
					
					<?php if(!empty($fabify_cta_btn_middle_text)): ?>
						<span class="cta-or"><?php echo wp_kses_post($fabify_cta_btn_middle_text); ?></span>
					<?php endif; ?>
					
					<?php if($fabify_cta_button_label) :?>
						<a href="<?php echo esc_url($fabify_cta_button_link); ?>" <?php if(($fabify_cta_button_target)== 1){ echo "target='_blank'"; } ?> class="bt-primary bt-effect-1 call-btn-1"><?php echo esc_html($fabify_cta_button_label); ?></a>
					<?php endif; ?>
                    <div class="cta-bg">
            			<div style="background-image:url('<?php echo esc_url($fabify_cta_bg_setting); ?>'); background-attachment: fixed;">
            		</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php wp_reset_postdata(); endif; ?>
