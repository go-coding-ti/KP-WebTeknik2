<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JabatanPegawai extends Model
{
    use SoftDeletes;
    protected $table="jabatan_pegawais";
}
