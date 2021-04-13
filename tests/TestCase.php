<?php

namespace Dimimo\PictureConverter\Tests;

use Dimimo\PictureConverter\PictureConverterServiceProvider;
use Illuminate\Foundation\Application;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     *
     */
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    /**
     * @param Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            PictureConverterServiceProvider::class,
        ];
    }

    /**
     * @param Application  $app
     */
    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
