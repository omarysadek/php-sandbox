<?php

namespace OSPSB\src\patterns\objectCollections\movie\Entity;

class MovieCollection
{
    /**
     * @var array array collection of Movie
     */
    protected $movies;

    /**
     * @param mix $movie array|Movie
     */
    public function __construct($movie)
    {
        $this->add($movie);
    }

    /**
     * @param mix $movie array|Movie
     *
     * @return MovieCollection
     */
    public function add($movie)
    {
        if (is_array($movie)) {
            array_map([$this, 'add'], $movie);
            return $this;
        }

        if ($movie instanceof Movie) {
            $this->movies[] = $movie;
        }

        return $this;
    }

    /**
     * @return array an array of description on all movies
     */
    public function titles()
    {
        return array_map(function ($movie) {
            return $movie->title();
        }, $this->movies);
    }
}
