<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

// Register Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
    'twig.options' => [
       'cache' => __DIR__.'/cache',
    ],
));
// Set globals
$app['twig'] = $app->share($app->extend('twig', function ($twig, $app) {
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
    $projects = [
        [
            'url' => 'https://github.com/Metapyziks/finalfrontier',
            'name' => 'Final Frontier',
            'desc' => 'Final Frontier is a gamemode for Garry\'s Mod 13',
            'tags' => ['lua']
        ],
        [
            'url' => 'https://github.com/nordbjerg/VerbalExpressionsPHP',
            'name' => 'VerbalExpressionsPHP',
            'desc' => 'Makes using regular expressions in PHP less of a pain',
            'tags' => ['php']
        ],
        [
            'url' => 'https://github.com/nordbjerg/CellFoneMod',
            'name' => 'CellFoneMod',
            'desc' => 'A mod for DarkRP, a gamemode for Garry\'s Mod 13. Adds cell phones.',
            'tags' => ['lua']
        ]
    ];

    return $app['twig']->render('code.twig', [
        'projects' => $projects,
    ]);
});

$app->get('/resume', function () use ($app) {
    return $app['twig']->render('resume.twig');
});

$app->run();
