<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
       /**
     * Boot function from Laravel.
     */
    protected static function boot()
    {
        // parent::boot();
        // static::creating(function ($model) {
        //     if (empty($model->{$model->getKeyName()})) {
        //         $model->{$model->getKeyName()} = Str::uuid()->toString();
        //     }
        // });

        parent::boot();
    
        static::creating(function ($event) {
            $event->id = Str::uuid();
        });
    }   /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }   /**
     * Get the auto-incrementing key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }
}