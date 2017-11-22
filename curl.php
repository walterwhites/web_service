<?php

if ($_GET['method'] == "get")
	getWords();
else if ($_GET['method'] == "post" && isset($_GET['value']))
	postWords($_GET['value']);
else if ($_GET['method'] == "delete" && isset($_GET['value']))
	deleteWords($_GET['value']);
else if ($_GET['method'] == "put" && isset($_GET['value']) && isset($_GET['id']))
	putWords($_GET['id'], $_GET['value']);

function getWords() {
	$curlReference = curl_init();
	$url = "127.0.0.1:1337/words";
	curl_setopt($curlReference, CURLOPT_URL, $url);
	curl_exec($curlReference);
	curl_close($curlReference);
}

function putWords($id = false, $mot = false) {
	$curlReference = curl_init();
	$url = "127.0.0.1:1337/words";
	curl_setopt($curlReference, CURLOPT_URL, $url);
	curl_setopt($curlReference, CURLOPT_POSTFIELDS, 'id=' . $id . '&value=' .$mot);
	curl_setopt($curlReference, CURLOPT_CUSTOMREQUEST, 'PUT');
	curl_exec($curlReference);
	curl_close($curlReference);
}

function deleteWords($id = false) {
	$curlReference = curl_init();
	$url = "127.0.0.1:1337/words?id=" . $id;;
	curl_setopt($curlReference, CURLOPT_URL, $url);
	curl_setopt($curlReference, CURLOPT_CUSTOMREQUEST, 'DELETE');
	curl_exec($curlReference);
	curl_close($curlReference);
}


function postWords($mot = false) {
	$curlReference = curl_init();
	$url = "127.0.0.1:1337/words";
	curl_setopt($curlReference, CURLOPT_URL, $url);
	curl_setopt($curlReference, CURLOPT_POSTFIELDS, 'value=' . $mot);
	curl_exec($curlReference);
	curl_close($curlReference);
}
