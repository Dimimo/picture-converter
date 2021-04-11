<?php

namespace Dimimo\PictureConverter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dimimo\PictureConverter\Skeleton\SkeletonClass
 */
class PictureConverterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'picture-converter';
    }
}
