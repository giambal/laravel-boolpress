<?php

Route::get('/' , 'homeController@getPosts')->name('home');
Route::get('/category','categoryController@getCategoryList')->name('category.list');
Route::get('/category/{type}','categoryController@getPostsByCategory')->name('posts.by.category');
Route::get('/show/{id}','postController@showPost')->name('show.post');
Route::get('/admin/post/new','postController@createPost')->name('create.post');
Route::post('/admin/post/new','postController@savePost')->name('save.post');
Route::get('/edit/{id}','postController@editPost')->name('edit.post');
Route::patch('/edit/{id}','postController@updatePost')->name('update.post');
Route::delete('/destroy/{id}','postController@deletePost')->name('del.post');
Route::get('/search','homeController@search')->name('search');
