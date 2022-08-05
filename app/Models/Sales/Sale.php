<?php

namespace App\Models\Sales;

use App\Queries\Sale\SaleQuery;
use App\Scopes\IsActiveScope;
use App\Scopes\Sale\SaleScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $dates = [
        'published_at',
        'date_end'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'date_end'  => 'date:Y-m-d H:i A',
    ];

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return HasOne
     */
    public function category(): HasOne
    {

        return $this->hasOne(SaleCategory::class);

    }

    /**
     * @return HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(SalePrice::class);
    }

    /**
     * @param $query
     * @return SaleQuery
     */
    public function newEloquentBuilder($query): SaleQuery
    {

        return new SaleQuery($query);

    }

    /**
     * @return void
     */
    protected static function boot(): void
    {

        parent::boot();
        static::addGlobalScope(new IsActiveScope());
        static::addGlobalScope(new SaleScope());

    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {

        return ($this->date_end < Carbon::now()) ? false : true;

    }

}
