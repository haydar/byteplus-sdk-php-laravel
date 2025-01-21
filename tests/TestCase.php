<?php

namespace BytePlus\BytePlusSdkPhpLaravel\Tests;

use BytePlus\BytePlusSdkPhpLaravel\BytePlusSdkPhpLaravelServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'BytePlus\\BytePlusSdkPhpLaravel\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            BytePlusSdkPhpLaravelServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_byteplus-sdk-php-laravel_table.php.stub';
        $migration->up();
        */
    }
}
