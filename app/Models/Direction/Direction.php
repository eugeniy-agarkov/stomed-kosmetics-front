<?php

namespace App\Models\Direction;

use App\Models\Gallery\Gallery;
use App\Queries\Blog\BlogCategoryQuery;
use App\Queries\Direction\DirectionQuery;
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

        return $this->hasOne(DirectionCategory::class);

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

}
