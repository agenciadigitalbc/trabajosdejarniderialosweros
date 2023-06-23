<?php

$url = "https://api.easybroker.com/v1/properties?page=1&limit=50";
	
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "X-Authorization: oatmoueuqzy4snjk1zxvb63hwtosot"
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump(json_decode($resp, true));
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 2022 05:00:00 GMT');
// headers to tell that result is JSON
header('Content-type: application/json');
// send the result now
echo ($resp);

?>
