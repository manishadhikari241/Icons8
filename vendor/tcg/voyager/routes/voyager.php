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
