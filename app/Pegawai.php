<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use SoftDeletes;
    protected $table="pegawais";

    public function jabatan(){
        return $this->belongsTo('App\JabatanPegawai', 'id_jabatan');
    }
}
