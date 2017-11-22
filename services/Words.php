<?php 

class Words {

	public static function init(){
		if(!isset($_SESSION['words'])){
			$_SESSION['words'] = ["lll","Mario","Link"];
		}
	}

	public static function get($param){
		Words::init();
		WebService::sendResponse($_SESSION['words']);
	}

	public static function post($param){
		Words::init();
		$_SESSION['words'][] = $param['value'];
		WebService::sendResponse(true);
	}

	public static function put($param){
		Words::init();

		if ( isset($_SESSION['words'][$param['id']]) && $param['value'] ){
			$_SESSION['words'][$param['id']] = $param['value'];
			WebService::sendResponse(true);
		} else {
			WebService::sendResponse(false, 400);
		}

	}

	public static function delete($param){
		Words::init();

		if ( isset($_SESSION['words'][$param['id']]) ){
			 unset($_SESSION['words'][$param['id']]);

			WebService::sendResponse(true);
		} else {
			WebService::sendResponse(false, 400);
		}

	}



}