<?php

class Router {

	public static function getService() {
		$rurl = explode('/', $_GET['url']);
		return isset($rurl[0]) ? $rurl[0] : false;
	}
}