					<?php if(!is_front_page()):?>
								<div class="container-bottom"></div>
							</div>
						</div>
						<?php get_sidebar(); ?>
					<?php endif;?>
				</div>
				<div id="footer<?php if (is_front_page()) echo "-home"; ?>">
					<!-- block-popup -->
					<div class="block-popup">
						<img class="png" src="<?php bloginfo('template_url'); ?>/images/img07.png" alt="image description" width="1025" height="214" />

						<?php if (is_active_sidebar('footer-social')) : ?>
							<div class="popup">
								<a href="#" class="open <?php echo function_exists('qtrans_getLanguage') ? 'open-'.qtrans_getLanguage() : ''; ?>"><?php _e("Partagez", "bel"); ?></a>
								<?php dynamic_sidebar('footer-social'); ?>
							</div>
						<?php endif; ?>
					</div>
					<?php wp_nav_menu( array('container' => false,
						 'theme_location' => 'footer',
						 'items_wrap' => '<div class="footer-menu"><div class="holder"><ul id="%1$s" class="%2$s">%3$s</ul></div></div>') ); ?>
				</div>
				<a class="skip" href="#wrapper"><?php _e("Retourner en haut de la page", "bel"); ?></a>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
