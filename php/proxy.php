<?php
define ('POVERLESS_URL', 'http://jupiter.eecs.jacobs-university.de:1414');
$session = curl_init(POVERLESS_URL.'/?'.$_SERVER['QUERY_STRING']);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($session);
curl_close($session);
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type:application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
echo $response;
exit();
?>
