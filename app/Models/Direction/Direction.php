<?php

namespace App\Models\Direction;

use App\Queries\Blog\BlogCategoryQuery;
use App\Queries\Direction\DirectionQuery;
use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
     * @return HasOne
     */
    public function category(): HasOne
    {

        return $this->hasOne(DirectionCategory::class);

    }

}
