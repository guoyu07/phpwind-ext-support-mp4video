<?php

namespace Pw\Ext\SupportMP4Video\Services;

use PwThreadDisplayDoBase;
use PwThreadDisplay;

class ThreadDisplayDo extends PwThreadDisplayDoBase
{
    protected $thread;

    /**
     * construct func.
     *
     * @param PwThreadDisplay $thread
     * @author Seven Du <shiweidu@outlook.com>
     * @homepage http://medz.cn
     */
    public function __construct(PwThreadDisplay $threadDisplay)
    {
        $this->thread = $threadDisplay->thread;
    }

    /**
     * Build read,
     *
     * @param array $read thread info.
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     * @homepage http://medz.cn
     */
    public function bulidRead($read)
    {
        $content = preg_replace_callback('/\<a\\s*href="([^\"]*?).mp4(.*?)".*?\>.*?\<\/a\>/is', function (array $matchs) {
            $base = $matchs[1];
            $query = $matchs[2];

            $src = sprintf('%s.mp4%s', $base, $query);
            $video = '
                <div style="width: 755px; height: 425px;">
                    <video class="video-js" controls preload="auto" data-setup="{}" style="width: 100%%; height: 100%%">
                        <source src="%s" type="video/mp4">
                    </video>
                </div>
            ';

            return sprintf($video, $src);
        }, $read['content']);

        $read['content'] = $content;
        return $read;
    }

    /**
     * Run js.
     *
     * @author Seven Du <shiweidu@outlook.com>
     * @homepage http://medz.cn
     */
    public function runJs()
    {
        include dirname(dirname(__FILE__)).'/resource/thread-footer.html';
    }
}
