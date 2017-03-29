<?php

namespace laravel;

use Illuminate\Database\Eloquent\Model;
use Uuids;

class Pegawai extends Model
{


public $incrementing = false;
protected $table = 'pegawai';
protected $fillable = ['id','nama', 'email', 'level'];



}
