<?php

namespace Dimimo\PictureConverter\Tests;

use Orchestra\Testbench\TestCase;
use Dimimo\PictureConverter\PictureConverterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PictureConverterServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
