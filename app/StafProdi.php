<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StafProdi extends Model
{
    use SoftDeletes;
    protected $table = 'staf_prodis';

    public function prodi(){
        return $this->belongsTo('App\Prodi', 'id_prodi');
    }
}
