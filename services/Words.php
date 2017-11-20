<?php

/**
* 
*/
class Words {
	public static function get($param) {
		if (!isset($_SESSION['words'])) {
			$_SESSION['words'] = ["Aloy", "Mario", "Link"];
		}

		WebService::sendResponse($_SESSION['words']);
	}

	public static function post($param) {
		WebService::sendResponse($param);
	}

	public static function put($param) {
		echo "get";
	}

	public static function delete($param) {
		echo "get";
	}
}