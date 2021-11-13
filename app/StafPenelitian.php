<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StafPenelitian extends Model
{
    use SoftDeletes;
    protected $table = 'staf_penelitians';
}
