<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post', 
            'author' => 'Alice',
            'date' => '1 day ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi tempora fugit rem eos illo quo sit culpa, laborum corporis earum rerum, sint quia, delectus accusamus magnam est? Soluta, odio placeat?'
        ],
        [
            'id' => 2,
            'slug' => 'second-post',
            'title' => 'Second Post', 
            'author' => 'Bob',
            'date' => '3 days ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam eius necessitatibus culpa a asperiores nostrum aperiam. Debitis consectetur a magni veniam vel accusamus culpa sed, similique officia unde non aut.'
        ],
        [
            'id' => 3,
            'slug' => 'third-post',
            'title' => 'Third Post', 
            'author' => 'Charlie',
            'date' => '1 week ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sit facilis nam et adipisci eligendi officia perferendis, quia est consequatur dolore dolores eos, ut numquam explicabo praesentium sunt repellendus quas!'
        ],
    ];

    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post', 
            'author' => 'Alice',
            'date' => '1 day ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi tempora fugit rem eos illo quo sit culpa, laborum corporis earum rerum, sint quia, delectus accusamus magnam est? Soluta, odio placeat?'
        ],
        [
            'id' => 2,
            'slug' => 'second-post',
            'title' => 'Second Post', 
            'author' => 'Bob',
            'date' => '3 days ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam eius necessitatibus culpa a asperiores nostrum aperiam. Debitis consectetur a magni veniam vel accusamus culpa sed, similique officia unde non aut.'
        ],
        [
            'id' => 3,
            'slug' => 'third-post',
            'title' => 'Third Post', 
            'author' => 'Charlie',
            'date' => '1 week ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sit facilis nam et adipisci eligendi officia perferendis, quia est consequatur dolore dolores eos, ut numquam explicabo praesentium sunt repellendus quas!'
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (! $post) {
        abort(404);
    }
    
    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});