<?php

namespace App\Models\Reviews;

use App\Models\Clinic\Clinic;
use App\Models\Direction\Direction;
use App\Models\Doctor\Doctor;
use App\Queries\Review\ReviewQuery;
use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes, IsActiveTrait;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $dates = ['published_at'];

    /**
     * @var string[]
     */
    protected $fillable = [
        'clinic_id',
        'doctor_id',
        'direction_id',
        'fio',
        'phone',
        'content',
        'type',
    ];

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

    /**
     * @return BelongsTo
     */
    public function clinic(): BelongsTo
    {

        return $this->belongsTo(Clinic::class);

    }

    /**
     * @return BelongsTo
     */
    public function doctor(): BelongsTo
    {

        return $this->belongsTo(Doctor::class);

    }

    /**
     * @return BelongsTo
     */
    public function direction(): BelongsTo
    {

        return $this->belongsTo(Direction::class);

    }

}
