<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'PageController@index')->name('index');
    Route::get('/musics', 'PageController@music')->name('music');
    Route::get('/photos', 'PageController@photo')->name('photo');
    Route::get('/pixie-editor/{id?}', 'PageController@editor')->name('editor');
    Route::get('/filtered-modal/{id?}', 'PageController@filtered_modal')->name('filtered-modal');
    Route::get('/modal/{id?}', 'PageController@modal')->name('modal');
    Route::any('/search', 'PageController@search_results')->name('search-result');
    Route::get( '/download/{id}', 'PageController@download')->name('download');

    Route::post('/orders', 'PageController@image_orders')->name('photo-order');
    Route::post('/photo-filter', 'PageController@photo_filter')->name('photo-filter');





    Route::group(['namespace' => 'Forum'], function () {
        Route::any('/forum', 'ForumController@index')->name('forum');
        Route::post('new-topic', 'ForumController@new_topic')->name('new-topic');
        Route::get('topic-filter', 'ForumController@topic_filter')->name('topic-filter');
        Route::get('category-filter', 'ForumController@category_filter')->name('category-filter');
        Route::any('forum-inner/{slug}', 'ForumController@forum_inner')->name('forum-inner');
        Route::post('topic-comment', 'TopicCommentController@comment')->name('topic-comment');
        Route::post('like-topic','LikeController@like_topic')->name('like-topic');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
