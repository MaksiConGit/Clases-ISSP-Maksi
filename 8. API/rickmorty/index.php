<?php



//get https://rickandmortyapi.com/api/character 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://rickandmortyapi.com/api/character");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
	echo curl_error($ch);
} else {
	$info = json_decode($response, true);
	// var_dump($info);
}

curl_close($ch);

require 'index.view.php';