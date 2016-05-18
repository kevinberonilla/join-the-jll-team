<?php
/****************************************************
 * @package: JLL Recruits
 * @version 0.1
 * @author tim happ <http://ificlick.com/>
 * @copyright Copyright (c) 2014 ificlick
*****************************************************/
ini_set('date.timezone', 'America/New_York');

/****************************************************
 * CRM REST API Login
*****************************************************/
$url = 'http://jointhejllteam.com/CRM/service/v3/rest.php'; 

// login call
function call($method, $parameters, $url)
{
	ob_start();

	$curl_request = curl_init();
	curl_setopt($curl_request, CURLOPT_URL, $url);
	curl_setopt($curl_request, CURLOPT_POST, 1);
	curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
	curl_setopt($curl_request, CURLOPT_HEADER, 1);
	curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

	$jsonEncodedData = json_encode($parameters);

	$post = array(
				  "method" => $method,
				  "input_type" => "JSON",
				  "response_type" => "JSON",
				  "rest_data" => $jsonEncodedData
				  );

	curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
	$result = curl_exec($curl_request);
	curl_close($curl_request);
	$result = explode("\r\n\r\n", $result, 2);
	$response = json_decode($result[1]);

	//ob_flush();
	ob_end_clean();

	return $response;
}

?>