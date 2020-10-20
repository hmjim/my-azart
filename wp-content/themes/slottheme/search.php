<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<h1 class="cat-heading"><?php printf('Поиск по строке: <span class="search-string">%s</span>', get_search_query()); ?></h1>

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

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


