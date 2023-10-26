<?php 
namespace aqib08\LocationMap;

use Illuminate\Support\ServiceProvider;

class LocationMapServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings or service container bindings here.
      $this->app->bind('readCsvb', function ($app) {
          return new ReadCsv();
      });
      $this->app->bind('Country', function ($app) {
        return new Country();
       });
       $this->app->bind('City', function ($app) {
        return new City();
       });
       $this->app->bind('Region', function ($app) {
        return new Region();
       });
       $this->app->bind('SubRegion', function ($app) {
        return new SubRegion();
       });
       $this->app->bind('State', function ($app) {
        return new State();
       });
       $this->app->alias(Country::class, 'Country');
    }

    public function boot()
    {
        // Load the package's migrations
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        $this->loadMigrationsFrom(__DIR__.'/Database/Seeders');
    }
}
?>