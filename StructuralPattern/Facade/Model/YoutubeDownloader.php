<?php

namespace Lucas\Facade;

class YouTubeDownloader
{
    protected $youtube;
    protected $ffmpeg;

    public function __construct(string $youtubeApiKey)
    {
        $this->youtube = new YouTube($youtubeApiKey);
        $this->ffmpeg = new FFMpeg();
    }

    public function getYoutube(): Youtube {
        return $this->youtube;
    }

    public function getFfmpeg(): FFMpeg {
        return $this->ffmpeg;
    }

}