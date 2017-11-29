<?php

namespace OSPSB\src\patterns\objectCollections\movie\Entity;

class Movie
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }
}
