<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'First Post', 
            'author' => 'Alice',
            'date' => '1 day ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi tempora fugit rem eos illo quo sit culpa, laborum corporis earum rerum, sint quia, delectus accusamus magnam est? Soluta, odio placeat?'
        ],
        [
            'title' => 'Second Post', 
            'author' => 'Bob',
            'date' => '3 days ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam eius necessitatibus culpa a asperiores nostrum aperiam. Debitis consectetur a magni veniam vel accusamus culpa sed, similique officia unde non aut.'
        ],
        [
            'title' => 'Third Post', 
            'author' => 'Charlie',
            'date' => '1 week ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sit facilis nam et adipisci eligendi officia perferendis, quia est consequatur dolore dolores eos, ut numquam explicabo praesentium sunt repellendus quas!'
        ],
    ];

    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});