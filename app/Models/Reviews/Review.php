<?php

namespace App\Models\Reviews;

use App\Queries\Review\ReviewQuery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

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
     * @return ReviewQuery
     */
    public function newEloquentBuilder($query): ReviewQuery
    {

        return new ReviewQuery($query);

    }

    /**
     * @return HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(ReviewPhoto::class);
    }
}
