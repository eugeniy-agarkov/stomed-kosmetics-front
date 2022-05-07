<?php

namespace App\Models\Direction;

use App\Queries\Blog\BlogCategoryQuery;
use App\Queries\Direction\DirectionQuery;
use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
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


}
