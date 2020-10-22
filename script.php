<?php

$url = "https://link.link";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);;
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array();
$headers["Content-Type"] = "text/plain";

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"user":"uzivatel","pass":"******","detail":1,"data":"01-1614 7133 5345 3238 5823-4","base64":1}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>


