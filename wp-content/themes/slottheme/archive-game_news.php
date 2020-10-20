<?php get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<div class="content-block">

		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if ( function_exists( 'bcn_display' ) ) bcn_display(); ?>
		</div>

		<h1 class="mb20">Новости</h1>

		<?php if (have_posts()) : ?>
			<div class="archive-news-items">
				<?php while (have_posts()) : the_post(); ?>
					<div class="archive-news-item">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-12 col-12 news-img">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo kama_thumb_src("w=500 &h=275 &allow=any") ?>" title=""></a>
							</div>
							<div class="col-lg-8 col-md-6 col-sm-12 col-12">
								<a class="archive-news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="archive-news-descr"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endwhile; ?>
			</div>
		<?php else: echo '<div class="row"><div class="col-12"><h2>Нет записей.</h2></div></div>'; endif; ?>

		<div class="pagination">
			<?php pagination(); ?>
		</div>

	</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>