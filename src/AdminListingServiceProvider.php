<?php

namespace Brackets\AdminListing;

use Illuminate\Support\ServiceProvider;
use Brackets\AdminListing\Facades\AdminListing as AdminListingFacade;

class AdminListingServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('admin-listing', AdminListing::class);

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('AdminListing', AdminListingFacade::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['admin-listing'];
    }
}
