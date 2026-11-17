<?php

namespace JeffersonGoncalves\CcpaRetention\Tests;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use JeffersonGoncalves\Ccpa\CcpaServiceProvider;
use JeffersonGoncalves\CcpaRetention\CcpaRetentionServiceProvider;
use JeffersonGoncalves\CcpaRetention\Tests\Fixtures\Contract;
use JeffersonGoncalves\CcpaRetention\Tests\Fixtures\Customer;
use JeffersonGoncalves\PestPluginDatabaseMigrations\LoadsPackageMigrations;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use LoadsPackageMigrations;

    protected function getPackageProviders($app): array
    {
        return [
            CcpaServiceProvider::class,
            CcpaRetentionServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('app.key', 'base64:'.base64_encode(str_repeat('a', 32)));
        $app['config']->set('database.default', 'testing');
        $app['config']->set('ccpa.models', [Customer::class, Contract::class]);
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadPackageMigrations(CcpaRetentionServiceProvider::class);

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('signer')->nullable();
            $table->timestamp('ended_at')->nullable();
        });
    }
}
