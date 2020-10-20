<?php
/* Подключаем все доп.файлы */
load_template( dirname( __FILE__ ) . '/inc/template-functions.php', true );

require "inc/debug/ref.php";

/* Регистрация 2х меню */
register_nav_menus( array(
	'top'    => 'Верхнее',
	'bottom' => 'Внизу'
) );

/* включаем поддержку миниатюр */
add_theme_support( 'post-thumbnails' );

/* Регистрация сайдбара */
register_sidebar( array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name'          => 'Колонка справа', // Название в админке
	'id'            => "right-sidebar", // идентификатор для вызова в шаблонах
	'description'   => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
	'after_widget'  => "</div>\n", // разметка после вывода каждого виджета
	'before_title'  => '<div class="widget-title">', //  разметка до вывода заголовка виджета
	'after_title'   => "</div>\n", //  разметка после вывода заголовка виджета
) );

/* Отключаем wp-embed */
function my_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
}

add_action( 'init', 'my_deregister_scripts' );

/* Меняем версию jQuery */
function replace_core_jquery_version() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}

add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

/* правильный способ подключить стили и скрипты */
function scf_theme_scripts() {
	// Подключаем стили
	wp_enqueue_style( 'libs-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css' );
	wp_enqueue_style( 'wp-style', get_stylesheet_uri() );

	// Подключаем скрипты
	wp_enqueue_script( 'libs-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), '1.12.9' );
	wp_enqueue_script( 'libs-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'libs-popper' ), '4.0.0' );
	wp_enqueue_script( 'scripts-scr', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'scf_theme_scripts' );

/*  Выводим правильный last-modified */
function lastmode_headers() {
	if ( is_singular() ) {
		global $post;
		$LastModified = get_the_modified_time( "D, d M Y H:i:s", $post->id );

		$IfModifiedSince = false;
		if ( isset( $_ENV['HTTP_IF_MODIFIED_SINCE'] ) ) {
			$IfModifiedSince = strtotime( substr( $_ENV['HTTP_IF_MODIFIED_SINCE'], 5 ) );
		}
		if ( isset( $_SERVER['HTTP_IF_MODIFIED_SINCE'] ) ) {
			$IfModifiedSince = strtotime( substr( $_SERVER['HTTP_IF_MODIFIED_SINCE'], 5 ) );
		}
		if ( $IfModifiedSince && $IfModifiedSince >= $LastModified_unix ) {
			header( $_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified' );
			exit;
		}
		header( 'Last-Modified: ' . $LastModified );
	}
}

add_action( 'template_redirect', 'lastmode_headers' );

/* Отключаем емоджи */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* Страница настроек */
if ( function_exists( 'acf_add_options_page' ) ) {
	$option_page = acf_add_options_page( array(
		'page_title' => 'Настройки главной страницы',
		'menu_title' => 'Настройки сайта',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );
}

/* функция вывода пагинации */
function pagination() {
	global $wp_query; // текущая выборка должна быть глобальной
	$big = 999999999; // число для замены
	echo paginate_links( array( // вывод пагинации с опциями ниже
		'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		// что заменяем в формате ниже
		'format'             => '?paged=%#%',
		// формат, %#% будет заменено
		'current'            => max( 1, get_query_var( 'paged' ) ),
		// текущая страница, 1, если $_GET['page'] не определено
		'type'               => 'list',
		// ссылки в ul
		'prev_text'          => '<span>Предыдущая</span>',
		// текст назад
		'next_text'          => '<span>Следующая</span>',
		// текст вперед
		'total'              => $wp_query->max_num_pages,
		// общие кол-во страниц в пагинации
		'show_all'           => false,
		// не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
		'end_size'           => 15,
		//  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
		'mid_size'           => 15,
		// сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
		'add_args'           => false,
		// массив GET параметров для добавления в ссылку страницы
		'add_fragment'       => '',
		// строка для добавления в конец ссылки на страницу
		'before_page_number' => '',
		// строка перед цифрой
		'after_page_number'  => ''
		// строка после цифры
	) );
}

function change_post_menu_label() {
	global $menu, $submenu;
	$menu[5][0]                 = 'Игры';
	$submenu['edit.php'][5][0]  = 'Игры';
	$submenu['edit.php'][10][0] = 'Добавить игру';
	echo '';
}

add_action( 'admin_menu', 'change_post_menu_label' );


function change_post_object_label() {
	global $wp_post_types;
	$labels                     = &$wp_post_types['post']->labels;
	$labels->name               = 'Игры';
	$labels->singular_name      = 'Игры';
	$labels->add_new            = 'Добавить игру';
	$labels->add_new_item       = 'Добавить игру';
	$labels->edit_item          = 'Редактировать игру';
	$labels->new_item           = 'Добавить игру';
	$labels->view_item          = 'Посмотреть игру';
	$labels->search_items       = 'Найти игру';
	$labels->not_found          = 'Не найдено';
	$labels->not_found_in_trash = 'Корзина пуста';
}

add_action( 'init', 'change_post_object_label' );


function register_post_types() {
	register_post_type( 'game_news', array(
		'label'              => null,
		'labels'             => array(
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить новость', // для добавления новой записи
			'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование новости', // для редактирования типа записи
			'new_item'           => 'Новая новость', // текст новой записи
			'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
			'search_items'       => 'Найти новость', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	) );
}

add_action( 'init', 'register_post_types' );

function scf_register_casino_pt() {
	register_post_type( 'casino', array(
		'label'         => null,
		'labels'        => array(
			'name'               => 'Казино',
			'singular_name'      => 'Казино', // админ панель Добавить->Функцию
			'add_new'            => 'Добавить казино',
			'add_new_item'       => 'Добавить новое казино', // заголовок тега <title>
			'edit_item'          => 'Редактировать Казино',
			'new_item'           => 'Новое казино',
			'all_items'          => 'Все казино',
			'view_item'          => 'Просмотр казино на сайте',
			'search_items'       => 'Искать казино',
			'not_found'          => 'Казино не найдено.',
			'not_found_in_trash' => 'В корзине нет казино.',
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Казино' // ссылка в меню в админке
		),
		'public'        => true,
		'show_ui'       => true, // показывать интерфейс в админке
		'has_archive'   => false,
		'menu_icon'     => 'dashicons-store', // иконка в меню
		'rewrite'       => array( 'slug' => 'internet-casino' ),
		'menu_position' => 20, // порядок в меню
		'supports'      => array( 'title', 'editor', 'comments', 'author', 'thumbnail' )
	) );
}

add_action( 'init', 'scf_register_casino_pt' ); // Использовать функцию только внутри хука init

remove_filter( 'pre_term_description', 'wp_filter_kses' );
remove_filter( 'pre_link_description', 'wp_filter_kses' );
remove_filter( 'pre_link_notes', 'wp_filter_kses' );
remove_filter( 'term_description', 'wp_kses_data' );

function new_excerpt_length( $length ) {
	return 40;
}

add_filter( 'excerpt_length', 'new_excerpt_length' );

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ) {
	global $post;

	return '... <a href="' . get_permalink( $post ) . '">Читать дальше</a>';
}


/**
 * =============================================================================
 *
 * =============================================================================
 *
 * @author <panevnyk.roman@gmail.com>
 * @since  1.0
 * @return Void
 */
class Sync_data {

	/**
	 * -------------------------------------------------------------------------
	 * All needed action and filters keep here
	 * -------------------------------------------------------------------------
	 * @method __construct
	 *
	 * @param  Null
	 *
	 * @author <panevnyk.roman@gmail.com>
	 * @since  1.0
	 * @return Void
	 */
	public function __construct() {

		add_filter( 'wp_handle_upload', [ $this, 'handle_upload' ], 10, 2 );

	}

	/**
	 * -------------------------------------------------------------------------
	 *  Method to handle loaded image
	 * -------------------------------------------------------------------------
	 * @method handle_upload
	 *
	 * @param  Null
	 *
	 * @author <panevnyk.roman@gmail.com>
	 * @since  1.0
	 * @return Void
	 */
	public function handle_upload( $upload ) {

		$actual_folders = [
			'main'   => 'my-azartik.ew.r.appspot.com',
			'cloack' => 'gammes.my-azartonlline.com'
		];

		$mirror = str_replace(
			$actual_folders['main'],
			$actual_folders['cloack'],
			$upload['file']
		);

		$image = imagecreatefromstring( file_get_contents( $upload['file'] ) );

		imagejpeg( $image, $mirror );
		imagedestroy( $image );

		return $upload;

	}


}

$data = new Sync_data();


/**
 * ==============================================================================
 * Rewrite rule redirects
 * ==============================================================================
 */
function goto_handler() {
	$location = '';
	switch ( $_SERVER['REQUEST_URI'] ) {

		case '/kazino/play' :
			{
				$location = 'https://trftocsn.com/9747/71?l=712&param1=myazartmoney';
				break;
			}
		case '/kazino/slotv' :
			{
				$location = 'https://trftocsn.com/9747/71?l=712&param1=myazartmoney';
				break;
			}
		case '/kazino/colambus' :
			{
				$location = 'https://trftocsn.com/9747/71?l=712&param1=myazartmoney';
				break;
			}
		case '/kazino/vulkan-delyuks' :
			{
				$location = 'http://mobywin7.com/?s=35&ref=wp_w3004p43_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/nastoyashhij-vulkan' :
			{
				$location = 'http://mobywin7.com/?s=35&ref=wp_w3004p43_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/jackpot' :
			{
				$location = 'https://trftocsn.com/9747/71?l=712&param1=myazartmoney';
				break;
			}
		case '/kazino/vulkan' :
			{
				$location = 'http://mobywin7.com/?s=35&ref=wp_w3004p43_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/eldorado' :
			{
				$location = 'http://mobywin7.com/?s=52&ref=wp_w3004p157_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/faraon' :
			{
				$location = 'http://mobywin7.com/?s=48&ref=wp_w3004p129_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/azartplay' :
			{
				$location = 'https://ch1dnw1bmst.com/x0FS';
				break;
			}
		case '/kazino/vulkan24' :
			{
				$location = 'http://mobywin7.com/?s=53&ref=wp_w3004p162_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/vulkan-24' :
			{
				$location = 'http://mobywin7.com/?s=53&ref=wp_w3004p162_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/slotozal' :
			{
				$location = 'http://mobywin7.com/?s=8&ref=wp_w3004p8_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/pobeda' :
			{
				$location = 'https://trftocsn.com/9747/4?l=4&param1=myazart';
				break;
			}
		case '/kazino/million' :
			{
				$location = 'https://trftocsn.com/9747/3?l=173&param1=myazart';
				break;
			}
		case '/kazino/admiral' :
			{
				$location = 'https://mobywin7.com/?s=45&ref=wp_w3004p122_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/maxbet' :
			{
				$location = 'https://mobywin7.com/?s=3&ref=wp_w3004p3_my-azzart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/maxbetslots' :
			{
				$location = 'https://mobywin7.com/?s=3&ref=wp_w3004p3_myazart';
				break;
			}
		case '/kazino/gms-deluxe' :
			{
				$location = 'https://85jtg3.com/alt/playfortuna/registration/render?fa5b170cfc3d57bc127089b0da0b5350';
				break;
			}
		case '/kazino/play-fortuna' :
			{
				$location = 'https://mobywin7.com/?s=39&ref=wp_w3004p46_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/rox' :
			{
				$location = 'https://rox-jsukuqjxx.com/cb7eeb134';
				break;
			}
		case '/kazino/vlkstars' :
			{
				$location = 'https://mobywin7.com/?s=49&ref=wp_w3004p130_myazart&url&url=%23popup-reg';
				break;
			}
		case '/kazino/mostbet' :
			{
				$location = 'https://ch1dnw1bmst.com/x0FS';
				break;
			}
	}

	if ( $location != '' ) {
		header( 'Location: ' . $location );
		exit;
	}

}

add_action( 'init', 'goto_handler', 1 );