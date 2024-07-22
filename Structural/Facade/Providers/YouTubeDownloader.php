<?php

namespace Structural\Facade\Providers;

use Structural\Facade\Libraries\FFMpeg;
use Structural\Facade\Libraries\YouTube;

/**
 * The Facade provides a single method for downloading videos from YouTube. This
 * method hides all the complexity of the PHP network layer, YouTube API and the
 * video conversion library (FFmpeg).
 */
class YouTubeDownloader
{
    protected $youtube;
    protected $ffmpeg;

    /**
     * It is handy when the Facade can manage the lifecycle of the subsystem it
     * uses.
     */
    public function __construct(string $youtubeApiKey)
    {
        $this->youtube = new YouTube($youtubeApiKey);
        $this->ffmpeg = new FFMpeg();
    }

    /**
     * The Facade provides a simple method for downloading video and encoding it
     * to a target format (for the sake of simplicity, the real-world code is
     * commented-out).
     */
    public function downloadVideo(string $url): void
    {
        echo $this->youtube->fetchVideo($url);
        $this->youtube->saveAs();
        $this->ffmpeg->open();

        echo "Normalizing and resizing the video to smaller dimensions...\n";
        echo "Capturing preview image...\n";
        echo "Saving video in target formats...\n";
        echo "Done!\n";
    }
}
