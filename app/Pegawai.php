<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pegawai extends Model
{
use Uuids;

public $incrementing = false;
protected $table = 'pegawai';
protected $fillable = ['id','nama', 'email', 'level'];



}
