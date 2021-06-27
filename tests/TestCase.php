<?php

namespace HeaderX\LegacyLoader\Tests;

use HeaderX\LegacyLoader\LegacyLoaderServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LegacyLoaderServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('app.env', 'testing');
        config()->set('app.key', 'base64:a5yFRDmbt09LYMeNJGDeLd+wOfdrQ0NK7BNSLzMaVRk=');
        if (!file_exists('vendor/orchestra/testbench-core/laravel/resources/legacy')) {
            mkdir('vendor/orchestra/testbench-core/laravel/resources/legacy', 0777, true);
        }
        copy(
            __DIR__ . '/../resources/legacy/hello_world.php',
            __DIR__ . '/../vendor/orchestra/testbench-core/laravel/resources/legacy/hello_world.php'
        );
        copy(
            __DIR__ . '/../resources/legacy/query_string.php',
            __DIR__ . '/../vendor/orchestra/testbench-core/laravel/resources/legacy/query_string.php'
        );
    }
}
