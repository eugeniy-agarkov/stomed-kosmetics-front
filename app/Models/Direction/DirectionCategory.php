<?php

namespace App\Models\Direction;

use App\Queries\Direction\DirectionCategoryQuery;
use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectionCategory extends Model
{
    use HasFactory,
        IsActiveTrait;

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

}
