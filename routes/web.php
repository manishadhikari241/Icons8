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
    Route::get('/editor', 'PageController@pixel')->name('pixel');
    Route::get('/my-editor', 'PageController@my_editor')->name('my-editor');
    Route::Post('main-search', 'MainSearchController@main_search')->name('main-search');

    Route::get('/filtered-modal/{id?}', 'PageController@filtered_modal')->name('filtered-modal');
    Route::get('/modal/{id?}', 'PageController@modal')->name('modal');
    Route::any('/search', 'PageController@search_results')->name('search-result');
    Route::get( '/download/{id}', 'PageController@download')->name('photo-download');
    Route::get( '/music-download/{id}', 'PageController@music_download')->name('music-download');

    Route::post('/orders', 'PageController@image_orders')->name('photo-order');
    Route::post('/photo-filter', 'PageController@photo_filter')->name('photo-filter');

    // route for processing payment
    Route::any('paypal/{amount?}', 'PaypalController@payWithpaypal')->name('paypal');
// route for check status of the payment
    Route::get('status', 'PaypalController@getPaymentStatus');

    Route::group(['namespace' => 'Forum'], function () {
        Route::any('/forum', 'ForumController@index')->name('forum-index');
        Route::post('new-topic', 'ForumController@new_topic')->name('new-topic');
        Route::get('topic-filter', 'ForumController@topic_filter')->name('topic-filter');
        Route::get('latest-filter', 'ForumController@latest_filter')->name('latest-filter');
        Route::get('category-filter', 'ForumController@category_filter')->name('category-filter');
        Route::any('forum-inner/{slug?}', 'ForumController@forum_inner')->name('forum-inner');
        Route::get('top-filter', 'ForumController@top_filter')->name('top-filter');
        Route::any('forum-inner/{slug}', 'ForumController@forum_inner')->name('forum-inner');
        Route::post('topic-comment', 'TopicCommentController@comment')->name('topic-comment');
        Route::post('like-topic', 'LikeController@like_topic')->name('like-topic');
        Route::post('like-coment', 'LikeController@like_comment')->name('like-comment');
        Route::get('forum-autosuggest', 'SearchController@autosuggest')->name('forum-autosuggest');
    });

    Route::group(['namespace' => 'Icons'], function () {
        Route::get('/icons', 'IconsController@index')->name('icons-index');
        Route::get('inner-icons/{slug}', 'IconsController@inner_icons')->name('inner-icons');
        Route::get('category-click-icons', 'IconsController@category_click_icons')->name('category-click-icons');
        Route::post('add-to-collection-icons', 'CartControllerIcons@add_to_collection_icons')->name('add-to-collection-icons');
        Route::get('trend-filter', 'IconsController@trend_filter')->name('trend-filter');
        Route::get('icons-search', 'IconSearchController@autocomplete')->name('icons-search');
        Route::get('pack-page/{category_slug}', 'IconsController@pack_page')->name('pack-page');
    });
});

Route::group(['namespace' => 'Backend'], function () {
    Route::Group(['prefix' => 'Forum'], function () {
        Route::any('all-topics', 'ForumController@all_topics')->name('all-topics');
        Route::post('topic-status', 'ForumController@topic_status')->name('topic-status');
        Route::get('delete-topic/{id}', 'ForumController@delete_topic')->name('delete-topic');
        Route::get('show-topic/{slug}', 'ForumController@show_topic')->name('show-topic');
        Route::any('/add-category-forum', 'ForumController@add_category_forum')->name('add-category-forum');
        Route::any('forum', 'ForumController@index')->name('forum');
    });
    Route::Group(['prefix' => 'Icons'], function () {
        Route::any('/icon-category', 'IconController@category')->name('category');
//        Route::any('/icon-tags', 'IconController@icon_tags')->name('icon-tags');
        Route::any('/icon-trend', 'IconController@icon_trend')->name('icon-trend');
        Route::any('/icon-style', 'IconController@icon_style')->name('icon-style');
        Route::any('/icon-upload', 'IconController@icon_upload')->name('icon-upload');
        Route::any('/show-icon', 'IconController@show_icon')->name('show-icon');
        Route::any('edit-icon-category/{id?}', 'IconController@edit_icon_category')->name('edit-icon-category');
        Route::any('edit-icon-trend/{id?}', 'IconController@edit_icon_trend')->name('edit-icon-trend');
        Route::any('edit-icon-style/{id?}', 'IconController@edit_icon_style')->name('edit-icon-style');
        Route::any('edit-icon-upload/{id?}', 'IconController@edit_icon_upload')->name('edit-icon-upload');
        Route::any('delete-icon-category/{id?}', 'IconController@delete_icon_category')->name('icon-category-delete');
        Route::any('delete-icon-trend/{id?}', 'IconController@delete_icon_trend')->name('icon-trend-delete');
        Route::any('delete-icon-style/{id?}', 'IconController@delete_icon_style')->name('icon-style-delete');
        Route::any('delete-icon-upload/{id?}', 'IconController@delete_icon_upload')->name('icon-upload-delete');
    });
    Route::Group(['prefix' => 'Music'], function () {
        Route::any('/music-tags', 'MusicController@tags')->name('music-tags');
        Route::any('edit-tags/{id?}', 'MusicController@edit_tags')->name('music-tags-edit');
        Route::get('delete-tags/{id}', 'MusicController@delete_tags')->name('music-tags-delete');
        Route::any('/music-themes', 'MusicController@themes')->name('theme');
        Route::any('edit-music-theme/{id?}', 'MusicController@edit_theme')->name('edit-music-theme');
        Route::any('delete-music-theme/{id?}', 'MusicController@delete_theme')->name('delete-music-theme');
        Route::any('/music-genre', 'MusicController@genre')->name('genre');
        Route::any('edit-music-genre/{id?}', 'MusicController@edit_genre')->name('edit-music-genre');
        Route::any('delete-music-genre/{id?}', 'MusicController@delete_genre')->name('delete-music-genre');
        Route::any('/music-mood', 'MusicController@mood')->name('mood');
        Route::any('edit-music-mood/{id?}', 'MusicController@edit_mood')->name('edit-music-mood');
        Route::any('delete-music-mood/{id?}', 'MusicController@delete_mood')->name('delete-music-mood');
        Route::any('/music-artist', 'MusicController@artist')->name('artist');
        Route::any('edit-music-artist/{id?}', 'MusicController@edit_artist')->name('edit-music-artist');
        Route::any('delete-music-artist/{id?}', 'MusicController@delete_artist')->name('delete-music-artist');
        Route::any('/music-upload', 'MusicController@music')->name('music-upload');
        Route::any('edit-music-upload/{id?}', 'MusicController@edit_music')->name('edit-music');
        Route::any('delete-music-upload/{id?}', 'MusicController@delete_music')->name('delete-music');
        Route::any('/show-music', 'MusicController@show_music')->name('show-music');
        Route::any('/music-slider', 'MusicController@music_slider')->name('music-slider');
        Route::any('edit-slider/{id?}', 'MusicController@edit_slide')->name('slide-edit');
        Route::any('delete-slider/{id?}', 'MusicController@slider_delete')->name('slide-delete');
        Route::any('music_download/{id?}', 'MusicController@music_download')->name('music_download');

    });
    Route::Group(['prefix' => 'Photos'], function () {
        Route::any('/image-categories', 'ImageController@categories')->name('categories');
        Route::any('/image-genders', 'ImageController@genders')->name('genders');
        Route::any('/image-races', 'ImageController@races')->name('races');
        Route::any('/image-ages', 'ImageController@ages')->name('ages');
        Route::any('/image-hairs', 'ImageController@hairs')->name('hairs');
        Route::any('/image-body-types', 'ImageController@body_types')->name('body-types');
        Route::any('/image-tags', 'ImageController@tags')->name('tags');
        Route::any('/image-credits', 'ImageController@credits')->name('credits');
        Route::any('/image', 'ImageController@image_upload')->name('image-upload');
        Route::any('/show-image', 'ImageController@show_image')->name('show-image');
        Route::any('/image-special-features', 'ImageController@special_features')->name('special-features');
        Route::get('delete-category/{id}', 'ImageController@delete_category')->name('category-delete');
        Route::get('delete-gender/{id}', 'ImageController@delete_gender')->name('gender-delete');
        Route::get('delete-race/{id}', 'ImageController@delete_race')->name('race-delete');
        Route::get('delete-age/{id}', 'ImageController@delete_age')->name('age-delete');
        Route::get('delete-hair/{id}', 'ImageController@delete_hair')->name('hair-delete');
        Route::get('delete-body-types/{id}', 'ImageController@delete_body_types')->name('body-delete');
        Route::get('delete-special-features/{id}', 'ImageController@delete_special_features')->name('special-delete');
        Route::get('delete-tags/{id}', 'ImageController@delete_tags')->name('tags-delete');
        Route::get('delete-credits/{id}', 'ImageController@delete_credits')->name('credits-delete');
        Route::get('delete-image/{id}', 'ImageController@delete_image')->name('image-delete');
        Route::any('edit-category/{id?}', 'ImageController@edit_category')->name('category-edit');
        Route::any('edit-gender/{id?}', 'ImageController@edit_gender')->name('gender-edit');
        Route::any('edit-race/{id?}', 'ImageController@edit_race')->name('race-edit');
        Route::any('edit-age/{id?}', 'ImageController@edit_age')->name('age-edit');
        Route::any('edit-hair/{id?}', 'ImageController@edit_hair')->name('hair-edit');
        Route::any('edit-body-types/{id?}', 'ImageController@edit_body_types')->name('body-edit');
        Route::any('edit-special-features/{id?}', 'ImageController@edit_special_features')->name('special-edit');
        Route::any('edit-tags/{id?}', 'ImageController@edit_tags')->name('tags-edit');
        Route::any('edit-credits/{id?}', 'ImageController@edit_credits')->name('credits-edit');
        Route::any('edit-image/{id?}', 'ImageController@edit_image')->name('image-edit');
        Route::any('/order', 'ImageController@show_orders')->name('image-orders');
        Route::any('/latest-order', ['middleware' => 'order_access', 'uses' => 'ImageController@latest_orders'])->name('latest-orders');
        Route::any('/order-status', 'ImageController@order_status')->name('order-status');
        Route::any('/order-upload', 'ImageController@order_upload')->name('order-upload');
        Route::any('/assign-status', 'ImageController@assign_status')->name('assign-status');
        Route::any('delete-order/{id?}', 'ImageController@delete_order')->name('delete-order');
        Route::any('image-details/{id?}', 'ImageController@image_details')->name('image-details');
        Route::any('order-assign/{id?}', 'ImageController@order_assign')->name('order-assign');
        Route::any('assign-delete/{id?}', 'ImageController@assign_delete')->name('assign-delete');
        Route::get('/image-modal/{id?}', 'ImageController@image_modal')->name('image-modal');
        Route::get('/order-download/{id}', 'ImageController@order_download')->name('order-download');
        Route::get('/upload-delete/{id}', 'ImageController@upload_delete')->name('upload-delete');
        Route::any('/show-order', 'ImageController@show_order')->name('show-order');
        Route::any('/sliders', 'ImageController@sliders')->name('sliders');
        Route::any('image-log', 'ImageController@image_log')->name('image-log');
        Route::any('/invoice/{id?}', 'ImageController@order_invoice')->name('invoice');
        Route::get('/generate-pdf/{id?}','ImageController@generate_PDF')->name('pdf');
        Route::any('edit-slide/{id?}', 'ImageController@edit_slide')->name('slider-edit');
        Route::any('delete-slide/{id?}', 'ImageController@slider_delete')->name('slider-delete');

    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
