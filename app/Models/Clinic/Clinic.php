<?php
namespace App\Models\Clinic;

use App\Models\Direction\Direction;
use App\Models\Direction\DirectionCategory;
use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Clinic extends Model
{
    use HasFactory,
        IsActiveTrait;

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
    public function detail(): HasOne
    {
        return $this->hasOne(ClinicDetail::class);
    }

    /**
     * @return HasMany
     */
    public function faq(): HasMany
    {
        return $this->hasMany(ClinicFaq::class);
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(ClinicImage::class);
    }

    /**
     * @return HasMany
     */
    public function directions(): HasMany
    {
        return $this->hasMany(Direction::class);
    }

}
