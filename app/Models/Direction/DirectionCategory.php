<?php

namespace App\Models\Direction;

use App\Queries\Direction\DirectionCategoryQuery;
use App\Scopes\Direction\DirectionCategoryScope;
use App\Scopes\IsActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DirectionCategory extends Model
{
    use HasFactory;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $dates = ['published_at'];

    /**
     * @param $query
     * @return DirectionCategoryQuery
     */
    public function newEloquentBuilder($query): DirectionCategoryQuery
    {

        return new DirectionCategoryQuery($query);

    }

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new IsActiveScope());
        static::addGlobalScope(new DirectionCategoryScope());
    }

    /**
     * @return HasMany
     */
    public function directions(): HasMany
    {
        return $this->hasMany(Direction::class, 'category_id');
    }

}
