<?php namespace App\Databases;

	use PDO;
	use PDOException;

	use Dotenv\Dotenv;

	class MariaDB {

		protected $link = null;

		public function __construct() {
			try {
				Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.mariadb')->load();
	
				$dns = sprintf("mysql:host=%s;dbname=%s;charset=%s;port=%s", $_ENV['HOST'], $_ENV['DATABASE'], $_ENV['CHARSET'], $_ENV['PORT']);

				$options = [];

				$this->link = new PDO($dns, $_ENV['USERNAME'], $_ENV['PASSWORD'], $options);
			} catch(PDOException $e) {
				error_log(print_r($e->getMessage() . "\n", true), 3, $_SERVER['DOCUMENT_ROOT'] . '/logger/mariadb.log');
			}
		}

	}
