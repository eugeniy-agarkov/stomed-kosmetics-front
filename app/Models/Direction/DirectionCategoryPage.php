<?php

namespace App\Models\Direction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DirectionCategoryPage extends Model
{
    use HasFactory;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */
    protected $primaryKey = 'category_id';

    /**
     * @var string[]
     */
    protected $fillable = [
        'category_id',
        'h1',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'robots',
        'content',
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(DirectionCategory::class);
    }

}
