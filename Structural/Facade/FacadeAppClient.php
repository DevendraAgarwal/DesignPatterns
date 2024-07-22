<?php

namespace Structural\Facade;

use Structural\Facade\Providers\YouTubeDownloader;

class FacadeAppClient
{
    private $facade;

    public function createYoutubeDownloader($apiKey) {
        $this->facade = new YouTubeDownloader($apiKey);
    }

    /**
     * The client code does not depend on any subsystem's classes. Any changes
     * inside the subsystem's code won't affect the client code. You will only need
     * to update the Facade.
     */
    public function downloadVideo(String $url)
    {
        $this->facade->downloadVideo($url);
    }
}
