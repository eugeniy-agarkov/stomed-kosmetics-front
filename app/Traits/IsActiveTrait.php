<?php
namespace App\Traits;

use App\Scopes\IsActiveScope;

trait IsActiveTrait
{

    /**
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();
        static::addGlobalScope(new IsActiveScope());
    }

}
