<?php get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<?php
	if ( is_front_page() && get_field('main_heading', 'options') ) :
		$title = get_field('main_heading', 'options');
	elseif ( is_front_page() ) :
		$title = 'Игровые автоматы';
	else :
		$title = get_the_title();
	endif;
	?>

	<h1 class="main-heading"><?php echo $title; ?></h1>

	<?php
	// echo  get_option('kksr_stars_gray');
		$domain = get_site_url();
		$domain = str_replace('https://', '', $domain);
		if ( is_front_page() ) echo '<p>'.wp_strip_all_tags(get_field('main_heading_text', 'options')).' '.$domain.'</p>';
	?>

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

	<div class="content-block">
	<?php if ( !is_paged() ) the_field('main_text', 'option'); ?>
	</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>