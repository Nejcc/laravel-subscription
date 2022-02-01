<?php

namespace Nejcc\LaravelSubscription;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nejcc\LaravelSubscription\Skeleton\SkeletonClass
 */
class LaravelSubscriptionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-subscription';
    }
}
