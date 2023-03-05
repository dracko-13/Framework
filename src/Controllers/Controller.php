<?php namespace App\Controllers;

	use App\Models\Account;

	class Controller {

		protected $account = null;

		public function __construct() {
			$this->account = new Account();
		}

	}
