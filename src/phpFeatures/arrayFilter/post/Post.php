<?php

namespace OSPSB\src\phpFeatures\arrayFilter\post;

class Post
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var bool
     */
    protected $published;

    /**
     * @param int    $id
     * @param string $title
     * @param bool   $published
     */
    public function __construct(int $id, string $title, bool $published)
    {
        $this->id        = $id;
        $this->title     = $title;
        $this->published = $published;
    }

    /**
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @return bool
     */
    public function isPublished()
    {
        return $this->published;
    }

    public function published(bool $status)
    {
        $this->published = $status;

        return $this;
    }
}
