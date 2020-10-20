<div class="sidebar col-lg-3 col-sm-12 col-12">

	<div class="widget">
		<div class="banner">
			<div class="row">
				<?php if ( have_rows( 'game_homes', 'option' ) ): ?>
					<?php while ( have_rows( 'game_homes', 'option' ) ): the_row(); ?>

						<?php
						$image       = get_sub_field( 'image' );
						$image_url   = wp_get_attachment_url( $image );
						$image_title = get_sub_field( 'title' );
						$image_descr = get_sub_field( 'descr' );
						$image_link  = get_sub_field( 'link' );
						$image_data  = get_post( $image );
						?>

						<div class="col-lg-12 col-md-6 col-sm-6 col-12 banner-item-wr">
							<a href="<?php echo $image_link; ?>" class="banner-item" target="_blank">
								<div class="banner-item-img">
									<img src="<?php echo $image_url; ?>" title="<?php echo $image_data->post_title; ?>" alt="<?php echo get_post_meta($image, '_wp_attachment_image_alt', true); ?>">
								</div>
								<div class="banner-item-title"><?php echo $image_title; ?></div>
								<div class="banner-item-descr"><?php echo $image_descr; ?></div>
							</a>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php if ( is_active_sidebar( 'right-sidebar' ) ) dynamic_sidebar( 'right-sidebar' ); ?>

	<div class="widget">
		<div class="widget-header">
			<div class="widget-title">Новости</div>
		</div>
		<div class="widget-content widget-bg">
			<div class="widget-news">
				<ul>
					<?php
					$news_posts = get_posts( array( 'post_type' => 'game_news', 'posts_per_page' => 5 ) );
					foreach( $news_posts as $post ) : ?>
					<li>
						<div class="widget-news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="widget-news-date"><?php echo get_the_date('d F Y'); ?></div>
					</li>
					<?php endforeach; ?>
					<?php wp_reset_postdata() ?>
					<li>
						<div class="widget-news-all"><a href="/game_news">Все новости</a></div>
					</li>
				</ul>
			</div>
		</div>
	</div>

</div>

<script>
if ($( document ).width() <= 767) {
$("#innermobile").html('<div class="col-lg-3 col-sm-12 col-12">'+$(".widget").html()+'</div>');
$(".sidebar .widget:first-child").css("display", "none");
}
</script>