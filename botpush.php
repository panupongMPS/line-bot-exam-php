<?php



require "vendor/autoload.php";

$access_token = 'q+k/WTK2yggtJx28RfCr4jET9vryHh5dLzcTQtg+j0h9COdcTp0T51dVlml1t3BmlNOWul1AtlS6gNgS+iwG5K/L39uHzhnOAvryeeBZdldskkWmOFM2/WTcSiB9MnHunWdKqoMcKZQcM88cQyYGbwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'eb38603dae08732ce2a5d02be66a377e';

$pushID = 'Uee2b386243d3bc4b8020998b2d81bf15';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







