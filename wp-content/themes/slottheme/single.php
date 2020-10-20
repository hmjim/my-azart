<?php get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<div class="content-block clearfix">

		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if ( function_exists( 'bcn_display' ) ) bcn_display(); ?>
		</div>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<h1>Играть в автомат <?php the_title(); ?> бесплатно</h1>

			<div class="casino-main-rate"><span>Рейтинг</span><?php if ( function_exists( 'kk_star_ratings' ) ) echo kk_star_ratings(); ?></div>

			<?php if ( get_field( 'seo_text' ) ) echo get_field( 'seo_text' ); ?>

			<div class="main-game">
				<div class="main-game-frame">
					<iframe src="<?php the_field( 'iframe' ); ?>" width="100%" height="477"></iframe>
				</div>
				<a href="<?php if ( get_field( 'home_link' ) ) : echo get_field( 'home_link' ); else : echo get_field( 'game_default_link', 'options' ); endif; ?>" class="btn-main" title="Игровой автомат <?php the_title(); ?> на реальные деньги">Играть на реальные деньги</a>
			</div>

			<?php the_content(); ?>

		<?php endwhile; ?>

	</div>

	<h2 class="main-heading"><span>рекомендуем</span></h2>

	<div class="casino-items">
		<div class="row">
			<?php
				$exclude   = array();
				$exclude[] = get_the_id();
				$args = array(
					'numberposts'  => 3,
					'fields'       => 'ids',
					'post_type'    => 'post',
					'post__not_in' => $exclude
				);
				$rnd_posts_ids = get_posts($args);
				$rnd_posts     = array_rand($rnd_posts_ids, 3);
			?>

			<?php foreach ( $rnd_posts as $post_index ) : ?>
				<?php
					$id   = (int)$rnd_posts_ids[$post_index];
					$post = get_post($id);
					setup_postdata( $post );
				?>
				<?php echo get_template_part( 'templates/content', 'item' ); ?>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>