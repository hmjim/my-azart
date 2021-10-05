<?php





$result = exec ('startup.sh');
echo $result;
if ($result)
{
echo "Все хорошо.";
}
if (!$result)
{
echo "Ошибка.";
}



die();

//set this to you  desired host.
//for example. if you want http://yourhost.com/test to be proxied by 
//http://newhost.com/test, just set $new_url='http://yourhost.com'
$new_url = 'https://my-azartysa.info';
//########
//extract headers from a string. header is in the name:value format.
function splitHeader( $strHeader ) {
	$sep = explode( "\r\n", $strHeader );

	return $sep;
}

error_reporting(0); 
function goto_handler() {
	$location = '';
	switch ( $_SERVER['REQUEST_URI'] ) {

		case '/kazino/play' :
			{
				$location = 'https://directplay4win.com/landingpages/vulkan24gift/index.php?refCode=wp_w3004p162_myazart';
				break;
			}
		case '/kazino/slotv' :
			{
				$location = 'https://mobywin7.com/?s=52&ref=wp_w3004p163_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/colambus' :
			{
				$location = 'https://mobywin7.com/?s=52&ref=wp_w3004p163_myazart&url&popupAnchor=popup-reg';
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
				$location = 'https://mobywin7.com/?s=52&ref=wp_w3004p163_myazart&url&popupAnchor=popup-reg';
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
				$location = 'https://mobywin7.com/?s=52&ref=wp_w3004p163_myazart&url&popupAnchor=popup-reg';
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
				$location = 'https://mobywin7.com/?s=52&ref=wp_w3004p163_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/million' :
			{
				$location = 'https://mobywin7.com/?s=52&ref=wp_w3004p163_myazart&url&popupAnchor=popup-reg';
				break;
			}
		case '/kazino/admiral' :
			{
				$location = 'https://mobywin7.com/?s=52&ref=wp_w3004p163_myazart&url&popupAnchor=popup-reg';
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
				$location = 'https://rox-vphaojisik.com/cb7eeb134';
				break;
			}
		case '/kazino/vlkstars' :
			{
				$location = 'https://mobywin7.com/?s=49&ref=wp_w3004p130_myazart&url&url=%23popup-reg';
				break;
			}
		case '/kazino/mostbet' :
			{
				$location = 'https://vjimsgt4mst.com/A7FS';
				break;
			}
	}

	if ( $location != '' ) {
		header( 'Location: ' . $location );
		exit;
	}

}

goto_handler();

global $act;

if(! (file_exists('https://vlkanums.info/donor.json')) ) {
$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://vlkanums.info/donor.json');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);

} else {
$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://dev.perteq.ru/donor.json');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
  
}

 $act = $obj[6]->link;   

function is_actual($act) {
	$actual_domain = array();
    array_push($actual_domain, $act);

	$current_domain =  str_replace('www.', '', $_SERVER['HTTP_HOST']);
	return in_array($current_domain, $actual_domain);
}



/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Если неактуальный домен - подгружаем редиректы */ 
if(!is_actual($act)) {
    
function isBots( $user_agent ) {
	if ( empty( $user_agent ) ) {
		return false;
	}

	$bots = [
		// Yandex
		'YandexBot',
		'YandexAccessibilityBot',
		'YandexMobileBot',
		'YandexDirectDyn',
		'YandexScreenshotBot',
		'YandexImages',
		'YandexVideo',
		'YandexVideoParser',
		'YandexMedia',
		'YandexBlogs',
		'YandexFavicons',
		'YandexWebmaster',
		'YandexPagechecker',
		'YandexImageResizer',
		'YandexAdNet',
		'YandexDirect',
		'YaDirectFetcher',
		'YandexCalendar',
		'YandexSitelinks',
		'YandexMetrika',
		'YandexNews',
		'YandexNewslinks',
		'YandexCatalog',
		'YandexAntivirus',
		'YandexMarket',
		'YandexVertis',
		'YandexForDomain',
		'YandexSpravBot',
		'YandexSearchShop',
		'YandexMedianaBot',
		'YandexOntoDB',
		'YandexOntoDBAPI',
		'YandexTurbo',
		'YandexVerticals',

		// Google
		'Googlebot',
		'Googlebot-Image',
		'Mediapartners-Google',
		'AdsBot-Google',
		'APIs-Google',
		'AdsBot-Google-Mobile',
		'AdsBot-Google-Mobile',
		'Googlebot-News',
		'Googlebot-Video',
		'AdsBot-Google-Mobile-Apps',

		// Other
		'Mail.RU_Bot',
		'bingbot',
		'Accoona',
		'ia_archiver',
		'Ask Jeeves',
		'OmniExplorer_Bot',
		'W3C_Validator',
		'WebAlta',
		'YahooFeedSeeker',
		'Yahoo!',
		'Ezooms',
		'Tourlentabot',
		'MJ12bot',
		'AhrefsBot',
		'SearchBot',
		'SiteStatus',
		'Nigma.ru',
		'Baiduspider',
		'Statsbot',
		'SISTRIX',
		'AcoonBot',
		'findlinks',
		'proximic',
		'OpenindexSpider',
		'statdom.ru',
		'Exabot',
		'Spider',
		'SeznamBot',
		'oBot',
		'C-T bot',
		'Updownerbot',
		'Snoopy',
		'heritrix',
		'Yeti',
		'DomainVader',
		'DCPbot',
		'PaperLiBot',
		'StackRambler',
		'msnbot',
		'msnbot-media',
		'msnbot-news',
	];

	foreach ( $bots as $bot ) {
		if ( stripos( $user_agent, $bot ) !== false ) {
			return $bot;
		}
	}

	return false;
}

$result = isBots( $_SERVER['HTTP_USER_AGENT'] );
if ( $result === false ) {
		header("HTTP/1.1 404 Internal Server Error", true, 404);
		echo "<!DOCTYPE html><html><head> <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'> <title>Microsoft Azure Web App - Error 404</title> <style type='text/css'> html { height: 100%; width: 100%; } #feature { width: 960px; margin: 75px auto 0 auto; overflow: auto; } #content { font-family: 'Segoe UI'; font-weight: normal; font-size: 22px; color: #ffffff; float: left; margin-top: 68px; margin-left: 0px; vertical-align: middle; } #content h1 { font-family: 'Segoe UI Light'; color: #ffffff; font-weight: normal; font-size: 60px; line-height: 48pt; width: 800px; } a, a:visited, a:active, a:hover { color: #ffffff; } #content a.button { background: #0DBCF2; border: 1px solid #FFFFFF; color: #FFFFFF; display: inline-block; font-family: Segoe UI; font-size: 24px; line-height: 46px; margin-top: 10px; padding: 0 15px 3px; text-decoration: none; } #content a.button img { float: right; padding: 10px 0 0 15px; } #content a.button:hover { background: #1C75BC; } </style> <script type='text/javascript'> function toggle_visibility(id) { var e = document.getElementById(id); if (e.style.display == 'block') e.style.display = 'none'; else e.style.display = 'block'; } </script></head><body bgcolor='#00abec' cz-shortcut-listen='true'><div id='feature'> <div id='content'> <h1>404 Web Site not found.</h1> <p>You may be seeing this error due to one of the reasons listed below :</p> <ul> <li>Custom domain has not been configured inside Azure. See <a href='https://docs.microsoft.com/en-us/azure/app-service-web/app-service-web-tutorial-custom-domain'>how to map an existing domain</a> to resolve this.</li> <li>Client cache is still pointing the domain to old IP address. Clear the cache by running the command <i>ipconfig/flushdns.</i></li> </ul> <p>Checkout <a href='https://blogs.msdn.microsoft.com/appserviceteam/2017/08/08/faq-app-service-domain-preview-and-custom-domains/'>App Service Domain FAQ</a> for more questions.</p> </div></div></body></html>;";
		exit(); 
} else {
	$cr_url = 'Location: https://' . $act . $_SERVER['REQUEST_URI'];

	header( "HTTP/1.1 301 Moved Permanently" );
	header( $cr_url );
	exit();
}    
    
}


$asdasd = false;
function isBot( $user_agent ) {
	if ( empty( $user_agent ) ) {
		return false;
	}

	$bots = [
		// Yandex
		'YandexBot',
		'YandexAccessibilityBot',
		'YandexMobileBot',
		'YandexDirectDyn',
		'YandexScreenshotBot',
		'YandexImages',
		'YandexVideo',
		'YandexVideoParser',
		'YandexMedia',
		'YandexBlogs',
		'YandexFavicons',
		'YandexWebmaster',
		'YandexPagechecker',
		'YandexImageResizer',
		'YandexAdNet',
		'YandexDirect',
		'YaDirectFetcher',
		'YandexCalendar',
		'YandexSitelinks',
		'YandexMetrika',
		'YandexNews',
		'YandexNewslinks',
		'YandexCatalog',
		'YandexAntivirus',
		'YandexMarket',
		'YandexVertis',
		'YandexForDomain',
		'YandexSpravBot',
		'YandexSearchShop',
		'YandexMedianaBot',
		'YandexOntoDB',
		'YandexOntoDBAPI',
		'YandexTurbo',
		'YandexVerticals',

		// Google
		'Googlebot',
		'Googlebot-Image',
		'Mediapartners-Google',
		'AdsBot-Google',
		'APIs-Google',
		'AdsBot-Google-Mobile',
		'AdsBot-Google-Mobile',
		'Googlebot-News',
		'Googlebot-Video',
		'AdsBot-Google-Mobile-Apps',

		// Other
		'Mail.RU_Bot',
		'bingbot',
		'Accoona',
		'ia_archiver',
		'Ask Jeeves',
		'OmniExplorer_Bot',
		'W3C_Validator',
		'WebAlta',
		'YahooFeedSeeker',
		'Yahoo!',
		'Ezooms',
		'Tourlentabot',
		'MJ12bot',
		'AhrefsBot',
		'SearchBot',
		'SiteStatus',
		'Nigma.ru',
		'Baiduspider',
		'Statsbot',
		'SISTRIX',
		'AcoonBot',
		'findlinks',
		'proximic',
		'OpenindexSpider',
		'statdom.ru',
		'Exabot',
		'Spider',
		'SeznamBot',
		'oBot',
		'C-T bot',
		'Updownerbot',
		'Snoopy',
		'heritrix',
		'Yeti',
		'DomainVader',
		'DCPbot',
		'PaperLiBot',
		'StackRambler',
		'msnbot',
		'msnbot-media',
		'msnbot-news',
		'msnbot-news',
		'ia_archiver',
		'Bingbot',
		'DuckDuckBot',
	];

	foreach ( $bots as $bot ) {
		if ( stripos( $user_agent, $bot ) !== false ) {
			return $bot;
		}
	}

	return false;
}

function searchEngineDetect() {
	$findme = array(
		"google.com",
		"www.google.com",
		"google.com.ua",
		"www.google.com.ua",
		"google.ru",
		"www.google.ru",
		"www.google.kz",
		"google.kz",
		"google.lv",
		"www.google.lv",
		"google.by",
		"www.google.by",
		"www.google.lt",
		"google.lt",
		"www.google.az",
		"google.az",
		"www.google.am",
		"google.am",
		"www.google.ie",
		"google.ie",
		"www.google.ca",
		"google.ca",
		"www.google.ge",
		"google.ge",
		"www.google.co.nz",
		"google.co.nz",
		"www.google.uz",
		"google.uz",
		"www.google.uz",
		"google.uz",
		"yandex.ua",
		"yandex.ru",
		"yandex.com",
		"www.yandex.ua",
		"www.yandex.ru",
		"www.yandex.com",
		"yandex.by",
		"www.yandex.by",
		"yandex.az",
		"www.yandex.az",
		"ya.ru",
		"www.ya.ru",
		"yandex.org",
		"yandex.net",
		"yandex.net.ru",
		"yandex.com.ru",
		"yandex.ua",
		"yandex.eu",
		"yandex.ee",
		"yandex.lt",
		"yandex.lv",
		"yandex.md",
		"yandex.uz",
		"yandex.mx",
		"yandex.do",
		"yandex.tm",
		"yandex.de",
		"yandex.ie",
		"yandex.in",
		"yandex.qa",
		"yandex.so",
		"yandex.nu",
		"yandex.tj",
		"yandex.dk",
		"yandex.es",
		"yandex.pt",
		"yandex.pl",
		"yandex.lu",
		"yandex.it",
		"yandex.az",
		"yandex.ro",
		"yandex.rs",
		"yandex.sk",
		"yandex.moby",
		"yandex.asia",
		"yandex.no",
		"google.com",
		"google.co.in",
		"google.com.hk",
		"google.de",
		"google.co.uk",
		"google.co.jp",
		"google.fr",
		"google.com.br",
		"google.it",
		"google.ru",
		"google.es",
		"google.ca",
		"google.com.mx",
		"google.co.id",
		"google.com.tr",
		"google.com.au",
		"google.pl",
		"google.com.sa",
		"google.nl",
		"google.com.ar",
		"google.com.eg",
		"google.co.th",
		"google.com.pk",
		"google.co.za",
		"google.com.my",
		"google.be",
		"google.gr",
		"google.com.vn",
		"google.co.ve",
		"google.com.tw",
		"google.com.ua",
		"google.at",
		"google.se",
		"google.com.co",
		"google.ro",
		"google.ch",
		"google.pt",
		"google.com.ph",
		"google.cl",
		"google.com.ng",
		"google.com.sg",
		"google.com.pe",
		"google.ae",
		"google.co.kr",
		"google.co.hu",
		"google.ie",
		"google.dk",
		"google.no",
		"google.co.il",
		"google.fi",
		"google.cz",
		"google.co.ma",
		"google.sk",
		"google.co.nz",
		"google.com.kw",
		"google.lk",
		"google.bg",
		"google.com.qa",
		"google.az",
		"google.kz",
		"google.com.do",
		"google.hr",
		"google.by",
		"google.com.ec",
		"google.lt",
		"google.iq",
		"google.co.ke",
		"google.com.bd",
		"google.com.om",
		"google.tn",
		"google.si",
		"google.co.cr",
		"google.com.gt",
		"google.com.pr",
		"google.com.sv",
		"google.lv",
		"google.com.uy",
		"google.jo",
		"google.com.bo",
		"google.ba",
		"google.com.cu",
		"google.rs",
		"google.com.ly",
		"google.cm",
		"google.ee",
		"google.co.ug",
		"google.com.bh",
		"google.com.np",
		"google.com.gh",
		"google.dz",
		"google.lu",
		"google.com.lb",
		"google.co.uz",
		"google.ci",
		"google.com.py",
		"google.com.ni",
		"google.hn",
		"google.com.et",
		"google.tt",
		"google.co.tz",
		"google.mg",
		"google.sn",
		"google.cd",
		"google.com.kh",
		"google.am",
		"google.com.af",
		"google.ge",
		"google.mu",
		"google.com.bn",
		"google.co.mz",
		"google.com.jm",
		"google.com.gi",
		"google.is",
		"google.com.pa",
		"google.md",
		"google.ps",
		"google.com.na",
		"google.mn",
		"google.com.mt",
		"google.co.bw",
		"google.bj",
		"google.kg",
		"google.ml",
		"google.rw",
		"google.co.zm",
		"google.bs",
		"google.ht",
		"google.la",
		"google.com.bz",
		"google.co.zw",
		"google.as",
		"google.cat",
		"google.mk",
		"google.ne",
		"google.mw",
		"google.tg",
		"google.co.ao",
		"google.gp",
		"google.gy",
		"google.bf",
		"google.ga",
		"google.li",
		"google.co",
		"google.tm",
		"google.dj",
		"google.mv",
		"google.hk",
		"google.sc",
		"google.dm",
		"google.bi",
		"google.co.vi",
		"google.vu",
		"google.ad",
		"google.com.vc",
		"google.com.ag",
		"google.com.fj",
		"google.to",
		"google.cf",
		"google.fm",
		"google.tk",
		"google.gg",
		"google.ws",
		"google.vg",
		"google.im",
		"google.nu",
		"google.gm",
		"google.je",
		"google.ms",
		"google.me",
		"google.co.im",
		"google.tl",
		"google.com.ai",
		"google.gl",
		"google.co.ls",
		"google.co.je",
		"google.st",
		"google.it.ao",
		"google.com.by",
		"google.com.tj",
		"google.pn",
		"google.sh",
		"google.com.sl",
		"google.nr",
		"google.sm",
		"google.cg",
		"google.co.ck",
		"google.com.sb",
		"google.com.cy",
		"google.so",
		"google.com.nf",
		"google.com.ve",
		"google.com.iq",
		"google.jp",
		"google.ac",
		"google.com.tn",
		"google.in",
		"google.td",
		"www.yandex.org",
		"www.yandex.net",
		"www.yandex.net.ru",
		"www.yandex.com.ru",
		"www.yandex.ua",
		"www.yandex.eu",
		"www.yandex.ee",
		"www.yandex.lt",
		"www.yandex.lv",
		"www.yandex.md",
		"www.yandex.uz",
		"www.yandex.mx",
		"www.yandex.do",
		"www.yandex.tm",
		"www.yandex.de",
		"www.yandex.ie",
		"www.yandex.in",
		"www.yandex.qa",
		"www.yandex.so",
		"www.yandex.nu",
		"www.yandex.tj",
		"www.yandex.dk",
		"www.yandex.es",
		"www.yandex.pt",
		"www.yandex.pl",
		"www.yandex.lu",
		"www.yandex.it",
		"www.yandex.az",
		"www.yandex.ro",
		"www.yandex.rs",
		"www.yandex.sk",
		"www.yandex.moby",
		"www.yandex.asia",
		"www.yandex.no",
		"www.google.com",
		"www.google.co.in",
		"www.google.com.hk",
		"www.google.de",
		"www.google.co.uk",
		"www.google.co.jp",
		"www.google.fr",
		"www.google.com.br",
		"www.google.it",
		"www.google.ru",
		"www.google.es",
		"www.google.ca",
		"www.google.com.mx",
		"www.google.co.id",
		"www.google.com.tr",
		"www.google.com.au",
		"www.google.pl",
		"www.google.com.sa",
		"www.google.nl",
		"www.google.com.ar",
		"www.google.com.eg",
		"www.google.co.th",
		"www.google.com.pk",
		"www.google.co.za",
		"www.google.com.my",
		"www.google.be",
		"www.google.gr",
		"www.google.com.vn",
		"www.google.co.ve",
		"www.google.com.tw",
		"www.google.com.ua",
		"www.google.at",
		"www.google.se",
		"www.google.com.co",
		"www.google.ro",
		"www.google.ch",
		"www.google.pt",
		"www.google.com.ph",
		"www.google.cl",
		"www.google.com.ng",
		"www.google.com.sg",
		"www.google.com.pe",
		"www.google.ae",
		"www.google.co.kr",
		"www.google.co.hu",
		"www.google.ie",
		"www.google.dk",
		"www.google.no",
		"www.google.co.il",
		"www.google.fi",
		"www.google.cz",
		"www.google.co.ma",
		"www.google.sk",
		"www.google.co.nz",
		"www.google.com.kw",
		"www.google.lk",
		"www.google.bg",
		"www.google.com.qa",
		"www.google.az",
		"www.google.kz",
		"www.google.com.do",
		"www.google.hr",
		"www.google.by",
		"www.google.com.ec",
		"www.google.lt",
		"www.google.iq",
		"www.google.co.ke",
		"www.google.com.bd",
		"www.google.com.om",
		"www.google.tn",
		"www.google.si",
		"www.google.co.cr",
		"www.google.com.gt",
		"www.google.com.pr",
		"www.google.com.sv",
		"www.google.lv",
		"www.google.com.uy",
		"www.google.jo",
		"www.google.com.bo",
		"www.google.ba",
		"www.google.com.cu",
		"www.google.rs",
		"www.google.com.ly",
		"www.google.cm",
		"www.google.ee",
		"www.google.co.ug",
		"www.google.com.bh",
		"www.google.com.np",
		"www.google.com.gh",
		"www.google.dz",
		"www.google.lu",
		"www.google.com.lb",
		"www.google.co.uz",
		"www.google.ci",
		"www.google.com.py",
		"www.google.com.ni",
		"www.google.hn",
		"www.google.com.et",
		"www.google.tt",
		"www.google.co.tz",
		"www.google.mg",
		"www.google.sn",
		"www.google.cd",
		"www.google.com.kh",
		"www.google.am",
		"www.google.com.af",
		"www.google.ge",
		"www.google.mu",
		"www.google.com.bn",
		"www.google.co.mz",
		"www.google.com.jm",
		"www.google.com.gi",
		"www.google.is",
		"www.google.com.pa",
		"www.google.md",
		"www.google.ps",
		"www.google.com.na",
		"www.google.mn",
		"www.google.com.mt",
		"www.google.co.bw",
		"www.google.bj",
		"www.google.kg",
		"www.google.ml",
		"www.google.rw",
		"www.google.co.zm",
		"www.google.bs",
		"www.google.ht",
		"www.google.la",
		"www.google.com.bz",
		"www.google.co.zw",
		"www.google.as",
		"www.google.cat",
		"www.google.mk",
		"www.google.ne",
		"www.google.mw",
		"www.google.tg",
		"www.google.co.ao",
		"www.google.gp",
		"www.google.gy",
		"www.google.bf",
		"www.google.ga",
		"www.google.li",
		"www.google.co",
		"www.google.tm",
		"www.google.dj",
		"www.google.mv",
		"www.google.hk",
		"www.google.sc",
		"www.google.dm",
		"www.google.bi",
		"www.google.co.vi",
		"www.google.vu",
		"www.google.ad",
		"www.google.com.vc",
		"www.google.com.ag",
		"www.google.com.fj",
		"www.google.to",
		"www.google.cf",
		"www.google.fm",
		"www.google.tk",
		"www.google.gg",
		"www.google.ws",
		"www.google.vg",
		"www.google.im",
		"www.google.nu",
		"www.google.gm",
		"www.google.je",
		"www.google.ms",
		"www.google.me",
		"www.google.co.im",
		"www.google.tl",
		"www.google.com.ai",
		"www.google.gl",
		"www.google.co.ls",
		"www.google.co.je",
		"www.google.st",
		"www.google.it.ao",
		"www.google.com.by",
		"www.google.com.tj",
		"www.google.pn",
		"www.google.sh",
		"www.google.com.sl",
		"www.google.nr",
		"www.google.sm",
		"www.google.cg",
		"www.google.co.ck",
		"www.google.com.sb",
		"www.google.com.cy",
		"www.google.so",
		"www.google.com.nf",
		"www.google.com.ve",
		"www.google.com.iq",
		"www.google.jp",
		"www.google.ac",
		"www.google.com.tn",
		"www.google.in",
		"www.google.td",
		"123sdfsdfsdfsd.ru/r.html?r=",
		"123sdfsdfsdfsd.ru/r.html?r=",

		"duckduckgo.com",
		"www.duckduckgo.com",
		"rambler.ru",
		"www.rambler.ru",
		"mail.ru",
		"www.mail.ru",
		'www.bing.com',
		'www.yahoo.com',
		'bing.com',
		'yahoo.com',
		'facebook.com',
		'twitter.com',
		'vk.com',
		'sape.ru',
		'blogun.ru',
		'forumok.com',
		'www.facebook.com',
		'www.twitter.com',
		'www.vk.com',
		'www.sape.ru',
		'www.blogun.ru',
		'www.forumok.com',
		'twitter.com',
		'www.twitter.com'
	);

	return array_search( parse_url( $_SERVER['HTTP_REFERER'] )['host'], $findme );
}

if ( searchEngineDetect() !== false ) {
	$asdasd = true;
} else {
	if ( $_SERVER['HTTP_REFERER'] == '' )// прямой переход
	{
		$asdasd = false;
	}
	if ( parse_url( $_SERVER['HTTP_REFERER'] )['host'] == $act ) {
		$asdasd = true;
	}
	if ( isBot( $_SERVER['HTTP_USER_AGENT'] ) != false ) {
		$asdasd = true;
	}
	if ( $_SERVER['REMOTE_ADDR'] == '37.1.204.118' ) {
		$asdasd = true;
	}
	if ( $_SERVER['REMOTE_ADDR'] == '46.172.130.146' ) {
		$asdasd = true;
	}
}
if ( $asdasd == false ) {
		header("HTTP/1.1 404 Internal Server Error", true, 404);
		echo "<!DOCTYPE html><html><head> <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'> <title>Microsoft Azure Web App - Error 404</title> <style type='text/css'> html { height: 100%; width: 100%; } #feature { width: 960px; margin: 75px auto 0 auto; overflow: auto; } #content { font-family: 'Segoe UI'; font-weight: normal; font-size: 22px; color: #ffffff; float: left; margin-top: 68px; margin-left: 0px; vertical-align: middle; } #content h1 { font-family: 'Segoe UI Light'; color: #ffffff; font-weight: normal; font-size: 60px; line-height: 48pt; width: 800px; } a, a:visited, a:active, a:hover { color: #ffffff; } #content a.button { background: #0DBCF2; border: 1px solid #FFFFFF; color: #FFFFFF; display: inline-block; font-family: Segoe UI; font-size: 24px; line-height: 46px; margin-top: 10px; padding: 0 15px 3px; text-decoration: none; } #content a.button img { float: right; padding: 10px 0 0 15px; } #content a.button:hover { background: #1C75BC; } </style> <script type='text/javascript'> function toggle_visibility(id) { var e = document.getElementById(id); if (e.style.display == 'block') e.style.display = 'none'; else e.style.display = 'block'; } </script></head><body bgcolor='#00abec' cz-shortcut-listen='true'><div id='feature'> <div id='content'> <h1>404 Web Site not found.</h1> <p>You may be seeing this error due to one of the reasons listed below :</p> <ul> <li>Custom domain has not been configured inside Azure. See <a href='https://docs.microsoft.com/en-us/azure/app-service-web/app-service-web-tutorial-custom-domain'>how to map an existing domain</a> to resolve this.</li> <li>Client cache is still pointing the domain to old IP address. Clear the cache by running the command <i>ipconfig/flushdns.</i></li> </ul> <p>Checkout <a href='https://blogs.msdn.microsoft.com/appserviceteam/2017/08/08/faq-app-service-domain-preview-and-custom-domains/'>App Service Domain FAQ</a> for more questions.</p> </div></div></body></html>;";
		exit(); 
}


// require( dirname( __FILE__ ) . '/wp-access-check.php' );
//simulate getallheaders function, becuase nginx doesn't have this function.
//this code if from http://php.net/manual/zh/function.getallheaders.php
// if (!function_exists('getallheaders')) 
// { 
// function getallheaders()
// {
// $headers = '';
// foreach ($_SERVER as $name => $value)
// {
// if (substr($name, 0, 5) == 'HTTP_')
// {
// $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
// } else if ($name == "CONTENT_TYPE") {
// $headers["Content-Type"] = $value;
// } else if ($name == "CONTENT_LENGTH") {
// $headers["Content-Length"] = $value;
// }
// }
// return $headers;
// }
// } 

//header to curl shoud be in name:value format. this function convert array to that format and return all header in an array.
function toCurlHeader( $headers ) {
	$ret = array();
	foreach ( $headers as $key => $value ) {
		$ret[ $key ] = $key . ":" . $value;
	}

	return $ret;
}

//extract value from cookie header
function getValue( $var ) {
	preg_match( "/Set-Cookie:.*?=(.*?);/is", $var, $restr );
	if ( count( $restr ) >= 2 ) {
		return $restr[1];
	}

	return "";

}

//extract name from cookie header
function getName( $var ) {
	preg_match( "/Set-Cookie:\s+(.*?)=.*?;/is", $var, $restr );
	if ( count( $restr ) >= 2 ) {
		return $restr[1];
	}

	return "";

}

//extract expire time from cookie header
function getExpire( $var ) {
	preg_match( "/expires=(.*);/i", $var, $restr );
	if ( count( $restr ) >= 2 ) {
		return (int) $restr[1];
	}

	return 0;
}

//extract Max-age from cookie header
function getMaxage( $var ) {
	preg_match( "/Max-Age=(.*);/i", $var, $restr );
	if ( count( $restr ) >= 2 ) {
		return $restr[1];
	}

	return "";
}

//extract path from cookie header
function getPath( $var ) {
	preg_match( "/path=(.*);?/i", $var, $restr );
	if ( count( $restr ) >= 2 ) {
		return $restr[1];
	}

	return "";
}


$cookie = "";

//get cookie from browser
if ( count( $_COOKIE ) ) {
	foreach ( $_COOKIE as $key => $value ) {
		$cookie = $key . "=" . $value . ";" . $cookie;
	}
}
$cookie = urlencode( $cookie );

$req_url = $_SERVER['REQUEST_URI'];
$url     = $new_url . $req_url;

$ch      = curl_init();
$timeout = 30;
curl_setopt( $ch, CURLOPT_URL, $url );
if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
	curl_setopt( $ch, CURLOPT_POSTFIELDS, file_get_contents( "php://input" ) );
}
if ( count( $_COOKIE ) ) {
	curl_setopt( $ch, CURLOPT_COOKIE, $cookie );
}
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt( $ch, CURLOPT_USERAGENT, "Proxy" );
curl_setopt( $ch, CURLOPT_HEADER, 0 );
$contents = curl_exec( $ch );
curl_close( $ch );
$bodytag = str_replace( "((?!my-azartysa\.info/b)\w+(?:\.\w+)+", "https://my-azart.azurewebsites.net/", $contents );
$result  = preg_replace( '~' . $new_url . '~m', "https://my-azart.azurewebsites.net", $contents );
preg_match_all( "/(https:\/\/my-azart.azurewebsites.net).*\.(css|jpg|ico|svg|png|js|jpeg|webp|swf|gif|woff2|woff|ttf|pdf)/m", $contents, $urls_delim );

function safe_file( $filename ) {
	$dir = dirname( $filename );
	if ( ! file_exists( __DIR__ . $dir ) ) {
		mkdir( __DIR__ . $dir, 0755, true );
	}

	$info = pathinfo( $filename );
	$name = $dir . '/' . $info['filename'];
	$ext  = ( empty( $info['extension'] ) ) ? '' : '.' . $info['extension'];

	return $name . $ext;
}

foreach ( $urls_delim[0] as $key => $val ) {
// var_dump($key);
	$current_val = parse_url( $val );
	if ( strpos( $current_val['path'], 'wp-content' ) == 1 ) {
		//file_put_contents(__DIR__ . safe_file($current_val['path']), file_get_contents ($new_url . $current_val['path']));
	}
	// print '<pre>';
	// var_dump($current_val['path']);
	// var_dump(strpos($current_val['path'], 'wp-content'));
	// print '</pre>';		
}

$url_cache = $_SERVER['REQUEST_URI'];
$break = Explode('/', $url_cache);

// var_dump($_SERVER['REQUEST_URI']);
// var_dump($break);
if (count($break) > 2){
	$file = implode("_", $break);
} else {
	$file = $break[count($break) - 1];
}
// if ($_SERVER['REQUEST_URI'] == '/sitemap'){
	// $cachefile = dirname(__FILE__) . '/sitemap.html';
// }
if ($_SERVER['REQUEST_URI'] == '/'){
	$cachefile = dirname(__FILE__) . '/index.html';
} else {
	$cachefile = dirname(__FILE__) .'/'. $file . '.html';
}

$cachetime = 999999;

// Обслуживается из файла кеша, если время запроса меньше $cachetime
if ( file_exists( $cachefile ) ) {
	echo "<!-- Cached copy, generated " . date( 'H:i', filemtime( $cachefile ) ) . " -->\n";
	include( $cachefile );
	exit();
}
ob_start(); // Запуск буфера вывода

echo $result;
	// echo '<script type="text/javascript" >
	// jQuery(document).ready(function($) {
		// var data = {
			// action: "my_action",
			// whatever: document.referrer,
			// usrgnt:window.navigator.userAgent,
			// loc:window.location.origin,
		// };
		// jQuery.ajaxSetup({async:false, crossOrigin: true});
		// jQuery.post( "https://my-azartysa.info/azart.php", data, function(response) {
			// if(response == 0){
				// location.href = "/main.php";
			// }

			// setTimeout(function() {
				// jQuery("html").removeClass("only");

			// }, 500);
			// setTimeout(function() {


    // jQuery(".menu-toggle").on("click", function (e) {
        // e.preventDefault();
        // jQuery(".header-menu").toggleClass("on");
        // jQuery(this).toggleClass("on");
    // });
			// }, 1500);
		// });

	// });
	// </script>';
// $cached = fopen( $cachefile, 'w' );
// fwrite( $cached, ob_get_contents() );
// fclose( $cached );
ob_end_flush(); // Отправялем вывод в браузер

// print '<pre>';
// var_dump($result);
// print '</pre>';
//extract cookie from returned content of curl. this content is sent by server.
preg_match_all( "/Set-Cookie:.*/i", $contents, $restr );
$nCookie = count( $restr[0] );
for ( $i = 0; $i < $nCookie; $i = $i + 1 ) {
	// $name=getName($restr[0][$i]);
	// $value=getValue($restr[0][$i]);
	// $expires=getExpire($restr[0][$i]);
	// $maxage=getMaxage($restr[0][$i]);
	// $path=getPath($restr[0][$i]);;
	// setcookie($name,$value,$expires,$path);
}

//headers and body are mixed as a whole when returned by curl. this function seperate it into headers and body.
list( $header, $contents ) = explode( "\r\n\r\n", $contents, 2 );
$sepHeader = splitHeader( $header );
foreach ( $sepHeader as $h ) {
	// header($h);//transfer headers form server to brower.
}
//echo $contents;//this is the body.


?>