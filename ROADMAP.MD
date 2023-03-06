VIEWS

	index.php
	
		/signin
		/signup
		/signout
		/reset_password
	
		/dashboard

CONTROLLERS

	Controller

	Index extends Controller
		index

	Account extends Controller
		signin
		signup
		signout
		reset_password

	Dashboard extends Controller
		index

MODELS

	Account extends MariaDB implements IAccount
