<?php

class Ramphor_Popcorn_Admin {
	public function __construct() {
		$this->includes();
	}

	public function includes() {
		require_once dirname( __FILE__ ) . '/admin/class-ramphor-popcorn-admin-menus.php';
	}
}

new Ramphor_Popcorn_Admin();