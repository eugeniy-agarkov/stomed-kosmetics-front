<?php
namespace App\Models\Clinic;

use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

}
