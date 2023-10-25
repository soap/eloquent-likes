<?php

namespace Soap\EloquentLike;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\EloquentLike\Commands\EloquentLikePruneCommand;

class EloquentLikeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('eloquent-likes')
            ->hasConfigFile()
            ->hasMigration('create_eloquent-likes_table')
            ->hasCommand(EloquentLikePruneCommand::class);
    }
}
