<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/oauth_token.php';

// Small cURL wrapper
function curl_get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, github_personal_token().':x-oauth-basic');
    $result = curl_exec($ch);

    curl_close($ch);
    return $result;
}

$app = new Silex\Application();

// Register Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
    'twig.options' => [
       'cache' => __DIR__.'/cache',
    ],
));
// Set globals
$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    $twig->addGlobal('navigation', [
        "home" => [ "dest" => "/", "module" => "home" ],
        "blog" => [ "dest" => "/blog", "module" => "blog" ],
        "code" => [ "dest" => "/code", "module" => "code" ],
        "resume" => [ "dest" => "/resume", "module" => "resume" ]
    ]);

    return $twig;
}));

// Set up routes
$app->get('/', function () use ($app) {
    return $app['twig']->render('home.twig');
});

$app->get('/blog', function () use ($app) {
    return $app['twig']->render('blog.twig');
});

$app->get('/code', function () use ($app) {
// Fetch repositories from GitHub
$repositories = json_decode(curl_get("https://api.github.com/users/nordbjerg/repos?sort=updated"));
$ignore = ['Digitalocean-PHP-class', 'CVR-INFO', 'CPR-PHP'];

// Filter out repositories
    $langs = [];
    $repos = [];
    foreach($repositories as $repo) {
	if(in_array($repo->name, $ignore)) continue;

	// Fetch languages
	$languages = json_decode(curl_get($repo->languages_url), true);
	foreach($languages as $lang => $lines) {
		$langs[$repo->name][] = strtolower($lang);
	}
    
    	$repos[] = $repo;
    }

    return $app['twig']->render('code.twig', [
    	'repos' => $repos,
    	'langs' => $langs,
    ]);
});

$app->get('/resume', function () use ($app) {
    return $app['twig']->render('resume.twig');
});

$app->run();
