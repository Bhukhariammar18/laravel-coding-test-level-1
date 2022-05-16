<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Traits\HasUuid;

class Event extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = ['name', 'slud', 'startAt', 'endAt'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    
}
