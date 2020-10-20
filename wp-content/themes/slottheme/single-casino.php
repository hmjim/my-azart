<?php get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if(function_exists('bcn_display')) { bcn_display(); }?>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="o_casino_header">
			<div class="row">
				<div class="col-md-4 col-12">
					<div class="o_casino_header-left">
						<?php
						$thumb       = get_post_thumbnail_id();
						$thumb_data  = get_post( $thumb );
						?>
						<img src="<?php echo kama_thumb_src( 'w=250 &h=200 &allow=any', $thumb ); ?>" title="<?php echo $thumb_data->post_title; ?>" alt="<?php echo get_post_meta( $thumb, '_wp_attachment_image_alt', true ); ?>">
					</div>
				</div>
				<div class="col-md-8 col-12">
					<div class="o_casino_header-right">
						<h1 class="o_casino_header-title">Обзор онлайн казино <?php the_title(); ?> <span class="o_casino_header-rating"><?php the_field( 'c_rating' ); ?></span></h1>
						<div class="o_casino_header-rate"><?php if ( function_exists( 'kk_star_ratings' ) ) echo kk_star_ratings(); ?></div>
						<div class="o_casino_header-link"><a href="<?php the_field( 'c_link', $pid); ?>" class="btn-casino">Играть в казино</a></div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-block">

		<?php if ( get_field( 'c_plus' ) ) : ?>
		<div class="o_casino_features">
			<div class="row">
				<div class="col-sm-6 col-12">
					<div class="o_casino_feature plus">
						<div class="o_casino_feature-title"><span>Плюсы казино</span></div>
						<div class="o_casino_feature-items">
							<ul>
								<?php foreach ( get_field( 'c_plus' ) as $item ): ?>
									<li><?php echo $item['plus']; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<div class="o_casino_feature minus">
						<div class="o_casino_feature-title"><span>Минусы казино</span></div>
						<div class="o_casino_feature-items">
							<ul>
								<?php foreach ( get_field( 'c_minus' ) as $item ): ?>
									<li><?php echo $item['minus']; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if ( get_field( 'c_developers', get_the_ID() ) ) : ?>
		<div class="o_casino_developers">
			<div class="o_casino_sect-heading">Поставщики игр</div>
			<ul>
			<?php $devs = get_field( 'c_developers', get_the_ID() ); ?>
			<?php foreach ( $devs as $key => $value ) : ?>
				<li><?php echo $value; ?></li>
			<?php endforeach; ?>
			</ul>
		</div>
		<?php endif; ?>

		<?php if ( get_field( 'c_bonuses', get_the_ID() ) ) : ?>
		<div class="o_casino_bonuses">
			<div class="o_casino_sect-heading">Бонусы</div>
			<?php $bonuses = get_field( 'c_bonuses', get_the_ID() ); ?>
			<?php foreach ($bonuses as $key => $value) : ?>
				<div class="o_casino_bonus">
					<div class="row">
						<div class="col-md-7 col-12">
							<div class="o_casino_bonus-left">
								<div class="o_casino_bonus-heading"><i class="fa fa-gift"></i> <?php echo $value['heading']; ?></div>
								<div class="o_casino_bonus-details">
									<ul>
									<?php foreach ( $value['details'] as $bonuskey => $bonusvalue ) : ?>
										<li>
											<span class='o_casino_bonus-logo'><?php echo $bonusvalue['logo']; ?></span>
											<span class='o_casino_bonus-title'><?php echo $bonusvalue['title']; ?></span>
											<?php if ( $bonusvalue['value'] ) : ?>
												<span class='o_casino_bonus-value'><?php echo $bonusvalue['value']; ?></span>
											<?php endif; ?>
										</li>
									<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-12">
							<div class="o_casino_bonus-right">
								<a href="<?php the_field( 'c_link' ); ?>" class="o_casino_bonus-btn">Получить бонус</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>

		<?php if ( get_field( 'c_pays', get_the_ID() ) ) : ?>
		<div class="o_casino_pays">
			<div class="o_casino_sect-heading">Методы ввода и вывода денег</div>
			<div class="o_casino_pays-items">
				<?php $pays = get_field( 'c_pays', get_the_ID() ); ?>
				<?php foreach ( $pays as $payskey => $paysvalue ) : ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pays/<?php echo $paysvalue['value']; ?>" alt="<?php echo $paysvalue['label']; ?>" title="<?php echo $paysvalue['label']; ?>">
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>

		<a href="<?php the_field( 'c_link' ); ?>" class="btn-main">Играть в казино</a>

		<div class="post-content">
			<?php the_content(); ?>
		</div>

		<a href="<?php the_field( 'c_link' ); ?>" class="btn-main">Играть в казино</a>
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>