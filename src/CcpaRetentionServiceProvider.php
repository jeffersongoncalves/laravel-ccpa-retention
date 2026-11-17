<?php

namespace JeffersonGoncalves\CcpaRetention;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaRetentionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-ccpa-retention')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
