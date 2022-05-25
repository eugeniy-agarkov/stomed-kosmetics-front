<?php

namespace App\Models\Doctor;

use App\Models\Clinic\Clinic;
use App\Models\Reviews\Review;
use App\Queries\Doctor\DoctorQuery;
use App\Scopes\Doctor\DoctorScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Lang;

class Doctor extends Model
{
    use HasFactory,
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
     * @return void
     */
    protected static function boot(): void
    {

        parent::boot();
        static::addGlobalScope(new DoctorScope());

    }

    /**
     * @param $query
     * @return DoctorQuery
     */
    public function newEloquentBuilder($query): DoctorQuery
    {

        return new DoctorQuery($query);

    }

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return BelongsToMany
     */
    public function clinics(): BelongsToMany
    {
        return $this->belongsToMany(Clinic::class);
    }

    /**
     * @return HasOne
     */
    public function page(): HasOne
    {
        return $this->hasOne(DoctorPage::class);
    }

    /**
     * @return HasMany
     */
    public function sertificats(): HasMany
    {
        return $this->hasMany(DoctorSertificat::class);
    }

    /**
     * @return HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(DoctorPrice::class);
    }

    /**
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'doctor_id');
    }

    /**
     * @return string
     */
    public function getExperienceAttribute($value): string
    {

        if( ! empty( $value ) )
        {
            $count = now()->year - (int) $value;
            $value = $count . ' ' . Lang::choice('год|года|лет', $count, [], 'ru');
        }

        return $value;
    }

}
