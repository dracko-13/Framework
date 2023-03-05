<?php namespace App\Controllers;

	use Psr\Http\Message\ResponseInterface as Response;
	use Psr\Http\Message\ServerRequestInterface as Request;

	use Slim\Views\Twig;

	class Dashboard extends Controller {

		public function __construct() {
			parent::__construct();
		}

		public function index($request, $response, $args) {
			session_start();

			if($_SESSION['logged_in']):
				$view = Twig::fromRequest($request);
	
				$data = [
					'app_name' => 'Dashboard'
				];
	
				return $view->render($response, 'dashboard/index.php', $data);
			else:
				# redirect
			endif;
		}

	}
