<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StafBidang extends Model
{
    use SoftDeletes;
    protected $table = 'staf_bidangs';
}
