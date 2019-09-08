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
    Route::get('/pixie-editor', 'PageController@editor')->name('editor');
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
        Route::get('latest-filter', 'ForumController@latest_filter')->name('latest-filter');
        Route::get('category-filter', 'ForumController@category_filter')->name('category-filter');
        Route::get('top-filter', 'ForumController@top_filter')->name('top-filter');
        Route::any('forum-inner/{slug}', 'ForumController@forum_inner')->name('forum-inner');
        Route::post('topic-comment', 'TopicCommentController@comment')->name('topic-comment');
        Route::post('like-topic', 'LikeController@like_topic')->name('like-topic');
        Route::post('like-coment', 'LikeController@like_comment')->name('like-comment');
        ROute::get('forum-autosuggest', 'SearchController@autosuggest')->name('forum-autosuggest');
    });

    Route::group(['namespace' => 'Icons'], function () {
        Route::get('/icons', 'IconsController@index')->name('icons-index');
        Route::get('inner-icons/{slug}', 'IconsController@inner_icons')->name('inner-icons');
        Route::get('category-click-icons', 'IconsController@category_click_icons')->name('category-click-icons');
        Route::post('add-to-collection-icons', 'CartControllerIcons@add_to_collection_icons')->name('add-to-collection-icons');
        Route::get('trend-filter', 'IconsController@trend_filter')->name('trend-filter');
        Route::get('icons-search','IconSearchController@autocomplete')->name('icons-search');
        Route::get('pack-page/{category_slug}','IconsController@pack_page')->name('pack-page');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
