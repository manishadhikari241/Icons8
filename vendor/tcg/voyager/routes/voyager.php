<?php

use Illuminate\Support\Str;
use TCG\Voyager\Events\Routing;
use TCG\Voyager\Events\RoutingAdmin;
use TCG\Voyager\Events\RoutingAdminAfter;
use TCG\Voyager\Events\RoutingAfter;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Voyager Routes
|--------------------------------------------------------------------------
|
| This file is where you may override any of the routes that are included
| with Voyager.
|
*/

Route::group(['as' => 'voyager.'], function () {
    event(new Routing());

    Route::group(['namespace' => 'Backend'], function () {
        Route::any('/show-order', 'ImageController@show_order')->name('show-order');

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
            Route::any('/icon-tags', 'IconController@icon_tags')->name('icon-tags');
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
        });
    });
    $namespacePrefix = '\\' . config('voyager.controllers.namespace') . '\\';

    Route::get('loggedin', ['uses' => $namespacePrefix . 'VoyagerAuthController@login', 'as' => 'login']);
    Route::post('loggedin', ['uses' => $namespacePrefix . 'VoyagerAuthController@postLogin', 'as' => 'postlogin'])->name('login');

    Route::group(['middleware' => 'admin.user'], function () use ($namespacePrefix) {
        event(new RoutingAdmin());

        // Main Admin and Logout Route
        Route::get('/', ['uses' => $namespacePrefix . 'VoyagerController@index', 'as' => 'dashboard']);
        Route::post('logout', ['uses' => $namespacePrefix . 'VoyagerController@logout', 'as' => 'logout']);
        Route::post('upload', ['uses' => $namespacePrefix . 'VoyagerController@upload', 'as' => 'upload']);

        Route::get('profile', ['uses' => $namespacePrefix . 'VoyagerUserController@profile', 'as' => 'profile']);

        try {
            foreach (Voyager::model('DataType')::all() as $dataType) {
                $breadController = $dataType->controller
                    ? Str::start($dataType->controller, '\\')
                    : $namespacePrefix . 'VoyagerBaseController';

                Route::get($dataType->slug . '/order', $breadController . '@order')->name($dataType->slug . '.order');
                Route::post($dataType->slug . '/action', $breadController . '@action')->name($dataType->slug . '.action');
                Route::post($dataType->slug . '/order', $breadController . '@update_order')->name($dataType->slug . '.order');
                Route::get($dataType->slug . '/{id}/restore', $breadController . '@restore')->name($dataType->slug . '.restore');
                Route::get($dataType->slug . '/relation', $breadController . '@relation')->name($dataType->slug . '.relation');
                Route::resource($dataType->slug, $breadController);
            }
        } catch (\InvalidArgumentException $e) {
            throw new \InvalidArgumentException("Custom routes hasn't been configured because: " . $e->getMessage(), 1);
        } catch (\Exception $e) {
            // do nothing, might just be because table not yet migrated.
        }

        // Role Routes
        Route::resource('roles', $namespacePrefix . 'VoyagerRoleController');

        // Menu Routes
        Route::group([
            'as' => 'menus.',
            'prefix' => 'menus/{menu}',
        ], function () use ($namespacePrefix) {
            Route::get('builder', ['uses' => $namespacePrefix . 'VoyagerMenuController@builder', 'as' => 'builder']);
            Route::post('order', ['uses' => $namespacePrefix . 'VoyagerMenuController@order_item', 'as' => 'order']);

            Route::group([
                'as' => 'item.',
                'prefix' => 'item',
            ], function () use ($namespacePrefix) {
                Route::delete('{id}', ['uses' => $namespacePrefix . 'VoyagerMenuController@delete_menu', 'as' => 'destroy']);
                Route::post('/', ['uses' => $namespacePrefix . 'VoyagerMenuController@add_item', 'as' => 'add']);
                Route::put('/', ['uses' => $namespacePrefix . 'VoyagerMenuController@update_item', 'as' => 'update']);
            });
        });

        // Settings
        Route::group([
            'as' => 'settings.',
            'prefix' => 'settings',
        ], function () use ($namespacePrefix) {
            Route::get('/', ['uses' => $namespacePrefix . 'VoyagerSettingsController@index', 'as' => 'index']);
            Route::post('/', ['uses' => $namespacePrefix . 'VoyagerSettingsController@store', 'as' => 'store']);
            Route::put('/', ['uses' => $namespacePrefix . 'VoyagerSettingsController@update', 'as' => 'update']);
            Route::delete('{id}', ['uses' => $namespacePrefix . 'VoyagerSettingsController@delete', 'as' => 'delete']);
            Route::get('{id}/move_up', ['uses' => $namespacePrefix . 'VoyagerSettingsController@move_up', 'as' => 'move_up']);
            Route::get('{id}/move_down', ['uses' => $namespacePrefix . 'VoyagerSettingsController@move_down', 'as' => 'move_down']);
            Route::put('{id}/delete_value', ['uses' => $namespacePrefix . 'VoyagerSettingsController@delete_value', 'as' => 'delete_value']);
        });

        // Admin Media
        Route::group([
            'as' => 'media.',
            'prefix' => 'media',
        ], function () use ($namespacePrefix) {
            Route::get('/', ['uses' => $namespacePrefix . 'VoyagerMediaController@index', 'as' => 'index']);
            Route::post('files', ['uses' => $namespacePrefix . 'VoyagerMediaController@files', 'as' => 'files']);
            Route::post('new_folder', ['uses' => $namespacePrefix . 'VoyagerMediaController@new_folder', 'as' => 'new_folder']);
            Route::post('delete_file_folder', ['uses' => $namespacePrefix . 'VoyagerMediaController@delete', 'as' => 'delete']);
            Route::post('move_file', ['uses' => $namespacePrefix . 'VoyagerMediaController@move', 'as' => 'move']);
            Route::post('rename_file', ['uses' => $namespacePrefix . 'VoyagerMediaController@rename', 'as' => 'rename']);
            Route::post('upload', ['uses' => $namespacePrefix . 'VoyagerMediaController@upload', 'as' => 'upload']);
            Route::post('remove', ['uses' => $namespacePrefix . 'VoyagerMediaController@remove', 'as' => 'remove']);
            Route::post('crop', ['uses' => $namespacePrefix . 'VoyagerMediaController@crop', 'as' => 'crop']);
        });

        // BREAD Routes
        Route::group([
            'as' => 'bread.',
            'prefix' => 'bread',
        ], function () use ($namespacePrefix) {
            Route::get('/', ['uses' => $namespacePrefix . 'VoyagerBreadController@index', 'as' => 'index']);
            Route::get('{table}/create', ['uses' => $namespacePrefix . 'VoyagerBreadController@create', 'as' => 'create']);
            Route::post('/', ['uses' => $namespacePrefix . 'VoyagerBreadController@store', 'as' => 'store']);
            Route::get('{table}/edit', ['uses' => $namespacePrefix . 'VoyagerBreadController@edit', 'as' => 'edit']);
            Route::put('{id}', ['uses' => $namespacePrefix . 'VoyagerBreadController@update', 'as' => 'update']);
            Route::delete('{id}', ['uses' => $namespacePrefix . 'VoyagerBreadController@destroy', 'as' => 'delete']);
            Route::post('relationship', ['uses' => $namespacePrefix . 'VoyagerBreadController@addRelationship', 'as' => 'relationship']);
            Route::get('delete_relationship/{id}', ['uses' => $namespacePrefix . 'VoyagerBreadController@deleteRelationship', 'as' => 'delete_relationship']);
        });

        // Database Routes
        Route::resource('database', $namespacePrefix . 'VoyagerDatabaseController');

        // Compass Routes
        Route::group([
            'as' => 'compass.',
            'prefix' => 'compass',
        ], function () use ($namespacePrefix) {
            Route::get('/', ['uses' => $namespacePrefix . 'VoyagerCompassController@index', 'as' => 'index']);
            Route::post('/', ['uses' => $namespacePrefix . 'VoyagerCompassController@index', 'as' => 'post']);
        });

        event(new RoutingAdminAfter());
    });

    //Asset Routes
    Route::get('voyager-assets', ['uses' => $namespacePrefix . 'VoyagerController@assets', 'as' => 'voyager_assets']);

    event(new RoutingAfter());
});
