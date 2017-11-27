<?php

class Movie {

	protected $title;

	public function __construct($title) {
		$this->title = $title;
	}

	public function title() {
		return $this->title;
	}

	public function __destruct() {
		var_dump($this->title);
	}
}

class MovieCollection {

	protected $movies;

	public function __construct($movie) {
		$this->add($movie);
	}

	protected function add($movie) {
		if (is_array($movie)) {
			array_map([$this, 'add'], $movie);
			return $this;
		}

		if ($movie instanceof Movie) {
			$this->movies[] = $movie;
		}

		return $this;
	}

	public function titles() {
		return array_map(function($movie){
			return $movie->title();
		}, $this->movies);
	}

}

$test = new Movie('Leon');
var_dump(
(new MovieCollection([$test, new Movie('AHX')]))->titles()
);
exit;