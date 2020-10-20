<?php
/*
Template Name: Рейтинг казино
*/
?>
<?php get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<h1 class="main-heading">Лучшие онлайн казино на деньги с бонусами</h1>

	<?php if ( get_field( 'top_casino' ) ) : ?>
	<table class="rating-table">
		<tr>
			<th class="tbl_number">№</th>
			<th>Онлайн казино</th>
			<th>Методы выплаты</th>
			<th>Поставщики игр</th>
			<th>Бонусы</th>
			<th>Рейтинг</th>
			<th>Действие</th>
		</tr>

			<?php
			$i = 1;
			foreach ( get_field( 'top_casino' ) as $casino ): ?>
				<tr>
					<td class="tbl_number">
						<span class="tbl_number_count <?php if ( $i < 4 ) echo 'tbl_number_img-'.$i; ?>"><?php if ( $i < 10 ) echo '0'; echo $i; ?></span>
					</td>
					<td class="tbl_img">
						<a href="<?php echo get_post_permalink( $casino['item'] ); ?>">
							<?php
							$thumb        = get_post( get_post_thumbnail_id( $casino['item'] ) );
							$thumb_title  = $thumb->post_title;
							$thumb_alt    = get_post_meta( $thumb->ID, '_wp_attachment_image_alt', true );
							?>
							<img src="<?php echo kama_thumb_src( 'w=200 &h=140 &allow=any', $thumb->guid ); ?>" title="<?php echo $thumb_title; ?>" alt="<?php echo $thumb_alt; ?>">
						</a>
					</td>
					<td class="tbl_payments">
						<div class="tbl_payments_items">
							<?php $pays = get_field( 'c_pays', $casino['item'] ); ?>
							<?php foreach ( $pays as $payskey => $paysvalue ) : ?>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pays/<?php echo $paysvalue['value']; ?>" alt="<?php echo $paysvalue['label']; ?>" title="<?php echo $paysvalue['label']; ?>">
							<?php endforeach; ?>
						</div>
					</td>
					<td class="tbl_developers">
						<ul>
						<?php $devs = get_field( 'c_developers', $casino['item'] ); ?>
						<?php foreach ( $devs as $key => $value ) : ?>
							<li><?php echo $value; ?></li>
						<?php endforeach; ?>
						</ul>
						<?php if ( count( $devs ) > 6 ) : ?>
							<a href="#" class="tbl_developers_more">Показать еще</a>
						<?php endif; ?>
					</td>
					<td class="tbl_bonuses">
						<?php $bonuses = get_field( 'c_bonuses', $casino['item'] ); ?>
						<?php foreach ($bonuses as $key => $value) : ?>
							<div class="tbl_bonus">
								<i class="fa fa-gift"></i>
								<span class="tbl_bonus_heading"><?php echo $value['heading']; ?></span>
								<div class="tbl_bonus_details">
									<span class="tbl_bonus_details-link">Условия бонуса</span>
									<ul class="tbl_bonus_details-tooltip">
									<?php foreach ( $value['details'] as $bonuskey => $bonusvalue ) : ?>
										<li>
											<span class='tbl_bonuses_logo'><?php echo $bonusvalue['logo']; ?></span>
											<span class='tbl_bonuses_title'><?php echo $bonusvalue['title']; ?></span>
											<?php if ( $bonusvalue['value'] ) : ?>
												<span class='tbl_bonuses_value'><?php echo $bonusvalue['value']; ?></span>
											<?php endif; ?>
										</li>
									<?php endforeach; ?>
									</ul>
								</div>
							</div>
						<?php endforeach; ?>
					</td>
					<td class="tbl_rating">
						<span><?php the_field( 'c_rating', $casino['item'] ); ?></span>
					</td>
					<td class="tbl_btns">
						<div class="tbl_btns_wr">
							<a class="tbl_btn-review" href="<?php echo get_post_permalink( $casino['item'] ); ?>" title="Читать обзор на казино">Обзор</a>
							<a class="tbl_btn-play" href="<?php the_field( 'c_link', $casino['item']); ?>" title="Играть в казино на деньги" target="_blank">Играть</a>
						</div>
					</td>
				</tr>
			<?php $i++; endforeach; ?>
	</table>
	<?php else : ?>
	<p>Доступных казино нет</p>
	<?php endif; ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<div class="content-block post-content">
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>