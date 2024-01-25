<?php

/**
 * Generates a single Movie.
 */
class Movie
{
    public $name;
    public $description;
    public $category;
    public $releaseYear;

    /**
     * Constructs a new Movie
     *
     * @param string $_name The movie's name
     * @param string $_description A description of the Movie
     * @param string $_category The main category of this Movie
     * @param int $_releaseYear The movie's release year
     */

    public function __construct(string $_name, string $_description, string $_category, int $_releaseYear)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->category = $_category;
        $this->releaseYear = $_releaseYear;
    }

    public function getName()
    {
        return $this->name;
    }
}
