<?php
namespace App\Models\Clinic;

use App\Traits\IsActiveTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory,
        IsActiveTrait;

}
