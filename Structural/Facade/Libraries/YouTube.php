<?php

namespace Structural\Facade\Libraries;

/**
 * The YouTube API subsystem.
 */
class YouTube
{
    public $apiKey;

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }
    public function fetchVideo(string $url): string
    {
        return "Fetching video metadata from youtube... On Url: $url \n";
    }

    public function saveAs(): void
    {
        echo "Saving video file to a temporary file...\n";
    }

    // ...more methods and classes...
}
