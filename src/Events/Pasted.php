<?php

namespace Alimardani94\LaravelFileManager\Events;

use Illuminate\Http\Request;

class Pasted
{
    /**
     * @var string
     */
    private $disk;

    /**
     * @var string
     */
    private $path;

    /**
     * @var array
     */
    private $clipboard;


    public function __construct($disk, $path, $clipboard)
    {
        $this->disk = $disk;
        $this->path = $path;
        $this->clipboard = $clipboard;
    }

    /**
     * @return string
     */
    public function disk()
    {
        return $this->disk;
    }

    /**
     * @return string
     */
    public function path()
    {
        return $this->path;
    }

    /**
     * @return array
     */
    public function clipboard()
    {
        return $this->clipboard;
    }
}
