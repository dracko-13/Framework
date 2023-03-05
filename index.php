<?php

	require __DIR__ . '/vendor/autoload.php';

	use Slim\Factory\AppFactory;
	use Slim\Views\Twig;
	use Slim\Views\TwigMiddleware;

	$app = AppFactory::create();

	$app->addRoutingMiddleware();
	$app->addErrorMiddleware(true, true, true);

	$twig = Twig::create('src/Views/', ['cache' => false]);

	$app->add(TwigMiddleware::create($app, $twig));

	require __DIR__ . '/src/Routes/Routes.php';

	$app->run();
