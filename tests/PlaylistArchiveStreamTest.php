<?php

/**
 * PlaylistArchiveStreamTest class.
 */

namespace Alltube\Test;

use Alltube\Exception\ConfigException;
use Alltube\Stream\PlaylistArchiveStream;

/**
 * Unit tests for the PlaylistArchiveStream class.
 * @requires download
 */
class PlaylistArchiveStreamTest extends StreamTest
{
    /**
     * Prepare tests.
     * @throws ConfigException
     */
    protected function setUp(): void
    {
        parent::setUp();

        $video = $this->downloader->getVideo(
            'https://www.youtube.com/playlist?list=PL1j4Ff8cAqPu5iowaeUAY8lRgkfT4RybJ'
        );

        $this->stream = new PlaylistArchiveStream($this->downloader, $video);
    }
}
