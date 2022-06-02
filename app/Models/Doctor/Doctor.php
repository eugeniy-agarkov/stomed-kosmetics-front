<?php

namespace App\Models\Doctor;

use App\Models\Clinic\Clinic;
use App\Models\Reviews\Review;
use App\Models\Slot;
use App\Queries\Doctor\DoctorQuery;
use App\Scopes\Doctor\DoctorScope;
use Carbon\Carbon;
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

    /**
     * @return HasMany
     */
    public function slots(): HasMany
    {
        return $this->hasMany(Slot::class, 'doctorId', 'code');
    }

    /**
     * @return array
     */
    public function getSlots($date = null, $clinic): array
    {

        if( !$date )
        {
            $date = Carbon::now()->format('Y-m-d');
        }

        $items = self::slots()->where('clinicId', $clinic)->get();

        $slot_duration = 15;
        $dates = [];

        if( ! $items->count() ) return $dates;

        foreach ( $items as $item )
        {

            $cDate = Carbon::parse($item->from);
            $cDate_end = Carbon::parse($item->to);

            $slots = $cDate->diffInMinutes($cDate_end) / $slot_duration;

            $dates[$cDate->toDateString()][] = $cDate->format('H:i');

            for( $s = 1; $s <=$slots; $s++ )
            {

                $dates[$cDate->toDateString()][] = $cDate->addMinute($slot_duration)->format('H:i');

            }

        }

        return array_key_exists($date, $dates) ? $dates[$date] : [];

    }

}
