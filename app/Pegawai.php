<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Pegawai extends Model
{
   protected $table = 'pegawai';

	protected $fillable = ['id','nama', 'email', 'level'];


public function getHashidAttribute()
{
    return Hash::make($this->attributes['id']);
}

}
