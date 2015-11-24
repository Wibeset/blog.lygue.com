<?php

require 'vendor/autoload.php';

use Philo\Blade\Blade;
use Carbon\Carbon;
use Michelf\Markdown;

setlocale(LC_ALL, "en_US.UTF-8");

$dir   = [
    'views' => __DIR__ . '/../views',
    'cache' => __DIR__ . '/../cache',
    'dist'  => __DIR__ . '/../dist'
];

$authors = [
    'dominic' => [
        'name' => 'Dominic Martineau',
        'img' => 'assets/img/dominicmartineau.jpg'
    ],
];

$blade = new Blade($dir['views'], $dir['cache']);

$blade->view()->share([
    'version' => time(),
    'assets'  => 'assets/'
]);

$articles = json_decode(file_get_contents($dir['views'] . '/articles/articles.json'), true);
$articles = $articles['articles'];
$posts    = [];

// Blog articles
foreach ($articles as $index => $article) {

    // Next
    $next = $previous = null;
    if (isset($articles[$index-1])) {
        $next = [
            'uri'       => $articles[$index-1]['uri'],
            'title'     => $articles[$index-1]['title'],
            'date'      => Carbon::createFromFormat('Ymd', $articles[$index-1]['date']),
            'intro'     => $articles[$index-1]['intro'],
        ];
    }
    else if (isset($articles[$index+1])) {
        $previous = [
            'uri'       => $articles[$index+1]['uri'],
            'title'     => $articles[$index+1]['title'],
            'date'      => Carbon::createFromFormat('Ymd', $articles[$index+1]['date']),
            'intro'     => $articles[$index+1]['intro'],
        ];
    }

    $file = $dir['views'] . '/articles/' . $article['uri'] . '.md';

    $blade->view()->share([
        'title' => $article['title'],
        'body'  => 'article',
        'date'  => Carbon::createFromFormat('Ymd', $article['date']),
        'description' => "",
    ]);

    $html = $blade->view()->make('article', [
        'title'       => $article['title'],
        'description' => $article['intro'],
        'author'      => $authors[$article['author']],
        'date'        => Carbon::createFromFormat('Ymd', $article['date']),
        'content'     => Markdown::defaultTransform(file_get_contents($file)),
        'share'       => [
            'url'     => 'http://blog.lygue.com/' . $article['uri'] . '.html',
            'title'   => $article['title'],
            'body'    => $article['intro']
        ],
        'next'        => $next,
        'previous'    => $previous,
        'page'        => ''
    ]);

    file_put_contents($dir['dist'] . '/' . $article['uri'] . '.html', $html);
}

$pages_articles = array_chunk($articles, 5);
$max_page = count($pages_articles);
$page = 1;

foreach ($pages_articles as $index => $pages_articles) {

    $posts = array();

    foreach ($pages_articles as $article) {

        $posts[] = [
            'uri'   => $article['uri'],
            'title' => $article['title'],
            'date'  => Carbon::createFromFormat('Ymd', $article['date']),
            'intro' => $article['intro'],
        ];
    }

    $blade->view()->share([
        'title'     => 'Sports leagues management made easy',
        'body'      => 'index',
        'page'      => $page,
        'max_page'  => $max_page,
    ]);

    $html = $blade->view()->make('index', ['articles' => $posts, 'page' => $page]);

    if ($page == 1) {
        file_put_contents($dir['dist'] . '/index.html', $html);
    } else {
        file_put_contents($dir['dist'] . '/page'.$page.'.html', $html);
    }

    $page++;
}
