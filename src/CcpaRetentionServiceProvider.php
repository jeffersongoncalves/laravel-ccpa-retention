<?php

namespace JeffersonGoncalves\CcpaRetention;

use Illuminate\Support\Facades\Event;
use JeffersonGoncalves\Ccpa\Events\PersonalDataAnonymized;
use JeffersonGoncalves\CcpaRetention\Commands\ReapplyCommand;
use JeffersonGoncalves\CcpaRetention\Commands\RetentionCommand;
use JeffersonGoncalves\CcpaRetention\Listeners\RecordTombstones;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaRetentionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('ccpa-retention')
            ->hasConfigFile()
            ->hasMigrations(['create_ccpa_retention_tombstones_table'])
            ->hasCommands([RetentionCommand::class, ReapplyCommand::class]);
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(RetentionManager::class);
    }

    public function packageBooted(): void
    {
        Event::listen(PersonalDataAnonymized::class, RecordTombstones::class);
    }
}
