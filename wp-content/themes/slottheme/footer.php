					</div>
				</div>
			</div>

			<a href="#0" class="btn-top"></a>

			<footer class="footer">
				<div class="container">
					<div class="row">

						<div class="col-xl-4 col-sm-12 col-12">
							<div class="footer-logo">
								<?php if ( is_front_page() ) : ?>
									<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png"></span>
								<?php else : ?>
									<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png"></a>
								<?php endif; ?>
							</div>
						</div>

						<div class="col-xl-8 col-sm-12 col-12">
							<div class="footer-right">
								<nav class="footer-menu">
									<?php wp_nav_menu( array(
										'theme_location' => 'bottom',
										'container'      => false,
										'menu_class'     => '',
										'walker'         => new Nav_Walker_Nav_Menu() )
										);
									?>
								</nav>
								<div class="copy">
								<?php
									$domain = get_site_url();
									$domain = str_replace('https://', '', $domain);
								?>
									<span>© <?= date('Y');?> <?= $domain ?> - <?php the_field('copy_text', 'options'); ?></span>
									<span class="copy-warning">18+</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</footer>

		</div>
	</div>

	<?php wp_footer(); ?>

</body>
</html>