<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduledItem extends Model
{
    protected $fillable = ['name', 'description', 'scheduled_at', 'is_critical'];
}
