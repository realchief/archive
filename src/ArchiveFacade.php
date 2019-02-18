<?php

namespace Realchief\Archive;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Realchief\Archive\Skeleton\SkeletonClass
 */
class ArchiveFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'archive';
    }
}
