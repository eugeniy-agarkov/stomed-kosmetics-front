<?php

namespace App\Models\News;

use App\Queries\News\BlogQuery;
use App\Scopes\News\BlogScope;
use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
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
     * @param $query
     * @return BlogQuery
     */
    public function newEloquentBuilder($query): BlogQuery
    {

        return new BlogQuery($query);

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
    protected static function boot(): void
    {

        parent::boot();
        static::addGlobalScope(new BlogScope());

    }

    /**
     * @return HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(BlogPrice::class);
    }
}
