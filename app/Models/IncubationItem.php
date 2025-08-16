<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncubationItem extends Model
{
    protected $fillable = ['name', 'description', 'reminder_date'];


}
