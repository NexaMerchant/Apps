<?php

namespace NexaMerchant\Apps\Helpers;

use Illuminate\Support\Facades\Route;

// This is a helper class for Apps
final class Apps
{
    // This is a helper function for Apps
    public static function routes()
    {
        Route::group([
            'namespace' => 'NexaMerchant\Apps\Http\Controllers',
            'prefix' => 'api',
            'middleware' => 'api',
        ], function () {
            Route::get('apps', 'AppsController@index');
            Route::post('apps', 'AppsController@store');
            Route::get('apps/{id}', 'AppsController@show');
            Route::put('apps/{id}', 'AppsController@update');
            Route::delete('apps/{id}', 'AppsController@destroy');
        });
    }

    /**
     * Get the locale of the entity
     *
     * @param  \Webkul\Core\Contracts\Channel  $entity
     * @return string
     */
    public static function getLocale($entity)
    {
        $objectFirstItem = $entity->items->first();

        return $objectFirstItem->additional['locale'] ?? 'en';
    }

    /**
     * Get the previous locale
     *
     * @return string
     */
    public static function getPreviousLocale()
    {
        return core()->getCurrentLocale()->code;
    }

    /**
     * Set the locale
     *
     * @param  string  $locale
     * @return void
     */
    public static function setLocale($locale)
    {
        app()->setLocale($locale);
    }
    
    

    
}