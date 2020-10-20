<?php get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if ( function_exists( 'bcn_display' ) ) bcn_display(); ?>
	</div>

	<?php $cat_title = get_field( 'cat_title', get_queried_object() ) ? get_field( 'cat_title', get_queried_object() ) : get_queried_object()->name; ?>

	<h1 class="cat-heading"><?php echo $cat_title; ?></h1>

	<?php if ( get_field( 'seo_text', get_queried_object() ) ) echo get_field( 'seo_text', get_queried_object() ); ?>

	<div class="casino-items">
		<div class="row">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php echo get_template_part( 'templates/content', 'item' ); ?>
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

	<?php if ( !$description == null && !is_paged() ) : ?>
		<div class="content-block">
			<?php echo $description; ?>
		</div>
	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>