<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = ['title', 'completed'];
}
