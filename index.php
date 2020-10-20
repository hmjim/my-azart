<?php

function is_actual() {
	$actual_domain = [
		'my-azartik.ew.r.appspot.com'
	]; // Тут пишем актуальный домен(ы)
	$current_domain =  str_replace('www.', '', $_SERVER['HTTP_HOST']);
	return in_array($current_domain, $actual_domain);
}

if(is_actual())  {
	require_once("script_smartwall/smartwall.php");
$smart_config_file = __DIR__ . '/script_smartwall/config.php';
$configRed = include $smart_config_file;
$smartwall=new smartwall("");
if(isset($_GET["need_update_now"]))
    $smartwall->needUpdateNow($configRed);

$smartwall->work($configRed);
}


/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Если неактуальный домен - подгружаем редиректы */ 
if(!is_actual()) require( 'dof.php' );

require( dirname( __FILE__ ) . '/wp-access-check.php' );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
