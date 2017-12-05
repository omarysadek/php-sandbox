<?php

namespace OSPSB\src\phpFeatures\arrayFilter\post;

class PostCollection
{
    /**
     * @var array array of Post
     */
    protected $posts;

    /**
     * @param array $post
     */
    public function __construct(array $posts)
    {
        $this->posts = $posts;
    }

    /**
     * Convert Object to arrat
     *
     * @return array
     */
    public function toArray()
    {
        return array_map(function ($post) {
            return [
                'id'        => $post->id(),
                'title'     => $post->title(),
                'published' => $post->isPublished()
            ];
        }, $this->posts);
    }

    /**
     * @return array
     */
    public function getPublished()
    {
        return array_filter($this->posts, function ($post) {
            return $post->isPublished();
        });
    }

    /**
     * @param string $column
     *
     * @return array
     */
    public function getColumns($column)
    {
        return array_column($this->toArray(), $column);
    }
}
