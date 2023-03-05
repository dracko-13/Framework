<?php namespace App\Routes;

	use App\Controllers\Index     as Index;
	use App\Controllers\Account   as Account;
	use App\Controllers\Dashboard as Dashboard;

	$app->get('/', Index::class . ':index');

	$app->get('/signin',         Account::class . ':signin');
	$app->get('/signup',         Account::class . ':signup');
	$app->get('/signout',        Account::class . ':signuot');
	$app->get('/reset_password', Account::class . ':reset_password');

	$app->get('/dashboard', Dashboard::class . ':index');
