<?php

class Post {

	protected $id;
	protected $title;
	protected $published;

	public function __construct(int $id, string $title, bool $published) {
		$this->id        = $id;
		$this->title     = $title;
		$this->published = $published;
	}

	public function id() {
		return $this->id;
	}

	public function title() {
		return $this->title;
	}

	public function isPublished() {
		return $this->published;
	}

	public function published($value) {
		$this->published = $value;
		return $this;
	}
}

$posts = [
	new Post(3, 'php', false),
	new Post(10, 'ruby on rails', false),
	new Post(4, 'javascrit', true),
	new Post(56, 'java', false)
];
/*
$publishedPosts = array_filter($posts, function($post) {
	return $post->isPublished();
});
*/
$posts = array_map(function($post){
	return [
		'id'        => $post->id(),
		'title'     => $post->title(),
		'published' => $post->isPublished()
	];
}, $posts);

$posts = array_column($posts, 'title', 'id');

var_dump($posts);exit;