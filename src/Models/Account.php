<?php namespace App\Models;

	use App\Databases\MariaDB;
	use App\Interfaces\IAccount;

	class Account extends MariaDB implements IAccount {

		protected $link = null;
		private   $sql  = null;
		private   $data = [];

		public function __construct() {
			parent::__construct();
		}

		public function signin() {}

		public function signup() {}

		public function signout() {
			$this->account->signout();
		}

		public function reset_password() {}

		public function __destruct() {
			unset($this->data);
		}

	}
