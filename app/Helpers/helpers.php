<?php
use Illuminate\Support\Facades\Cache;

/**
 * Settings
 * @param $value
 * @return mixed
 */
function settings($value)
{
    return Cache::get('settings')->where('name', $value)->first()->value;
}
