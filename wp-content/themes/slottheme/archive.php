<?php get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if ( function_exists( 'bcn_display' ) ) bcn_display(); ?>
	</div>

	<h1 class="cat-heading"><?php echo single_term_title(); ?></h1>

	<div class="casino-items">
		<div class="row">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<div class="col-md-4 col-sm-6 col-12 casino-item-wr">
						<div class="casino-item">
							<div class="casino-icon">
								<img src="<?php echo kama_thumb_src("w=203 &h=136 &allow=any"); ?>" title="Игровой автомат <?php the_title(); ?> онлайн" alt="">
								<div class="casino-btns">
									<a href="<?php the_permalink(); ?>" class="casino-btn-1" title="Играть в <?php the_title(); ?> бесплатно">Бесплатно</a>
									<a href="<?php the_field( 'home_link' ); ?>" class="casino-btn-2" title="Играть в <?php the_title(); ?> на деньги"><i class="casino-btn-icon"></i> На деньги</a>
								</div>
							</div>
							<div class="casino-name"><?php the_title(); ?></div>
							<div class="casino-rate">
								<span class="casino-rate-text">Рейтинг</span>
								<div class="stars clearfix"><?php if ( function_exists( 'kk_star_ratings' ) ) echo kk_star_ratings(); ?></div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<div class="col-12">
					<h2>Нет записей.</h2>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<div class="pagination">
		<?php pagination(); ?>
	</div>

	<?php $description = term_description(); ?>

	<?php if ( !$description == null ) : ?>
		<div class="content-block">
			<?php echo $description; ?>
		</div>
	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>