<?php

namespace Lucas\Facade;

class YouTubeDownloaderService
{
    public static function downloadVideo(string $url, YouTubeDownloader $youtubeDownloader): void
    {
        echo "Fetching video metadata from youtube...\n";
        // $title = $youtubeDownloader->getYoutube()->fetchVideo($url)->getTitle();
        echo "Saving video file to a temporary file...\n";
        // $youtubeDownloader->getYoutube->saveAs($url, "video.mpg");

        echo "Processing source video...\n";
        // $video = $youtubeDownloader->getFfmpeg->open('video.mpg');
        echo "Normalizing and resizing the video to smaller dimensions...\n";
        // $video
        //     ->filters()
        //     ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
        //     ->synchronize();
        echo "Capturing preview image...\n";
        // $video
        //     ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
        //     ->save($title . 'frame.jpg');
        echo "Saving video in target formats...\n";
        // $video
        //     ->save(new FFMpeg\Format\Video\X264(), $title . '.mp4')
        //     ->save(new FFMpeg\Format\Video\WMV(), $title . '.wmv')
        //     ->save(new FFMpeg\Format\Video\WebM(), $title . '.webm');
        echo "Done!\n";
    }
}