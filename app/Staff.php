<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = "staffs";
    

    public function jabatan(){
        return $this->belongsTo('App\Jabatan', 'id_jabatan');
    }

    public function staf_prodi(){
        return $this->hasMany('App\StafProdi', 'id_staf');
    }

}
