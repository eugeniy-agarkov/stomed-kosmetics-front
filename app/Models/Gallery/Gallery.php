<?php

namespace App\Models\Gallery;

use App\Models\Direction\Direction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
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
     * @return BelongsTo
     */
    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class);
    }

}
