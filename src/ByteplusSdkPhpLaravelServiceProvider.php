<?php

namespace BytePlus\ByteplusSdkPhpLaravel;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BytePlus\ByteplusSdkPhpLaravel\Commands\ByteplusSdkPhpLaravelCommand;

class ByteplusSdkPhpLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('byteplus')
            ->hasConfigFile()
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->startWith(function (InstallCommand $command) {
                        $command->info('This is a non-profit community package. Give a star, if you wanna support us.');
                    })
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('haydar/byteplus-sdk-php')
                    ->endWith(function (InstallCommand $command) {
                        $command->info('Thank you for support us!');
                    });
        });
    }
}
