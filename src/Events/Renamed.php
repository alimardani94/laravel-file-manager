<?php

namespace Alimardani94\LaravelFileManager\Events;

use Illuminate\Http\Request;

class Renamed
{
    /**
     * @var string
     */
    private $disk;

    /**
     * @var string
     */
    private $newName;

    /**
     * @var string
     */
    private $oldName;


    public function __construct($disk, $newName, $oldName)
    {
        $this->disk = $disk;
        $this->newName = $newName;
        $this->oldName = $oldName;
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
    public function newName()
    {
        return $this->newName;
    }

    /**
     * @return string
     */
    public function oldName()
    {
        return $this->oldName;
    }
}
