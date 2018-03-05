<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsinMon extends Model
{
    use SoftDeletes;

    protected $table = 'app_asin_mon';
}
