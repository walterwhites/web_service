<?php

class WebService {

	public static function load($serviceName = false) {
		session_start();

		if ($serviceName && WebService::exist($serviceName)) {
			$method = strtolower($_SERVER['REQUEST_METHOD']);
			switch ($method) {
				case 'get':
					$data = WebService::getDataFromGET();
					break;

				case 'post':
					$data = WebService::getDataFromPOST();
					break;

				case 'put':
					$data = WebService::getDataFromPUT();
					break;

				case 'delete':
					# code...
					break;
				
				default:
					# code...
					break;
			}

			call_user_func(array($serviceName, $method), $data);
		}
		else {
			echo "404";
		}
	}

	public static function getDataFromPUT(){
			$raw_data 	= file_get_contents('php://input');
			$boundary 	= substr($raw_data, 0, strpos($raw_data, "\r\n"));
			$data 		= array();

			if ($boundary) {
				$parts 		= array_slice(explode($boundary, $raw_data), 1);

				foreach ($parts as $part) {
					if ($part == "--\r\n") break;
					$part 						= ltrim($part, "\r\n");
				    list($raw_headers, $body) 	= explode("\r\n\r\n", $part, 2);

				    $raw_headers 				= explode("\r\n", $raw_headers);
				    $headers 					= array();

				    foreach ($raw_headers as $header) {
				        list($name, $value) = explode(':', $header);
				        $headers[strtolower($name)] = ltrim($value, ' '); 
				    } 

				    if (isset($headers['content-disposition'])) {
				    	$filename = null;
				    	preg_match(
				            '/^(.+); *name="([^"]+)"(; *filename="([^"]+)")?/', 
				            $headers['content-disposition'], 
				            $matches
				        );

				    	list(, $type, $name) = $matches;
				        isset($matches[4]) and $filename = $matches[4]; 

				        switch ($name) {
				            case 'userfile':
				                 file_put_contents($filename, $body);
				                 break;
				            default: 
				                 $data[$name] = substr($body, 0, strlen($body) - 2);
				                 break;
				        } 

				    }
				}

			return $data;
		}
	}

	public static function sendResponse($data, $status = 200) {
		header("Content-type: application/json");
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header("Access-Control-Expose-Headers: *");
		header("Access-Control-Allow-Methods: GET,PUT,POST,DELETE");
		header("Access-Control-Allow-Credentials: true");

		http_response_code($status);
		echo json_encode($data, JSON_PRETTY_PRINT);
	}

	public static function getDataFromGET() {
		$data = $_GET;
		unset($data['url']);
		return $data;
	}

	public static function getDataFromPOST() {
		return $_POST;
	}

	public static function exist($serviceName) {

		if (file_exists( __DIR__.'/../services/'.ucfirst(strtolower($serviceName)).'.php')) {
			require_once  __DIR__.'/../services/'.ucfirst(strtolower($serviceName)).'.php';
			return true;
		}
		return false;
	}
}