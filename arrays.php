<?php

class Post
{

    /**
     * @var mixed
     */
    public $title;

    /**
     * @var mixed
     */
    public $published;

    /**
     * @param $title
     * @param $published
     */
    public function __construct($title, $published)
    {

        $this->title     = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first post', true),
    new Post('My second post', true),
    new Post('My Third post', false),
    new Post('My fourth post', false),
];

// $unpublishedPosts = array_filter($posts, function ($post) {

//     return !$post->published;
// });

// $publishedPosts = array_filter($posts, function ($post) {

//     return $post->published;
// });

//transform an object
// $modify = array_map(function ($post) {

//     return ['title' => $post->title];

// }, $posts);.

// $modify = array_map(function ($post) {

//     return ['title' => $post->title];
// }, $posts);

// $modify = array_column($posts, 'title');

// $modify = array_map(function ($post) {
//     return (array) $post;
// }, $posts);

// $title = array_column($posts, 'title');

var_dump($title);
