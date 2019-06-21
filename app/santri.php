<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    protected $table = 'santri';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat'];
}
