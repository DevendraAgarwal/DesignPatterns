<?php

require_once '__DIR__/../vendor/autoload.php';

use Structural\Facade\FacadeAppClient;

$youtubeApiKey = "XXXXXXX";
$videoUrl = "https://www.youtube.com/watch?v=QH2-TGUlwu4";

$app = new FacadeAppClient();
$app->createYoutubeDownloader($youtubeApiKey);
$app->downloadVideo($videoUrl);
