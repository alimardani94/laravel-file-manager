<?php

namespace Alimardani94\LaravelFileManager\Events;

use Illuminate\Http\Request;
use Storage;

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

    /**
     * @var string
     */
    private $type;

    public function __construct($disk, $newName, $oldName, $type)
    {
        $this->disk = $disk;
        $this->newName = $newName;
        $this->oldName = $oldName;
        $this->type = $type;
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

    /**
     * @return string
     */
    public function type()
    {
        return $this->type;
    }
}
