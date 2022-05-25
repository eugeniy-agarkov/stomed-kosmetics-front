<?php

namespace App\Models\Direction;

use App\Models\Gallery\Gallery;
use App\Models\Reviews\Review;
use App\Queries\Blog\BlogCategoryQuery;
use App\Queries\Direction\DirectionQuery;
use App\Scopes\Direction\DirectionScope;
use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direction extends Model
{
    use HasFactory,
        IsActiveTrait,
        SoftDeletes;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $dates = ['published_at'];

    /**
     * @return void
     */
    protected static function boot(): void
    {

        parent::boot();
        static::addGlobalScope(new DirectionScope());

    }

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

        return $this->hasOne(DirectionCategory::class, 'id', 'category_id');

    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(DirectionImage::class);
    }

    /**
     * @return HasMany
     */
    public function gallery(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    /**
     * @param $query
     * @return DirectionQuery
     */
    public function newEloquentBuilder($query): DirectionQuery
    {

        return new DirectionQuery($query);

    }

    /**
     * @return HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(DirectionPrice::class);
    }

    /**
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * @return mixed
     */
    public function minPrice(): mixed
    {

        $prices = $this->prices()->get();

        $min_price = $prices->min('price');
        $min_price_discount = $prices->min('discount_price');

        return $min_price_discount ? $min_price_discount : $min_price;

    }


}
