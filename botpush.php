<?php



require "vendor/autoload.php";

$access_token = 'EBzyVBSpQpCRUXyJzG4r+QtDViB+NIB6a/Wr42VD4mRcS3D54tMkp9CZXMhSTVmVEmFAjl7gvElqWawH4o7AUJxGnKbhpogowCJqIA1cQ57mGm3cnzO3Uies+ewfhEt2MYhUXZHlfCRNBMXpVmD+uAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '85a055cff00c5ca119e5ded3225bfdf3';

$pushID = 'U377da83857a7f14ac7be29687c0e1b62';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







