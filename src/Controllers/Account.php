<?php namespace App\Controllers;

	use Psr\Http\Message\ResponseInterface as Response;
	use Psr\Http\Message\ServerRequestInterface as Request;

	use Slim\Views\Twig;

	class Account extends Controller {

		public function __construct() {
			parent::__construct();
		}

		public function signin($request, $response, $args) {
			$view = Twig::fromRequest($request);

			$data = [
				'app_name' => 'Signin'
			];

			return $view->render($response, 'account/signin.php', $data);
		}

		public function signup($request, $response, $args) {
			$view = Twig::fromRequest($request);

			$data = [
				'app_name' => 'Signup'
			];

			return $view->render($response, 'account/signup.php', $data);
		}

		public function signout($request, $response, $args) {
			session_start();
			session_destroy();
			# redirect
		}

		public function reset_password($request, $response, $args) {
			$view = Twig::fromRequest($request);

			$data = [
				'app_name' => 'Reset password'
			];

			return $view->render($response, 'account/reset_password.php', $data);
		}

	}
