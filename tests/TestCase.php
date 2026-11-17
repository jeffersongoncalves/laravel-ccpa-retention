<?php

namespace JeffersonGoncalves\CcpaRetention\Tests;

use JeffersonGoncalves\CcpaRetention\CcpaRetentionServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            CcpaRetentionServiceProvider::class,
        ];
    }
}
