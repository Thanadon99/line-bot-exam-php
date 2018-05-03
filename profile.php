<?php


$access_token = 'EBzyVBSpQpCRUXyJzG4r+QtDViB+NIB6a/Wr42VD4mRcS3D54tMkp9CZXMhSTVmVEmFAjl7gvElqWawH4o7AUJxGnKbhpogowCJqIA1cQ57mGm3cnzO3Uies+ewfhEt2MYhUXZHlfCRNBMXpVmD+uAdB04t89/1O/w1cDnyilFU=';

$userId = 'U377da83857a7f14ac7be29687c0e1b62';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

