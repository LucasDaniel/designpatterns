<?php

namespace Lucas\Facade;

function clientCode(YouTubeDownloader $youtubeDownloader)
{
    // ...

    YouTubeDownloaderService::downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4",$youtubeDownloader);

    // ...
}

$facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
clientCode($facade);