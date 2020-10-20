<div class="col-xl-4 col-sm-6 col-12">
	<div class="casino-item">
		<a href="<?php the_permalink(); ?>" class="casino-icon">
			<img src="<?php echo kama_thumb_src("w=220 &h=129"); ?>" title="Игровой автомат <?php the_title(); ?> онлайн" alt="Игровой автомат <?php the_title(); ?>">
		</a>
		<div class="casino-name"><?php the_title(); ?></div>
		<div class="casino-rate">
			<span class="casino-rate-text">Рейтинг</span>
			<div class="stars clearfix"><?php if ( function_exists( 'kk_star_ratings' ) ) echo kk_star_ratings(); ?></div>
		</div>
		<div class="casino-btns">
			<a href="<?php the_permalink(); ?>" class="casino-btn-1" title="Играть в <?php the_title(); ?> без регистрации">Бесплатно</a>
			<a href="<?php if ( get_field( 'home_link' ) ) : echo get_field( 'home_link' ); else : echo get_field( 'game_default_link', 'options' ); endif; ?>" class="casino-btn-2" title="Играть в <?php the_title(); ?> на реальные деньги" target="_blank">На деньги</a>
		</div>
	</div>
</div>