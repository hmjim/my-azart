<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
get_header(); // Подключаем header.php ?>
<div class="col-lg-9 col-sm-12 col-12 main">
<h1>Ой, это 404!</h1>
<br>
<p>К сожалению, данная страница не найдена. Извините!</p>
</div>
<?php get_sidebar(); // подключаем sidebar.php ?>
<?php get_footer(); // подключаем footer.php ?>