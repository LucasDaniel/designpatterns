<?php

namespace Lucas\Proxy;

interface Downloader
{
    public function download(string $url): string;
}
