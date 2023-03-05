<?php namespace App\Controllers;

	use Psr\Http\Message\ResponseInterface as Response;
	use Psr\Http\Message\ServerRequestInterface as Request;

	use Slim\Views\Twig;

	class Index extends Controller {

		public function __construct() {
			parent::__construct();
		}

		public function index($request, $response, $args) {
			session_start();

			$_SESSION['logged_in'] = true;

			$view = Twig::fromRequest($request);

			$data = [
				'app_name' => 'Index'
			];

			return $view->render($response, 'index.php', $data);
		}

	}
